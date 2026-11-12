<?php if (empty($_SESSION['user_id']) && empty($_SESSION['admin_id'])): ?>
<div class="auth-buttons">
    <a href="register.php" class="register-btn">Register</a>
    <a href="login.php" class="login-btn">Login</a>
</div>
<?php else:
    $menuUsername = htmlspecialchars($_SESSION['username'] ?? 'Member', ENT_QUOTES, 'UTF-8');
?>
<div class="member-navigation">
    <details class="member-dropdown">
        <summary class="member-avatar" aria-label="Open account menu for <?= $menuUsername ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 21v-2a7 7 0 0 1 14 0v2"/></svg>
        </summary>
        <div class="member-menu">
            <?php if (!empty($_SESSION['admin_id'])): ?>
            <div class="member-menu-heading"><small>WIKIPLANT ADMIN</small><strong><?= $menuUsername ?></strong></div>
            <a href="admin.php"><span aria-hidden="true">&#9776;</span><span><strong>Admin Dashboard</strong><small>Browse database tables</small></span><span aria-hidden="true">&#8250;</span></a>
            <?php else: ?>
            <div class="member-menu-heading"><small>YOUR WIKIPLANT ACCOUNT</small><strong><?= $menuUsername ?></strong></div>
            <a href="account.php?section=profile"><span aria-hidden="true">&#9998;</span><span><strong>Edit Profile</strong><small>Update your information</small></span><span aria-hidden="true">&#8250;</span></a>
            <a href="account.php?section=password"><span aria-hidden="true">&#9906;</span><span><strong>Change Password</strong><small>Account security</small></span><span aria-hidden="true">&#8250;</span></a>
            <a href="account.php?section=contributions"><span aria-hidden="true">&#9752;</span><span><strong>My Contributions</strong><small>Your plant records</small></span><span aria-hidden="true">&#8250;</span></a>
            <?php endif; ?>
            <form action="logout.php" method="post"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>"><button type="submit"><span aria-hidden="true">&#8618;</span> Logout</button></form>
        </div>
    </details>
</div>
<?php endif; ?>
