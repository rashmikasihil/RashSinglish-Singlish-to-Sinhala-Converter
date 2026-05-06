<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; ?>
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

        /* ========== FEATURES GRID ========== */
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        /* Feature Card */
        .feature-card {
            background: linear-gradient(145deg, #121212, #0d0d0d);
            border-radius: 28px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s;
            border: 1px solid rgba(30, 136, 229, 0.15);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(30, 136, 229, 0.05), transparent);
            transition: left 0.5s;
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: #1e88e5;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.4);
        }

        /* Feature Icon */
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(30, 136, 229, 0.15), rgba(30, 136, 229, 0.05));
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            border: 1px solid rgba(30, 136, 229, 0.3);
        }

        .feature-icon i {
            font-size: 2.5rem;
            color: #1e88e5;
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: #ffffff;
        }

        .feature-card p {
            color: #a0a0a0;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        /* Feature Tags */
        .feature-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin-top: 1rem;
        }

        .feature-tag {
            background: rgba(30, 136, 229, 0.1);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.7rem;
            color: #1e88e5;
            border: 1px solid rgba(30, 136, 229, 0.2);
        }

        /* Premium Features Section */
        .premium-badge {
            display: inline-block;
            background: linear-gradient(135deg, #1e88e5, #1565c0);
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
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

    </style>
</head>
<body>
<!-- ========== PAGE HEADER ========== -->
<section class="page-header">
    <h1><i class="fas fa-star"></i> Powerful Features</h1>
    <p>Everything you need to type Sinhala professionally, fast, and free</p>
</section>

<!-- ========== MAIN CONTENT ========== -->
<div class="container">
    <!-- Stats Row -->
    <div class="stats-row">
        <div class="stat-box">
            <i class="fas fa-bolt"></i>
            <h3>0.01s</h3>
            <p>Conversion Speed</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-book"></i>
            <h3>41,000+</h3>
            <p>Word Dictionary</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-users"></i>
            <h3>50,000+</h3>
            <p>Active Users</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-lock"></i>
            <h3>100%</h3>
            <p>Privacy Guaranteed</p>
        </div>
    </div>

    <!-- Features Grid -->
    <h2 class="section-title">Everything You <span>Need</span></h2>
    <p class="section-subtitle">From phonetic typing to AI-powered tools, we've got you covered</p>

    <div class="features-grid">
        <!-- Feature 1 - Real-time Typing -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-keyboard"></i>
            </div>
            <h3>Sinhala Typing</h3>
            <p>Type in Singlish phonetics and get real-time Sinhala Unicode output with our 41,000+ smart word dictionary. Bidirectional conversion support.</p>
            <div class="feature-tags">
                <span class="feature-tag">Real-time</span>
                <span class="feature-tag">Smart Dictionary</span>
                <span class="feature-tag">Auto-suggest</span>
            </div>
        </div>

        <!-- Feature 2 - Voice Typing -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-microphone-alt"></i>
            </div>
            <h3>Voice Typing</h3>
            <p>Speak in Sinhala and see your words typed instantly. 100% private — processed locally in your browser. No data stored.</p>
            <div class="feature-tags">
                <span class="feature-tag">Speech to Text</span>
                <span class="feature-tag">Privacy First</span>
                <span class="feature-tag">Offline Support</span>
            </div>
        </div>

        <!-- Feature 3 - AI Assistant -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-robot"></i>
            </div>
            <h3>AI Assistant</h3>
            <p>Sinhala AI assistant — ask questions, generate content, translate, and get intelligent Sinhala responses powered by cutting-edge AI.</p>
            <div class="feature-tags">
                <span class="feature-tag">AI Powered</span>
                <span class="feature-tag">Smart Replies</span>
                <span class="feature-tag">Content Gen</span>
            </div>
        </div>

        <!-- Feature 4 - OCR Scanner -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-image"></i>
            </div>
            <h3>OCR Scanner</h3>
            <p>Extract Sinhala text from images, scanned documents, and photos with high accuracy. Supports JPG, PNG, and PDF files.</p>
            <div class="feature-tags">
                <span class="feature-tag">Image to Text</span>
                <span class="feature-tag">98% Accuracy</span>
                <span class="feature-tag">Batch Processing</span>
            </div>
        </div>

        <!-- Feature 5 - PDF Converter -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-file-pdf"></i>
            </div>
            <h3>PDF Converter</h3>
            <p>Convert FMA file format to PDFs to clean, searchable Sinhala Unicode text. Preserve formatting and layout perfectly.</p>
            <div class="feature-tags">
                <span class="feature-tag">PDF to Text</span>
                <span class="feature-tag">Searchable</span>
                <span class="feature-tag">Free</span>
            </div>
        </div>

        <!-- Feature 6 - Caption Generator -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-closed-captioning"></i>
            </div>
            <h3>Caption Generator</h3>
            <p>Generate Sinhala subtitles and captions for your videos automatically. Perfect for YouTube creators and content makers.</p>
            <div class="feature-tags">
                <span class="feature-tag">Auto Captions</span>
                <span class="feature-tag">SRT Format</span>
                <span class="feature-tag">Video Ready</span>
            </div>
        </div>
    </div>

    <!-- Second Row - More Features -->
    <h2 class="section-title">Advanced <span>Tools</span></h2>
    <p class="section-subtitle">Professional features for power users</p>

    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-history"></i>
            </div>
            <h3>Conversion History</h3>
            <p>Save and track all your conversions. Never lose your work. Cloud sync available with account.</p>
            <div class="feature-tags">
                <span class="feature-tag">Save History</span>
                <span class="feature-tag">Cloud Sync</span>
                <span class="feature-tag">Export</span>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-download"></i>
            </div>
            <h3>Offline Mode</h3>
            <p>Use RashSinglish without internet connection. Perfect for traveling or low connectivity areas.</p>
            <div class="feature-tags">
                <span class="feature-tag">Works Offline</span>
                <span class="feature-tag">PWA Ready</span>
                <span class="feature-tag">No Internet</span>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-palette"></i>
            </div>
            <h3>Custom Themes</h3>
            <p>Choose between Dark, Light, and Blue themes. Personalized typing experience.</p>
            <div class="feature-tags">
                <span class="feature-tag">Dark Mode</span>
                <span class="feature-tag">Light Mode</span>
                <span class="feature-tag">Blue Accent</span>
            </div>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>100% Privacy</h3>
            <p>Your data never leaves your device. No tracking, no analytics, complete privacy guarantee.</p>
            <div class="feature-tags">
                <span class="feature-tag">No Tracking</span>
                <span class="feature-tag">GDPR Compliant</span>
                <span class="feature-tag">Secure</span>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <span class="premium-badge"><i class="fas fa-gem"></i> Free Forever</span>
        <h2>Ready to experience the best Sinhala typing tool?</h2>
        <p>Join thousands of happy users who type Sinhala faster every day</p>
        <a href="index.php#converter" class="btn-primary"><i class="fas fa-arrow-right"></i> Start Typing Now</a>
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
            // Add light mode styles dynamically
            let style = document.createElement('style');
            style.id = 'light-mode-style';
            style.textContent = `
                body.light-mode { background: #f5f5f5; color: #1a1a1a; }
                body.light-mode .navbar { background: rgba(255,255,255,0.95); }
                body.light-mode .nav-links a { color: #333; }
                body.light-mode .feature-card { background: #ffffff; border-color: #e0e0e0; }
                body.light-mode .feature-card p { color: #666; }
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
</body>
<?php include 'includes/footer.php'; ?>