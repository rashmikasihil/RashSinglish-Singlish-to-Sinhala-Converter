<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; ?>
<div class="container">
    <div class="features-grid">
        <div class="feature-card">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Visit Us</h3>
            <p>No. 123, Galle Road, Colombo 03, Sri Lanka</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1..." width="100%" height="200" style="border:0; border-radius:20px;" allowfullscreen></iframe>
        </div>
        <div class="feature-card">
            <i class="fas fa-envelope"></i>
            <h3>Send Message</h3>
            <form action="api/send_email.php" method="POST">
                <input type="text" name="name" placeholder="Your Name"><br>
                <input type="email" name="email" placeholder="Your Email"><br>
                <textarea name="message" rows="4" placeholder="Your Message"></textarea><br>
                <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>