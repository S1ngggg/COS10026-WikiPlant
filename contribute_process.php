
<?php

// ==========================================
// 1. Connect to database
// ==========================================

require_once __DIR__ . '/includes/db_connect.inc.php';


// ==========================================
// 2. Allow POST requests only
// ==========================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Invalid request method.');
}


// ==========================================
// 3. Get form data
// ==========================================

$fullname = trim($_POST['fullname'] ?? '');
$plantname = trim($_POST['plantname'] ?? '');
$plant_category = trim($_POST['plant_category'] ?? '');
$other_category = trim($_POST['other_category'] ?? '');
$comments = trim($_POST['comments'] ?? '');
$accuracy = $_POST['accuracy'] ?? '';


// ==========================================
// 4. Validate required fields
// ==========================================

if (
    $fullname === '' ||
    $plantname === '' ||
    $plant_category === '' ||
    $comments === '' ||
    $accuracy !== 'confirmed'
) {
    exit('Error: Please complete all required fields.');
}


// ==========================================
// 5. Validate contributor name
// ==========================================

if (
    mb_strlen($fullname, 'UTF-8') > 25 ||
    !preg_match("/^[\p{L}\s'-]+$/u", $fullname)
) {
    exit('Error: Invalid contributor name.');
}


// ==========================================
// 6. Validate plant name
// ==========================================

if (
    mb_strlen($plantname, 'UTF-8') > 25 ||
    !preg_match("/^[\p{L}\p{N}\s().,'-]+$/u", $plantname)
) {
    exit('Error: Invalid plant name.');
}


// ==========================================
// 7. Validate plant category
// ==========================================

$allowed_categories = [
    'Species',
    'Families',
    'Genera',
    'Others'
];

if (!in_array($plant_category, $allowed_categories, true)) {
    exit('Error: Invalid plant category.');
}


// ==========================================
// 8. Validate other category
// ==========================================

if (
    mb_strlen($other_category, 'UTF-8') > 25 ||
    (
        $other_category !== '' &&
        !preg_match("/^[\p{L}\s'-]+$/u", $other_category)
    )
) {
    exit('Error: Invalid other category.');
}

// Require a description when Others is selected
if ($plant_category === 'Others' && $other_category === '') {
    exit('Error: Please specify the other plant category.');
}

// Clear other category for standard selections
if ($plant_category !== 'Others') {
    $other_category = '';
}


// ==========================================
// 9. Validate comments
// ==========================================

if (mb_strlen($comments, 'UTF-8') > 500) {
    exit('Error: Comments must not exceed 500 characters.');
}


// ==========================================
// 10. Check photo upload
// ==========================================

if (!isset($_FILES['photo'])) {
    exit('Error: Please upload a plant photo.');
}

if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    exit('Error: Photo upload failed.');
}


// Maximum file size: 5MB
$max_file_size = 5 * 1024 * 1024;

if (
    $_FILES['photo']['size'] <= 0 ||
    $_FILES['photo']['size'] > $max_file_size
) {
    exit('Error: Photo must be a valid file not exceeding 5MB.');
}


// Check uploaded temporary file
if (!is_uploaded_file($_FILES['photo']['tmp_name'])) {
    exit('Error: Invalid uploaded file.');
}


// ==========================================
// 11. Verify actual image
// ==========================================

$image_info = getimagesize($_FILES['photo']['tmp_name']);

if ($image_info === false) {
    exit('Error: Invalid image file.');
}


// Check image dimensions
$image_width = $image_info[0];
$image_height = $image_info[1];

if (
    $image_width <= 0 ||
    $image_height <= 0 ||
    $image_width > 6000 ||
    $image_height > 6000
) {
    exit('Error: Invalid or oversized image dimensions.');
}


// ==========================================
// 12. Check MIME type
// ==========================================

$finfo = finfo_open(FILEINFO_MIME_TYPE);

if ($finfo === false) {
    exit('Error: Unable to verify image type.');
}

$mime_type = finfo_file(
    $finfo,
    $_FILES['photo']['tmp_name']
);

finfo_close($finfo);


$allowed_types = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/gif'  => 'gif',
    'image/webp' => 'webp'
];

if (!isset($allowed_types[$mime_type])) {
    exit('Error: Only JPG, PNG, GIF and WEBP are allowed.');
}


// ==========================================
// 13. Create image upload directory
// ==========================================

$upload_dir = __DIR__ . '/images/contributions/';

if (!is_dir($upload_dir)) {

    if (!mkdir($upload_dir, 0755, true) && !is_dir($upload_dir)) {
        exit('Error: Unable to create contribution upload folder.');
    }
}


// ==========================================
// 14. Generate unique image filename
// ==========================================

$extension = $allowed_types[$mime_type];

try {

    $new_filename = bin2hex(random_bytes(16)) . '.' . $extension;

} catch (Exception $e) {

    exit('Error: Unable to generate image filename.');

}


$destination = $upload_dir . $new_filename;

$photo_path = 'images/contributions/' . $new_filename;


// ==========================================
// 15. Move uploaded image
// ==========================================

if (!move_uploaded_file($_FILES['photo']['tmp_name'], $destination)) {
    exit('Error: Unable to save uploaded photo.');
}


// ==========================================
// 16. Prepare SQL statement
// ==========================================

// Column names must match the contribute table
$sql = "INSERT INTO contribute
        (
            contributor_name,
            plant_name,
            plant_category,
            other_category,
            photo_path,
            comments,
            accuracy
        )
        VALUES (?, ?, ?, ?, ?, ?, ?)";

try {

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        throw new RuntimeException('Unable to prepare contribution SQL.');
    }

    // ======================================
    // 17. Bind parameters
    // ======================================

    mysqli_stmt_bind_param(
        $stmt,
        "sssssss",
        $fullname,
        $plantname,
        $plant_category,
        $other_category,
        $photo_path,
        $comments,
        $accuracy
    );


    // ======================================
    // 18. Execute SQL statement
    // ======================================

    if (!mysqli_stmt_execute($stmt)) {
        throw new RuntimeException('Unable to execute contribution SQL.');
    }

    mysqli_stmt_close($stmt);

} catch (Throwable $e) {

    // ======================================
    // Handle database errors
    // ======================================

    error_log(
        "Contribution database error: " . $e->getMessage()
    );

    if (isset($stmt) && $stmt instanceof mysqli_stmt) {
        mysqli_stmt_close($stmt);
    }

    // Remove uploaded photo if database insertion fails
    if (file_exists($destination)) {
        unlink($destination);
    }

    http_response_code(500);
    exit('Error: Unable to save contribution. Please try again.');
}


// ==========================================
// 19. Display success notification
// ==========================================

echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contribution Successful - WikiPlant</title>
</head>

<body>

    <main>

        <h1>Contribution Submitted Successfully!</h1>

        <p>
            Thank you for contributing to WikiPlant.
        </p>

        <p>
            Your plant contribution has been saved successfully
            and is pending review.
        </p>

        <a href="contribute.php">
            Return to Contribution Page
        </a>

    </main>

</body>

</html>
';


// ==========================================
// 20. Close database connection
// ==========================================

mysqli_close($conn);

?>
