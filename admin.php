<?php
require_once __DIR__ . '/includes/session.php';

if (empty($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

$pageTitle = 'Database Tables - WikiPlant';
$cssVersion = 'admin-table-2';
$tables = [
    'plant' => 'Plants',
    'user' => 'Users',
    'register' => 'Registrations',
    'contribute' => 'Contributions',
    'enquiry' => 'Enquiries',
    'admin' => 'Admins',
];
$tableInput = $_GET['table'] ?? 'plant';
$selectedTable = is_string($tableInput) ? $tableInput : '';
$pageInput = $_GET['page'] ?? '1';
$requestedPage = is_string($pageInput) ? filter_var($pageInput, FILTER_VALIDATE_INT) : false;
$perPage = 50;
$currentPage = is_int($requestedPage) && $requestedPage > 0 ? $requestedPage : 1;
$columns = [];
$rows = [];
$totalRows = 0;
$totalPages = 1;
$adminError = '';

if (!array_key_exists($selectedTable, $tables)
    || $requestedPage === false || $requestedPage < 1) {
    http_response_code(400);
    $adminError = 'The selected table or page is invalid.';
    $selectedTable = 'plant';
}

try {
    require_once __DIR__ . '/includes/db_connect.inc.php';

    $adminId = filter_var($_SESSION['admin_id'], FILTER_VALIDATE_INT);
    if ($adminId === false || $adminId < 1) {
        unset($_SESSION['admin_id'], $_SESSION['username']);
        header('Location: login.php');
        exit;
    }

    $adminStmt = mysqli_prepare($conn, 'SELECT username FROM `admin` WHERE admin_id = ? LIMIT 1');
    if (!$adminStmt) {
        throw new RuntimeException('Unable to prepare admin account check: ' . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($adminStmt, 'i', $adminId);
    if (!mysqli_stmt_execute($adminStmt)) {
        throw new RuntimeException('Unable to check admin account: ' . mysqli_stmt_error($adminStmt));
    }
    mysqli_stmt_bind_result($adminStmt, $adminUsername);
    $adminExists = mysqli_stmt_fetch($adminStmt);
    mysqli_stmt_close($adminStmt);

    if (!$adminExists) {
        unset($_SESSION['admin_id'], $_SESSION['username']);
        header('Location: login.php');
        exit;
    }
    $_SESSION['username'] = $adminUsername;

    if ($adminError === '') {
        $countResult = mysqli_query($conn, "SELECT COUNT(*) AS row_count FROM `$selectedTable`");
        if (!$countResult) {
            throw new RuntimeException('Unable to count admin table rows: ' . mysqli_error($conn));
        }
        $count = mysqli_fetch_assoc($countResult);
        $totalRows = (int) $count['row_count'];
        $totalPages = max(1, (int) ceil($totalRows / $perPage));
        $currentPage = min($currentPage, $totalPages);
        $offset = ($currentPage - 1) * $perPage;

        $columnResult = mysqli_query($conn, "SHOW COLUMNS FROM `$selectedTable`");
        if (!$columnResult) {
            throw new RuntimeException('Unable to load admin table columns: ' . mysqli_error($conn));
        }

        $primaryKey = '';
        while ($column = mysqli_fetch_assoc($columnResult)) {
            if (strcasecmp($column['Field'], 'password') === 0) {
                continue;
            }
            $columns[] = $column['Field'];
            if ($column['Key'] === 'PRI') {
                $primaryKey = $column['Field'];
            }
        }

        if ($columns) {
            $quotedColumns = array_map(
                static function ($columnName) {
                    return '`' . str_replace('`', '``', $columnName) . '`';
                },
                $columns
            );
            $orderBy = $primaryKey !== ''
                ? ' ORDER BY `' . str_replace('`', '``', $primaryKey) . '` ASC'
                : '';
            $query = 'SELECT ' . implode(', ', $quotedColumns)
                . " FROM `$selectedTable`" . $orderBy
                . " LIMIT $perPage OFFSET $offset";
            $rowResult = mysqli_query($conn, $query);
            if (!$rowResult) {
                throw new RuntimeException('Unable to load admin table rows: ' . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_assoc($rowResult)) {
                $rows[] = $row;
            }
        }
    }
} catch (Throwable $exception) {
    error_log('Admin table view error: ' . $exception->getMessage());
    http_response_code(500);
    $adminError = 'The database table could not be loaded. Please try again.';
}

if (isset($conn) && $conn instanceof mysqli) {
    mysqli_close($conn);
}

function admin_escape($value): string
{
    if ($value === null) {
        return '<span class="admin-null">NULL</span>';
    }
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
$adminUsername = (string) ($_SESSION['username'] ?? 'Admin');
$adminInitial = strtoupper(substr($adminUsername, 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="css/style.css?v=<?= urlencode($cssVersion) ?>">
</head>
<body class="admin-page">
<div class="admin-shell">
    <aside class="admin-sidebar">
        <a class="admin-sidebar-account" href="index.php" aria-label="WikiPlant home">
            <span class="admin-avatar"><?= htmlspecialchars($adminInitial, ENT_QUOTES, 'UTF-8') ?></span>
            <span><?= htmlspecialchars($adminUsername, ENT_QUOTES, 'UTF-8') ?></span>
        </a>
        <nav class="admin-side-nav" aria-label="Database tables">
            <a class="admin-side-link <?= $selectedTable === 'plant' ? 'is-active' : '' ?>" href="admin.php?table=plant" <?= $selectedTable === 'plant' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21v-9m0 4c-5 0-8-3-8-8 5 0 8 3 8 8Zm0-3c0-5 3-8 8-8 0 5-3 8-8 8Z"/></svg>
                <span>Plants</span>
            </a>
            <a class="admin-side-link <?= $selectedTable === 'user' ? 'is-active' : '' ?>" href="admin.php?table=user" <?= $selectedTable === 'user' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8" r="3"/><path d="M3 20v-2a6 6 0 0 1 12 0v2H3Zm13-9a3 3 0 1 0 0-6m1 9a5 5 0 0 1 4 5"/></svg>
                <span>Users</span>
            </a>
            <a class="admin-side-link <?= $selectedTable === 'register' ? 'is-active' : '' ?>" href="admin.php?table=register" <?= $selectedTable === 'register' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="15" rx="1"/><path d="M8 3v4m8-4v4M4 10h16m-11 4h2m3 0h2m-7 3h2"/></svg>
                <span>Registrations</span>
            </a>
            <a class="admin-side-link <?= $selectedTable === 'contribute' ? 'is-active' : '' ?>" href="admin.php?table=contribute" <?= $selectedTable === 'contribute' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 20h16M6 17l1-9 5-4 5 4 1 9H6Zm3-7h6m-6 4h6"/></svg>
                <span>Contributions</span>
            </a>
            <a class="admin-side-link <?= $selectedTable === 'enquiry' ? 'is-active' : '' ?>" href="admin.php?table=enquiry" <?= $selectedTable === 'enquiry' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v12H9l-5 4V5Zm4 4h8m-8 4h5"/></svg>
                <span>Enquiries</span>
            </a>
            <a class="admin-side-link <?= $selectedTable === 'admin' ? 'is-active' : '' ?>" href="admin.php?table=admin" <?= $selectedTable === 'admin' ? 'aria-current="page"' : '' ?>>
                <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3"/><path d="M5 20v-2a7 7 0 0 1 14 0v2H5Z"/></svg>
                <span>Admins</span>
            </a>
        </nav>
        <div class="admin-sidebar-bottom">
            <a class="admin-side-link" href="index.php">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 5h5v14h-5M4 12h14m-8-6-6 6 6 6"/></svg>
                <span>View website</span>
            </a>
            <form action="logout.php" method="post">
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                <button class="admin-side-link" type="submit">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10 5H5v14h5m-2-7h12m-5-6 6 6-6 6"/></svg>
                    <span>Log out</span>
                </button>
            </form>
        </div>
    </aside>

    <main class="admin-workspace">
        <header class="admin-table-header">
            <div>
                <p class="admin-eyebrow">WIKIPLANT DATABASE</p>
                <h1 id="table-heading"><?= htmlspecialchars($tables[$selectedTable], ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="admin-record-count"><?= number_format($totalRows) ?> records</p>
            </div>
            <a class="admin-site-link" href="index.php">Back to WikiPlant <span aria-hidden="true">&rarr;</span></a>
        </header>

        <?php if ($adminError !== ''): ?>
        <p class="admin-message" role="alert"><?= htmlspecialchars($adminError, ENT_QUOTES, 'UTF-8') ?></p>
        <?php else: ?>
        <section class="admin-table-card" aria-labelledby="table-heading">
            <div class="admin-table-scroll">
                <table class="admin-data-table">
                    <caption><?= htmlspecialchars($tables[$selectedTable], ENT_QUOTES, 'UTF-8') ?> records</caption>
                    <thead>
                        <tr>
                            <?php foreach ($columns as $columnName): ?>
                            <th scope="col"><?= htmlspecialchars($columnName, ENT_QUOTES, 'UTF-8') ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!$rows): ?>
                        <tr class="admin-empty-row">
                            <td colspan="<?= max(count($columns), 1) ?>">No records in this table yet.</td>
                        </tr>
                        <?php endif; ?>
                        <?php foreach ($rows as $row): ?>
                        <tr>
                            <?php foreach ($columns as $columnName): ?>
                            <td><?= admin_escape($row[$columnName]) ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <nav class="admin-pagination" aria-label="Table pages">
                <span><?= $totalRows > 0 ? 'Showing ' . number_format(($currentPage - 1) * $perPage + 1) . '–' . number_format(min($currentPage * $perPage, $totalRows)) . ' of ' . number_format($totalRows) : '0 records' ?></span>
                <div>
                    <?php if ($currentPage > 1): ?>
                    <a href="admin.php?table=<?= urlencode($selectedTable) ?>&amp;page=<?= $currentPage - 1 ?>">Previous</a>
                    <?php endif; ?>
                    <?php if ($currentPage < $totalPages): ?>
                    <a href="admin.php?table=<?= urlencode($selectedTable) ?>&amp;page=<?= $currentPage + 1 ?>">Next</a>
                    <?php endif; ?>
                </div>
            </nav>
        </section>
        <?php endif; ?>
    </main>
</div>
</body>
</html>
