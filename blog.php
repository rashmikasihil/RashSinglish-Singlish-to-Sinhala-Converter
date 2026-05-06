<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; ?>
<div class="container">
    <h1 class="section-title"><i class="fas fa-blog"></i> Sinhala Tech Blog</h1>
    <div class="features-grid">
        <?php
        $posts = $conn->query("SELECT posts.*, users.name FROM posts JOIN users ON posts.user_id=users.id ORDER BY posts.created_at DESC");
        while($post = $posts->fetch_assoc()): ?>
            <div class="feature-card">
                <i class="fas fa-newspaper"></i>
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <small>By <?php echo $post['name']; ?> | <?php echo $post['created_at']; ?></small>
                <p><?php echo substr(strip_tags($post['content']), 0, 100); ?>...</p>
                <a href="blog-details.php?id=<?php echo $post['id']; ?>" class="btn">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>