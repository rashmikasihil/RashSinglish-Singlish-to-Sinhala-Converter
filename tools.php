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

    /* ========== TOOLS GRID ========== */
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

    .tools-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    /* Tool Card */
    .tool-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 28px;
        padding: 2rem;
        text-align: center;
        transition: all 0.4s;
        border: 1px solid rgba(30, 136, 229, 0.15);
        position: relative;
        overflow: hidden;
    }

    .tool-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(30, 136, 229, 0.05), transparent);
        transition: left 0.5s;
    }

    .tool-card:hover::before {
        left: 100%;
    }

    .tool-card:hover {
        transform: translateY(-10px);
        border-color: #1e88e5;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.4);
    }

    /* Tool Icon */
    .tool-icon {
        width: 85px;
        height: 85px;
        background: linear-gradient(135deg, rgba(30, 136, 229, 0.15), rgba(30, 136, 229, 0.05));
        border-radius: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        border: 1px solid rgba(30, 136, 229, 0.3);
    }

    .tool-icon i {
        font-size: 2.8rem;
        color: #1e88e5;
    }

    .tool-card h3 {
        font-size: 1.4rem;
        margin-bottom: 0.8rem;
        color: #ffffff;
    }

    .tool-card p {
        color: #a0a0a0;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    /* Tool Status Badge */
    .tool-status {
        display: inline-block;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .status-active {
        background: rgba(76, 175, 80, 0.15);
        color: #4caf50;
        border: 1px solid rgba(76, 175, 80, 0.3);
    }

    .status-coming {
        background: rgba(255, 152, 0, 0.15);
        color: #ff9800;
        border: 1px solid rgba(255, 152, 0, 0.3);
    }

    .status-beta {
        background: rgba(30, 136, 229, 0.15);
        color: #1e88e5;
        border: 1px solid rgba(30, 136, 229, 0.3);
    }

    /* Tool Button */
    .tool-btn {
        background: transparent;
        border: 1.5px solid #1e88e5;
        padding: 0.7rem 1.5rem;
        border-radius: 40px;
        color: #1e88e5;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 1rem;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .tool-btn:hover {
        background: #1e88e5;
        color: white;
        transform: translateY(-2px);
    }

    .tool-btn-primary {
        background: linear-gradient(135deg, #1e88e5, #1565c0);
        color: white;
        border: none;
    }

    .tool-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(30, 136, 229, 0.4);
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

    /* Coming Soon Card */
    .coming-soon {
        opacity: 0.8;
    }

    .coming-soon .tool-icon {
        filter: grayscale(0.3);
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
        .tools-grid {
            grid-template-columns: 1fr;
        }
        .stats-row {
            flex-direction: column;
            gap: 1rem;
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

    .tool-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .tool-card:nth-child(1) { animation-delay: 0.1s; }
    .tool-card:nth-child(2) { animation-delay: 0.15s; }
    .tool-card:nth-child(3) { animation-delay: 0.2s; }
    .tool-card:nth-child(4) { animation-delay: 0.25s; }
    .tool-card:nth-child(5) { animation-delay: 0.3s; }
    .tool-card:nth-child(6) { animation-delay: 0.35s; }
    .tool-card:nth-child(7) { animation-delay: 0.4s; }
    .tool-card:nth-child(8) { animation-delay: 0.45s; }
</style>

<!-- ========== PAGE HEADER ========== -->
<section class="page-header">
    <h1><i class="fas fa-tools"></i> Powerful Tools</h1>
    <p>Professional tools to enhance your Sinhala typing experience</p>
</section>

<!-- ========== MAIN CONTENT ========== -->
<div class="container">
    <!-- Stats Row -->
    <div class="stats-row">
        <div class="stat-box">
            <i class="fas fa-tachometer-alt"></i>
            <h3>10+</h3>
            <p>Powerful Tools</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-check-circle"></i>
            <h3>100%</h3>
            <p>Free to Use</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-cloud-upload-alt"></i>
            <h3>24/7</h3>
            <p>Availability</p>
        </div>
        <div class="stat-box">
            <i class="fas fa-mobile-alt"></i>
            <h3>100%</h3>
            <p>Mobile Friendly</p>
        </div>
    </div>

    <!-- Tools Grid -->
    <h2 class="section-title">All <span>Tools</span></h2>
    <p class="section-subtitle">Free, powerful, and easy to use</p>

    <div class="tools-grid">
        <!-- Tool 1 - Sinhala Typing Converter -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-keyboard"></i>
            </div>
            <span class="tool-status status-active"><i class="fas fa-check-circle"></i> Available</span>
            <h3>Sinhala Typing Converter</h3>
            <p>Type in Singlish phonetics and get real-time Sinhala Unicode output. Smart dictionary with 41,000+ words.</p>
            <a href="index.php#converter" class="tool-btn tool-btn-primary"><i class="fas fa-arrow-right"></i> Try Now</a>
        </div>

        <!-- Tool 2 - Voice Typing -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-microphone-alt"></i>
            </div>
            <span class="tool-status status-active"><i class="fas fa-check-circle"></i> Available</span>
            <h3>Voice Typing</h3>
            <p>Speak in Sinhala and see your words typed instantly. 100% private, processed locally.</p>
            <button class="tool-btn tool-btn-primary" onclick="startVoiceTyping()"><i class="fas fa-microphone"></i> Try Now</button>
        </div>

        <!-- Tool 3 - AI Assistant -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-robot"></i>
            </div>
            <span class="tool-status status-beta"><i class="fas fa-flask"></i> Beta</span>
            <h3>AI Assistant</h3>
            <p>Sinhala AI assistant - ask questions, generate content, translate, and get smart replies.</p>
            <button class="tool-btn" onclick="alert('Coming Soon! AI Assistant will be available next month.')"><i class="fas fa-rocket"></i> Coming Soon</button>
        </div>

        <!-- Tool 4 - OCR Scanner -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-image"></i>
            </div>
            <span class="tool-status status-active"><i class="fas fa-check-circle"></i> Available</span>
            <h3>OCR Scanner</h3>
            <p>Extract Sinhala text from images, scanned documents, and photos with 98% accuracy.</p>
            <button class="tool-btn" onclick="alert('OCR Scanner - Upload an image to extract Sinhala text.')"><i class="fas fa-upload"></i> Upload Image</button>
        </div>

        <!-- Tool 5 - PDF Converter -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-file-pdf"></i>
            </div>
            <span class="tool-status status-active"><i class="fas fa-check-circle"></i> Available</span>
            <h3>PDF Converter</h3>
            <p>Convert PDF files to clean, searchable Sinhala Unicode text. Preserve formatting.</p>
            <button class="tool-btn" onclick="alert('PDF Converter - Upload PDF to convert to Sinhala text.')"><i class="fas fa-file-pdf"></i> Convert PDF</button>
        </div>

        <!-- Tool 6 - Caption Generator -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-closed-captioning"></i>
            </div>
            <span class="tool-status status-beta"><i class="fas fa-flask"></i> Beta</span>
            <h3>Caption Generator</h3>
            <p>Generate Sinhala subtitles and captions for your videos automatically. SRT format export.</p>
            <button class="tool-btn" onclick="alert('Caption Generator - Upload video to generate Sinhala captions.')"><i class="fas fa-video"></i> Generate</button>
        </div>
    </div>

    <!-- Second Row - More Tools -->
    <h2 class="section-title">More <span>Useful Tools</span></h2>
    <p class="section-subtitle">Additional tools to boost your productivity</p>

    <div class="tools-grid">
        <!-- Tool 7 - Word Counter -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-words"></i>
            </div>
            <span class="tool-status status-active"><i class="fas fa-check-circle"></i> Available</span>
            <h3>Word Counter</h3>
            <p>Count words, characters, sentences, and paragraphs in Sinhala text. Perfect for writers.</p>
            <a href="#" class="tool-btn" onclick="alert('Word Counter - Available in the converter box above.')"><i class="fas fa-chart-bar"></i> Use Tool</a>
        </div>

        <!-- Tool 8 - Font Converter -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-font"></i>
            </div>
            <span class="tool-status status-coming"><i class="fas fa-clock"></i> Coming Soon</span>
            <h3>Font Converter</h3>
            <p>Convert between different Sinhala font formats (Unicode, FMAbaya, IsiCola, etc.).</p>
            <button class="tool-btn" disabled style="opacity:0.5;"><i class="fas fa-hourglass-half"></i> Coming Soon</button>
        </div>

        <!-- Tool 9 - Spell Checker -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-spell-check"></i>
            </div>
            <span class="tool-status status-coming"><i class="fas fa-clock"></i> Coming Soon</span>
            <h3>Sinhala Spell Checker</h3>
            <p>Check and correct spelling mistakes in Sinhala text with AI-powered suggestions.</p>
            <button class="tool-btn" disabled style="opacity:0.5;"><i class="fas fa-hourglass-half"></i> Coming Soon</button>
        </div>

        <!-- Tool 10 - Translator -->
        <div class="tool-card">
            <div class="tool-icon">
                <i class="fas fa-language"></i>
            </div>
            <span class="tool-status status-coming"><i class="fas fa-clock"></i> Coming Soon</span>
            <h3>Sinhala Translator</h3>
            <p>Translate between Sinhala and English, Tamil, and other major languages.</p>
            <button class="tool-btn" disabled style="opacity:0.5;"><i class="fas fa-hourglass-half"></i> Coming Soon</button>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <span class="premium-badge" style="background: linear-gradient(135deg, #1e88e5, #1565c0); display: inline-block; padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.8rem; font-weight: 600; margin-bottom: 1rem;">
            <i class="fas fa-gem"></i> All Tools Free
        </span>
        <h2>Need a specific tool?</h2>
        <p>We're constantly adding new tools. Request a feature and we'll build it!</p>
        <a href="contact.php" class="btn-primary"><i class="fas fa-comment"></i> Request a Tool</a>
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
                body.light-mode .tool-card { background: #ffffff; border-color: #e0e0e0; }
                body.light-mode .tool-card p { color: #666; }
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

    // Voice Typing Function (from main script)
    function startVoiceTyping() {
        if('webkitSpeechRecognition' in window) {
            const recognition = new webkitSpeechRecognition();
            recognition.lang = 'si-LK';
            recognition.onresult = (event) => {
                let text = event.results[0][0].transcript;
                alert('Voice recognized: ' + text);
                // window.location.href = 'index.php#converter';
            };
            recognition.start();
        } else {
            alert('Voice typing not supported in this browser. Please use Chrome.');
        }
    }
</script>

<?php include 'includes/footer.php'; ?>