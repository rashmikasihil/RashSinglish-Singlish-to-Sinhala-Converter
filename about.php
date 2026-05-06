<?php 
include 'config/database.php'; 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<style>
    /* ========== INTERNAL CSS - BLACK & BLUE THEME ========== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #0a0a0a;
        color: #e0e0e0;
        min-height: 100vh;
    }

    /* ========== SCROLLBAR ========== */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #1a1a1a;
    }
    ::-webkit-scrollbar-thumb {
        background: #1e88e5;
        border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #42a5f5;
    }

    /* ========== PAGE HEADER ========== */
    .page-header {
        background: linear-gradient(135deg, #0a0a0a, #111111);
        text-align: center;
        padding: 3rem 2rem;
        border-bottom: 1px solid rgba(30, 136, 229, 0.2);
    }

    .page-header h1 {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #ffffff, #1e88e5);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 0.5rem;
    }

    .page-header p {
        color: #a0a0a0;
        max-width: 600px;
        margin: 0 auto;
    }

    .page-header i {
        color: #1e88e5;
        margin-right: 10px;
    }

    /* ========== CONTAINER ========== */
    .container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 2rem;
    }

    /* ========== ABOUT SECTIONS ========== */
    .section-title {
        text-align: center;
        font-size: 1.8rem;
        margin: 2rem 0 1rem;
    }

    .section-title span {
        color: #1e88e5;
    }

    .section-subtitle {
        text-align: center;
        color: #888;
        margin-bottom: 2rem;
    }

    /* Mission Card */
    .mission-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 28px;
        padding: 2.5rem;
        text-align: center;
        margin-bottom: 3rem;
        border: 1px solid rgba(30, 136, 229, 0.2);
        transition: all 0.3s;
    }

    .mission-card:hover {
        border-color: #1e88e5;
        transform: translateY(-5px);
    }

    .mission-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(30, 136, 229, 0.15), rgba(30, 136, 229, 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        border: 1px solid rgba(30, 136, 229, 0.3);
    }

    .mission-icon i {
        font-size: 2.5rem;
        color: #1e88e5;
    }

    .mission-card h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .mission-card p {
        color: #a0a0a0;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto;
    }

    /* Stats Row */
    .stats-row {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
        margin: 3rem 0;
        padding: 2rem;
        background: linear-gradient(145deg, #111111, #0a0a0a);
        border-radius: 28px;
        border: 1px solid rgba(30, 136, 229, 0.2);
    }

    .stat-box {
        text-align: center;
        flex: 1;
        min-width: 150px;
    }

    .stat-box i {
        font-size: 2rem;
        color: #1e88e5;
        margin-bottom: 0.5rem;
    }

    .stat-box h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
    }

    .stat-box p {
        color: #888;
        font-size: 0.85rem;
    }

    /* Story Grid */
    .story-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .story-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 24px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s;
        border: 1px solid rgba(30, 136, 229, 0.15);
    }

    .story-card:hover {
        transform: translateY(-5px);
        border-color: #1e88e5;
    }

    .story-icon {
        width: 70px;
        height: 70px;
        background: rgba(30, 136, 229, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.2rem;
    }

    .story-icon i {
        font-size: 2rem;
        color: #1e88e5;
    }

    .story-card h3 {
        font-size: 1.3rem;
        margin-bottom: 0.8rem;
    }

    .story-card p {
        color: #a0a0a0;
        line-height: 1.6;
    }

    /* Team Grid */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .team-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 28px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s;
        border: 1px solid rgba(30, 136, 229, 0.15);
    }

    .team-card:hover {
        transform: translateY(-8px);
        border-color: #1e88e5;
    }

    .team-avatar {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #1e88e5, #1565c0);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.2rem;
    }

    .team-avatar i {
        font-size: 3rem;
        color: white;
    }

    .team-card h3 {
        font-size: 1.3rem;
        margin-bottom: 0.3rem;
    }

    .team-role {
        color: #1e88e5;
        font-size: 0.85rem;
        margin-bottom: 0.8rem;
    }

    .team-card p {
        color: #a0a0a0;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .team-social a {
        color: #888;
        font-size: 1.1rem;
        transition: all 0.3s;
    }

    .team-social a:hover {
        color: #1e88e5;
        transform: translateY(-2px);
    }

    /* Values Grid */
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
    }

    .value-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 20px;
        padding: 1.8rem;
        text-align: center;
        transition: all 0.3s;
        border: 1px solid rgba(30, 136, 229, 0.15);
    }

    .value-card:hover {
        transform: translateY(-5px);
        border-color: #1e88e5;
    }

    .value-icon {
        width: 60px;
        height: 60px;
        background: rgba(30, 136, 229, 0.1);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }

    .value-icon i {
        font-size: 1.8rem;
        color: #1e88e5;
    }

    .value-card h4 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .value-card p {
        color: #888;
        font-size: 0.8rem;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #111111, #0a0a0a);
        border-radius: 28px;
        padding: 3rem;
        text-align: center;
        margin: 3rem 0;
        border: 1px solid #1e88e5;
    }

    .cta-section h2 {
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }

    .cta-section p {
        color: #a0a0a0;
        margin-bottom: 1.5rem;
    }

    .btn-primary {
        background: linear-gradient(135deg, #1e88e5, #1565c0);
        padding: 0.9rem 2rem;
        border-radius: 50px;
        color: white;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(30, 136, 229, 0.4);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 1.8rem;
        }
        .stats-row {
            flex-direction: column;
            gap: 1.5rem;
        }
        .mission-card {
            padding: 1.5rem;
        }
        .mission-card h2 {
            font-size: 1.4rem;
        }
        .cta-section {
            padding: 2rem;
        }
        .cta-section h2 {
            font-size: 1.4rem;
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

    .mission-card, .story-card, .team-card, .value-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .mission-card { animation-delay: 0.1s; }
    .story-card:nth-child(1) { animation-delay: 0.15s; }
    .story-card:nth-child(2) { animation-delay: 0.2s; }
    .story-card:nth-child(3) { animation-delay: 0.25s; }
</style>

<!-- ========== PAGE HEADER ========== -->
<section class="page-header">
    <h1><i class="fas fa-info-circle"></i> About Us</h1>
    <p>Learn more about RashSinglish and our mission to preserve the Sinhala language</p>
</section>

<!-- ========== MAIN CONTENT ========== -->
<div class="container">
    <!-- Mission Section -->
    <div class="mission-card">
        <div class="mission-icon">
            <i class="fas fa-bullseye"></i>
        </div>
        <h2>Our Mission</h2>
        <p>To make Sinhala typing accessible, fast, and free for everyone. We believe in preserving the Sinhala language in the digital age by providing cutting-edge tools that are easy to use, privacy-focused, and always free.</p>
    </div>

    <!-- Stats Row -->
    <div class="stats-row">
        <div class="stat-box">
            <i class="fas fa-calendar-alt"></i>
            <h3>2023</h3>
            <p>Founded</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-users"></i>
            <h3>50,000+</h3>
            <p>Active Users</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-globe"></i>
            <h3>10+</h3>
            <p>Countries</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-tools"></i>
            <h3>10+</h3>
            <p>Powerful Tools</p>
        </div>
    </div>

    <!-- Our Story Section -->
    <h2 class="section-title">Our <span>Story</span></h2>
    <p class="section-subtitle">The journey of RashSinglish</p>

    <div class="story-grid">
        <div class="story-card">
            <div class="story-icon">
                <i class="fas fa-lightbulb"></i>
            </div>
            <h3>The Beginning</h3>
            <p>RashSinglish was born from a simple idea: make Sinhala typing as easy as typing English. We started with a basic converter and grew from there.</p>
        </div>
        <div class="story-card">
            <div class="story-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3>The Growth</h3>
            <p>Within months, thousands of users joined us. We listened to feedback and added voice typing, OCR, PDF conversion, and more features.</p>
        </div>
        <div class="story-card">
            <div class="story-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <h3>The Future</h3>
            <p>We're constantly innovating. AI integration, mobile apps, and offline support are just the beginning of what's coming next.</p>
        </div>
    </div>

    <!-- Our Values Section -->
    <h2 class="section-title">Our <span>Values</span></h2>
    <p class="section-subtitle">What drives us every day</p>

    <div class="values-grid">
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-lock"></i>
            </div>
            <h4>Privacy First</h4>
            <p>Your data never leaves your device. We don't track or store your conversions.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-gem"></i>
            </div>
            <h4>Free Forever</h4>
            <p>All core features are completely free. No premium plans, no hidden costs.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-bolt"></i>
            </div>
            <h4>Fast & Reliable</h4>
            <p>Lightning-fast conversion speed with 99.9% uptime. We prioritize performance.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-heart"></i>
            </div>
            <h4>Community Driven</h4>
            <p>We build features based on user feedback. Your voice matters to us.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-code-branch"></i>
            </div>
            <h4>Open Source</h4>
            <p>Our core technology is open source. Developers can contribute and learn.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">
                <i class="fas fa-language"></i>
            </div>
            <h4>Preserving Culture</h4>
            <p>We're passionate about keeping the Sinhala language alive in the digital world.</p>
        </div>
    </div>

    <!-- Team Section -->
    <h2 class="section-title">Meet The <span>Team</span></h2>
    <p class="section-subtitle">The passionate people behind RashSinglish</p>

    <div class="team-grid">
        <div class="team-card">
            <div class="team-avatar">
                <i class="fas fa-user-tie"></i>
            </div>
            <h3>Sihil Rashmika</h3>
            <div class="team-role">Founder & CEO</div>
            <p>Visionary leader passionate about Sinhala language technology. Started RashSinglish to solve real-world typing problems.</p>
            <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-avatar">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h3>Tharindu Nuwan</h3>
            <div class="team-role">Lead Developer</div>
            <p>Full-stack developer with 8+ years of experience. Built the core conversion engine and AI features.</p>
            <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-avatar">
                <i class="fas fa-paint-brush"></i>
            </div>
            <h3>Dilini Rajapaksha</h3>
            <div class="team-role">UI/UX Designer</div>
            <p>Creative designer focused on making Sinhala typing beautiful and intuitive for all users.</p>
            <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-avatar">
                <i class="fas fa-microphone-alt"></i>
            </div>
            <h3>Sanduni Weerasinghe</h3>
            <div class="team-role">AI Specialist</div>
            <p>Machine learning expert working on voice recognition and AI assistant features for Sinhala language.</p>
            <div class="team-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <h2>Join Our Journey</h2>
        <p>Be part of something meaningful. Help us preserve and promote the Sinhala language.</p>
        <a href="contact.php" class="btn-primary"><i class="fas fa-envelope"></i> Get in Touch</a>
    </div>
</div>

<!-- ========== JAVASCRIPT ========== -->
<script>
    // Mobile Menu Toggle
    function toggleMenu() {
        document.querySelector('.nav-links').classList.toggle('active');
    }

    // Theme Toggle
    function toggleTheme() {
        document.body.classList.toggle('light-mode');
        let icon = document.querySelector('.theme-toggle i');
        if(document.body.classList.contains('light-mode')) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            let style = document.createElement('style');
            style.id = 'light-mode-style';
            style.textContent = `
                body.light-mode { background: #f5f5f5; color: #1a1a1a; }
                body.light-mode .navbar { background: rgba(255,255,255,0.95); }
                body.light-mode .nav-links a { color: #333; }
                body.light-mode .mission-card,
                body.light-mode .story-card,
                body.light-mode .team-card,
                body.light-mode .value-card { background: #ffffff; border-color: #e0e0e0; }
                body.light-mode .mission-card p,
                body.light-mode .story-card p,
                body.light-mode .team-card p,
                body.light-mode .value-card p { color: #666; }
                body.light-mode .stats-row { background: #ffffff; }
                body.light-mode .cta-section { background: #ffffff; }
                body.light-mode footer { background: #f0f0f0; border-top-color: #1e88e5; }
                body.light-mode .footer-col p, 
                body.light-mode .footer-bottom { color: #666; }
                body.light-mode .footer-col a { color: #555; }
            `;
            document.head.appendChild(style);
        } else {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
            let styleEl = document.getElementById('light-mode-style');
            if(styleEl) styleEl.remove();
        }
        localStorage.setItem('theme', document.body.classList.contains('light-mode') ? 'light' : 'dark');
    }

    // Load saved theme
    if(localStorage.getItem('theme') === 'light') {
        document.body.classList.add('light-mode');
        let icon = document.querySelector('.theme-toggle i');
        if(icon) {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }
    }
</script>

<?php include 'includes/footer.php'; ?>