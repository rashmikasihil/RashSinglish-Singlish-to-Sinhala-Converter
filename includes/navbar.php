<nav class="navbar">
    <div class="logo">
        <i class="fas fa-feather-alt"></i>
        <span>RashSinglish</span>
    </div>
    <div class="menu-btn" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
    <div class="nav-links">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="features.php"><i class="fas fa-star"></i> Features</a>
        <a href="tools.php"><i class="fas fa-tools"></i> Tools</a>
        <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        <a href="blog.php"><i class="fas fa-blog"></i> Blog</a>
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="history.php"><i class="fas fa-history"></i> History</a>
            <a href="dashboard.php"><i class="fas fa-user"></i> Dashboard</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <?php else: ?>
            <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        <?php endif; ?>
        <div class="theme-toggle" onclick="toggleTheme()"><i class="fas fa-moon"></i></div>
    </div>
</nav>