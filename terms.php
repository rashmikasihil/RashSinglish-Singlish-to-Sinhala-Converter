<?php 
include 'config/database.php'; 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<style>
/* ========== TERMS OF SERVICE PAGE STYLES ========== */
.terms-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem;
}

.terms-header {
    text-align: center;
    margin-bottom: 2rem;
}

.terms-header h1 {
    font-size: 2.5rem;
    background: linear-gradient(135deg, #ffffff, #1e88e5);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 0.5rem;
}

.terms-header p {
    color: #94a3b8;
    font-size: 1rem;
}

.last-updated {
    text-align: center;
    color: #1e88e5;
    margin-bottom: 2rem;
    font-size: 0.85rem;
}

.terms-card {
    background: linear-gradient(145deg, #121212, #0d0d0d);
    border-radius: 28px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(30, 136, 229, 0.15);
    transition: all 0.3s;
}

.terms-card:hover {
    border-color: #1e88e5;
    transform: translateY(-3px);
}

.terms-card h2 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #1e88e5;
    display: flex;
    align-items: center;
    gap: 10px;
}

.terms-card h2 i {
    font-size: 1.4rem;
}

.terms-card p {
    color: #cbd5e1;
    line-height: 1.7;
    margin-bottom: 0.8rem;
}

.terms-card ul {
    margin-left: 1.5rem;
    color: #cbd5e1;
    line-height: 1.7;
}

.terms-card li {
    margin-bottom: 0.5rem;
}

.terms-card li i {
    color: #1e88e5;
    margin-right: 8px;
    width: 20px;
}

.highlight {
    color: #1e88e5;
    font-weight: 500;
}

.warning-box {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(245, 158, 11, 0.05));
    border-left: 4px solid #f59e0b;
    border-radius: 12px;
    padding: 1rem;
    margin: 1rem 0;
}

.warning-box i {
    color: #f59e0b;
    margin-right: 8px;
}

.accept-box {
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.1), rgba(30, 136, 229, 0.05));
    border-radius: 20px;
    padding: 1.5rem;
    text-align: center;
    margin-top: 1rem;
    border: 1px solid rgba(30, 136, 229, 0.2);
}

.accept-box i {
    font-size: 2rem;
    color: #1e88e5;
    margin-bottom: 0.5rem;
}

.accept-box p {
    color: #94a3b8;
}

@media (max-width: 768px) {
    .terms-container {
        padding: 1rem;
    }
    .terms-header h1 {
        font-size: 1.8rem;
    }
    .terms-card {
        padding: 1.2rem;
    }
    .terms-card h2 {
        font-size: 1.2rem;
    }
}
</style>

