<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; ?>

<style>
/* ========== INLINE CSS - BLACK & BLUE THEME ========== */
.contact-container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 2rem;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.contact-card {
    background: linear-gradient(145deg, #121212, #0d0d0d);
    border-radius: 28px;
    padding: 2rem;
    transition: all 0.4s;
    border: 1px solid rgba(30, 136, 229, 0.2);
}

.contact-card:hover {
    transform: translateY(-8px);
    border-color: #1e88e5;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.4);
}

.contact-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.15), rgba(30, 136, 229, 0.05));
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(30, 136, 229, 0.3);
}

.contact-icon i {
    font-size: 2rem;
    color: #1e88e5;
}

.contact-card h3 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #ffffff;
}

.contact-card p {
    color: #a0a0a0;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.contact-detail {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 1rem 0;
    color: #cbd5e1;
}

.contact-detail i {
    width: 30px;
    color: #1e88e5;
    font-size: 1.1rem;
}

.map-container {
    margin-top: 1rem;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #1e293b;
}

.map-container iframe {
    width: 100%;
    height: 250px;
    border: none;
}

/* Form Styles */
.form-group {
    margin-bottom: 1.2rem;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 1rem;
    background: #1a1a1a;
    border: 2px solid #2a2a2a;
    border-radius: 16px;
    color: #ffffff;
    font-size: 1rem;
    transition: all 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #1e88e5;
    box-shadow: 0 0 10px rgba(30, 136, 229, 0.3);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #666;
}

.submit-btn {
    background: linear-gradient(135deg, #1e88e5, #1565c0);
    padding: 1rem 2rem;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    width: 100%;
    justify-content: center;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(30, 136, 229, 0.4);
    background: linear-gradient(135deg, #42a5f5, #1e88e5);
}

/* Social Links */
.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.social-link {
    background: #1a1a1a;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s;
    color: #1e88e5;
    font-size: 1.2rem;
    text-decoration: none;
}

.social-link:hover {
    background: #1e88e5;
    color: white;
    transform: translateY(-3px);
}

/* Page Header */
.contact-header {
    text-align: center;
    padding: 2rem 2rem 1rem;
}

.contact-header h1 {
    font-size: 2.5rem;
    background: linear-gradient(135deg, #ffffff, #1e88e5);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 0.5rem;
}

.contact-header p {
    color: #a0a0a0;
    max-width: 600px;
    margin: 0 auto;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
    .contact-header h1 {
        font-size: 1.8rem;
    }
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.contact-card {
    animation: fadeInUp 0.6s ease forwards;
}

.contact-card:nth-child(1) { animation-delay: 0.1s; }
.contact-card:nth-child(2) { animation-delay: 0.2s; }
</style>

<div class="contact-container">
    <div class="contact-header">
        <h1><i class="fas fa-envelope"></i> Contact Us</h1>
        <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </div>

    <div class="contact-grid">
        <!-- Contact Info Card -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Visit Us</h3>
            <p>No. 123, Galle Road,<br>Colombo 03, Sri Lanka</p>
            
            <div class="contact-detail">
                <i class="fas fa-phone-alt"></i>
                <span>+94 77 123 4567</span>
            </div>
            <div class="contact-detail">
                <i class="fas fa-envelope"></i>
                <span>support@rashsinglish.lk</span>
            </div>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.945698947387!2d79.842973!3d6.914000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a1a2b7e7b9d%3A0x4b2b4e6b5b9b7e9d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Contact Form Card -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fas fa-paper-plane"></i>
            </div>
            <h3>Send Message</h3>
            <p>Fill out the form below and we'll get back to you within 24 hours.</p>
            
            <form action="api/send_email.php" method="POST" onsubmit="return validateForm(event)">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
            
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
function validateForm(event) {
    event.preventDefault();
    
    let name = document.querySelector('input[name="name"]').value;
    let email = document.querySelector('input[name="email"]').value;
    let message = document.querySelector('textarea[name="message"]').value;
    
    if (!name || !email || !message) {
        alert('⚠️ කරුණාකර සියලුම අවශ්‍ය ක්ෂේත්‍ර පුරවන්න');
        return false;
    }
    
    if (!email.includes('@') || !email.includes('.')) {
        alert('⚠️ කරුණාකර වලංගු ඊමේල් ලිපිනයක් ඇතුළත් කරන්න');
        return false;
    }
    
    alert('✅ ඔබගේ පණිවිඩය සාර්ථකව යවන ලදී! අපි ඉක්මනින් ඔබව සම්බන්ධ කර ගන්නෙමු.');
    event.target.reset();
    return true;
}
</script>

<?php include 'includes/footer.php'; ?>