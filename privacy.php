<?php 
include 'config/database.php'; 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<style>
/* ========== PRIVACY PAGE STYLES ========== */
.privacy-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem;
}

.privacy-header {
    text-align: center;
    margin-bottom: 2rem;
}

.privacy-header h1 {
    font-size: 2.5rem;
    background: linear-gradient(135deg, #ffffff, #1e88e5);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 0.5rem;
}

.privacy-header p {
    color: #94a3b8;
    font-size: 1rem;
}

.last-updated {
    text-align: center;
    color: #1e88e5;
    margin-bottom: 2rem;
    font-size: 0.85rem;
}

.privacy-card {
    background: linear-gradient(145deg, #121212, #0d0d0d);
    border-radius: 28px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(30, 136, 229, 0.15);
    transition: all 0.3s;
}

.privacy-card:hover {
    border-color: #1e88e5;
    transform: translateY(-3px);
}

.privacy-card h2 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #1e88e5;
    display: flex;
    align-items: center;
    gap: 10px;
}

.privacy-card h2 i {
    font-size: 1.4rem;
}

.privacy-card p {
    color: #cbd5e1;
    line-height: 1.7;
    margin-bottom: 0.8rem;
}

.privacy-card ul {
    margin-left: 1.5rem;
    color: #cbd5e1;
    line-height: 1.7;
}

.privacy-card li {
    margin-bottom: 0.5rem;
}

.privacy-card li i {
    color: #1e88e5;
    margin-right: 8px;
}

.highlight {
    color: #1e88e5;
    font-weight: 500;
}

.contact-box {
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.1), rgba(30, 136, 229, 0.05));
    border-radius: 20px;
    padding: 1.5rem;
    text-align: center;
    margin-top: 1rem;
    border: 1px solid rgba(30, 136, 229, 0.2);
}

.contact-box i {
    font-size: 2rem;
    color: #1e88e5;
    margin-bottom: 0.5rem;
}

.contact-box p {
    color: #94a3b8;
}

.contact-box a {
    color: #1e88e5;
    text-decoration: none;
}

.contact-box a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .privacy-container {
        padding: 1rem;
    }
    .privacy-header h1 {
        font-size: 1.8rem;
    }
    .privacy-card {
        padding: 1.2rem;
    }
    .privacy-card h2 {
        font-size: 1.2rem;
    }
}
</style>

<div class="privacy-container">
    <div class="privacy-header">
        <h1><i class="fas fa-shield-alt"></i> Privacy Policy</h1>
        <p>Your privacy is important to us. Learn how we protect your data.</p>
    </div>
    
    <div class="last-updated">
        <i class="fas fa-calendar-alt"></i> Last Updated: January 1, 2026
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-info-circle"></i> 1. Information We Collect</h2>
        <p>At RashSinglish, we are committed to protecting your privacy. We collect minimal information to provide and improve our services:</p>
        <ul>
            <li><i class="fas fa-envelope"></i> <strong>Email Address</strong> - When you create an account</li>
            <li><i class="fas fa-user"></i> <strong>Name</strong> - For personalizing your experience</li>
            <li><i class="fas fa-keyboard"></i> <strong>Typed Content</strong> - Only saved locally in your browser (if you choose to save history)</li>
        </ul>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-database"></i> 2. How We Use Your Information</h2>
        <p>We use the information we collect to:</p>
        <ul>
            <li><i class="fas fa-check-circle"></i> Provide and maintain the Sinhala typing converter service</li>
            <li><i class="fas fa-chart-line"></i> Improve and optimize our website performance</li>
            <li><i class="fas fa-envelope"></i> Send you important updates and newsletters (if subscribed)</li>
            <li><i class="fas fa-headset"></i> Respond to your inquiries and support requests</li>
        </ul>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-lock"></i> 3. Data Security</h2>
        <p>Your security is our priority. We implement industry-standard security measures:</p>
        <ul>
            <li><i class="fas fa-lock"></i> <span class="highlight">No tracking cookies</span> - We don't use third-party tracking</li>
            <li><i class="fas fa-microphone-slash"></i> <span class="highlight">Voice typing is processed locally</span> - No audio data is sent to our servers</li>
            <li><i class="fas fa-database"></i> <span class="highlight">Conversions are 100% private</span> - Your typed text never leaves your browser (unless you save history)</li>
            <li><i class="fas fa-shield-alt"></i> <span class="highlight">Passwords are hashed</span> - Using BCrypt encryption</li>
        </ul>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-cookie-bite"></i> 4. Cookies & Tracking</h2>
        <p>RashSinglish uses minimal cookies:</p>
        <ul>
            <li><i class="fas fa-palette"></i> <strong>Theme Preference</strong> - Saves your dark/light mode preference</li>
            <li><i class="fas fa-sign-in-alt"></i> <strong>Login Session</strong> - Keeps you logged in (if you choose)</li>
            <li><i class="fas fa-chart-simple"></i> <strong>Anonymous Usage</strong> - Basic analytics to improve our service (no personal data)</li>
        </ul>
        <p>You can disable cookies in your browser settings, but some features may not work properly.</p>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-users"></i> 5. Third-Party Services</h2>
        <p>We may use trusted third-party services to enhance our platform:</p>
        <ul>
            <li><i class="fab fa-google"></i> <strong>Google Fonts</strong> - For beautiful typography</li>
            <li><i class="fas fa-envelope"></i> <strong>Email Service</strong> - For sending newsletters (only if you subscribe)</li>
        </ul>
        <p>These services have their own privacy policies. We do not share your personal data with them unnecessarily.</p>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-user-graduate"></i> 6. Your Rights</h2>
        <p>You have the right to:</p>
        <ul>
            <li><i class="fas fa-eye"></i> <strong>Access</strong> - Request a copy of your data</li>
            <li><i class="fas fa-trash-alt"></i> <strong>Delete</strong> - Request deletion of your account and data</li>
            <li><i class="fas fa-ban"></i> <strong>Opt-out</strong> - Unsubscribe from emails anytime</li>
            <li><i class="fas fa-download"></i> <strong>Export</strong> - Download your conversion history</li>
        </ul>
        <p>To exercise these rights, contact us using the information below.</p>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-child"></i> 7. Children's Privacy</h2>
        <p>RashSinglish is not intended for children under 13. We do not knowingly collect personal information from children under 13. If you believe a child has provided us with personal information, please contact us immediately.</p>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-gavel"></i> 8. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this page periodically for any changes.</p>
    </div>
    
    <div class="privacy-card">
        <h2><i class="fas fa-envelope"></i> 9. Contact Us</h2>
        <div class="contact-box">
            <i class="fas fa-envelope"></i>
            <p><strong>Email:</strong> <a href="mailto:privacy@rashsinglish.lk">privacy@rashsinglish.lk</a></p>
            <p><strong>Address:</strong> No. 123, Galle Road, Colombo 03, Sri Lanka</p>
            <p><strong>Phone:</strong> +94 77 123 4567</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>