<div class="terms-container">
    <div class="terms-header">
        <h1><i class="fas fa-file-contract"></i> Terms of Service</h1>
        <p>Please read these terms carefully before using RashSinglish</p>
    </div>
    
    <div class="last-updated">
        <i class="fas fa-calendar-alt"></i> Last Updated: January 1, 2026
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-check-circle"></i> 1. Acceptance of Terms</h2>
        <p>By accessing or using RashSinglish (the "Service"), you agree to be bound by these Terms of Service. If you disagree with any part of these terms, you may not access the Service.</p>
        <div class="warning-box">
            <i class="fas fa-exclamation-triangle"></i> <strong>Important:</strong> By using this service, you confirm that you are at least 13 years old or have parental consent.
        </div>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-crown"></i> 2. Free Trial & Account Registration</h2>
        <ul>
            <li><i class="fas fa-gift"></i> <span class="highlight">3 Free Trials</span> - Non-registered users get 3 free conversions</li>
            <li><i class="fas fa-user-plus"></i> <span class="highlight">Free Account</span> - Create a free account for unlimited conversions</li>
            <li><i class="fas fa-lock"></i> <span class="highlight">No Credit Card Required</span> - Our service is completely free</li>
            <li><i class="fas fa-shield-alt"></i> You are responsible for maintaining the security of your account</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-gavel"></i> 3. User Conduct</h2>
        <p>You agree not to use the Service for any unlawful purpose or in any way that could damage, disable, or impair the Service. Prohibited activities include:</p>
        <ul>
            <li><i class="fas fa-ban"></i> Uploading malicious code or viruses</li>
            <li><i class="fas fa-robot"></i> Using automated scripts or bots</li>
            <li><i class="fas fa-copyright"></i> Violating any intellectual property rights</li>
            <li><i class="fas fa-gavel"></i> Harassing, abusing, or harming others</li>
            <li><i class="fas fa-exchange-alt"></i> Attempting to bypass or exploit the trial system</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-copyright"></i> 4. Intellectual Property</h2>
        <p>The Service and its original content, features, and functionality are owned by RashSinglish and are protected by international copyright, trademark, and other intellectual property laws.</p>
        <ul>
            <li><i class="fas fa-code"></i> You may not copy, modify, or distribute our code without permission</li>
            <li><i class="fas fa-image"></i> User-generated content remains the property of the user</li>
            <li><i class="fas fa-language"></i> Converted Sinhala text belongs to you</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-database"></i> 5. Data & Privacy</h2>
        <p>Your privacy is important to us. Please review our <a href="privacy.php" style="color:#1e88e5;">Privacy Policy</a> to understand how we collect, use, and protect your information.</p>
        <ul>
            <li><i class="fas fa-lock"></i> <span class="highlight">100% Private</span> - Your conversions are processed locally in your browser</li>
            <li><i class="fas fa-trash-alt"></i> You can delete your account and all associated data at any time</li>
            <li><i class="fas fa-download"></i> You can export your conversion history</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-ban"></i> 6. Account Termination</h2>
        <p>We reserve the right to terminate or suspend your account immediately, without prior notice, for conduct that we believe violates these Terms of Service or is harmful to other users of the Service, us, or third parties, or for any other reason.</p>
        <p>You may delete your account at any time by contacting support or through your account settings.</p>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-exclamation-triangle"></i> 7. Disclaimer of Warranties</h2>
        <p>THE SERVICE IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT ANY WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED. WE DO NOT WARRANT THAT:</p>
        <ul>
            <li><i class="fas fa-check"></i> The Service will be uninterrupted, timely, secure, or error-free</li>
            <li><i class="fas fa-language"></i> The Sinhala conversion will be 100% accurate (though we strive for excellence)</li>
            <li><i class="fas fa-bug"></i> Any errors in the Service will be corrected</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-shield-alt"></i> 8. Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, RashSinglish shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses, resulting from:</p>
        <ul>
            <li><i class="fas fa-keyboard"></i> Your use or inability to use the Service</li>
            <li><i class="fas fa-language"></i> Any errors or inaccuracies in the Sinhala conversion</li>
            <li><i class="fas fa-hacker"></i> Any unauthorized access to or use of our servers</li>
        </ul>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-clock"></i> 9. Changes to Terms</h2>
        <p>We reserve the right to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
        <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms.</p>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-gavel"></i> 10. Governing Law</h2>
        <p>These Terms shall be governed and construed in accordance with the laws of Sri Lanka, without regard to its conflict of law provisions. Any legal suit, action, or proceeding arising out of, or related to, these Terms of Service shall be instituted exclusively in the courts of Sri Lanka.</p>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-envelope"></i> 11. Contact Us</h2>
        <div class="accept-box">
            <i class="fas fa-envelope"></i>
            <p><strong>Email:</strong> <a href="mailto:legal@rashsinglish.lk" style="color:#1e88e5;">legal@rashsinglish.lk</a></p>
            <p><strong>Address:</strong> No. 123, Galle Road, Colombo 03, Sri Lanka</p>
            <p><strong>Phone:</strong> +94 77 123 4567</p>
        </div>
    </div>
    
    <div class="terms-card">
        <h2><i class="fas fa-hand-peace"></i> 12. Acknowledgment</h2>
        <div class="accept-box">
            <i class="fas fa-check-circle" style="color: #10b981;"></i>
            <p>By using RashSinglish, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our <a href="privacy.php" style="color:#1e88e5;">Privacy Policy</a>.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>