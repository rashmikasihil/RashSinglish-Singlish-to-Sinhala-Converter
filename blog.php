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

    /* ========== BLOG LAYOUT ========== */
    .blog-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
    }

    /* ========== MAIN CONTENT ========== */
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid rgba(30, 136, 229, 0.3);
        display: inline-block;
    }

    .section-title span {
        color: #1e88e5;
    }

    /* Blog Posts Grid */
    .posts-grid {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Blog Card */
    .blog-card {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 28px;
        overflow: hidden;
        transition: all 0.4s;
        border: 1px solid rgba(30, 136, 229, 0.15);
    }

    .blog-card:hover {
        transform: translateY(-5px);
        border-color: #1e88e5;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.3);
    }

    .blog-image {
        width: 100%;
        height: 220px;
        background: linear-gradient(135deg, #1e293b, #0f172a);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .blog-image i {
        font-size: 4rem;
        color: #1e88e5;
        opacity: 0.5;
    }

    .blog-category {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #1e88e5;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        color: white;
    }

    .blog-content {
        padding: 1.5rem;
    }

    .blog-meta {
        display: flex;
        gap: 1rem;
        margin-bottom: 0.8rem;
        font-size: 0.75rem;
        color: #888;
    }

    .blog-meta i {
        color: #1e88e5;
        margin-right: 5px;
    }

    .blog-card h2 {
        font-size: 1.4rem;
        margin-bottom: 0.8rem;
        line-height: 1.4;
    }

    .blog-card h2 a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .blog-card h2 a:hover {
        color: #1e88e5;
    }

    .blog-excerpt {
        color: #a0a0a0;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .read-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #1e88e5;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.3s;
    }

    .read-more:hover {
        gap: 12px;
        color: #42a5f5;
    }

    /* ========== SIDEBAR ========== */
    .sidebar {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Search Widget */
    .widget {
        background: linear-gradient(145deg, #121212, #0d0d0d);
        border-radius: 24px;
        padding: 1.5rem;
        border: 1px solid rgba(30, 136, 229, 0.15);
    }

    .widget-title {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid rgba(30, 136, 229, 0.3);
        display: inline-block;
    }

    .widget-title i {
        color: #1e88e5;
        margin-right: 8px;
    }

    .search-box {
        display: flex;
        gap: 0.5rem;
    }

    .search-box input {
        flex: 1;
        padding: 0.8rem;
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        color: white;
        font-size: 0.9rem;
    }

    .search-box input:focus {
        outline: none;
        border-color: #1e88e5;
    }

    .search-box button {
        background: #1e88e5;
        border: none;
        padding: 0.8rem 1rem;
        border-radius: 12px;
        color: white;
        cursor: pointer;
        transition: all 0.3s;
    }

    .search-box button:hover {
        background: #42a5f5;
    }

    /* Categories List */
    .categories-list {
        list-style: none;
    }

    .categories-list li {
        margin-bottom: 0.8rem;
    }

    .categories-list a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #cccccc;
        text-decoration: none;
        transition: all 0.3s;
        padding: 0.5rem 0;
    }

    .categories-list a:hover {
        color: #1e88e5;
        transform: translateX(5px);
    }

    .categories-list span {
        color: #1e88e5;
        font-size: 0.8rem;
    }

    /* Recent Posts */
    .recent-post {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .recent-post:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .recent-icon {
        width: 50px;
        height: 50px;
        background: rgba(30, 136, 229, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .recent-icon i {
        font-size: 1.2rem;
        color: #1e88e5;
    }

    .recent-info h4 {
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
    }

    .recent-info a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .recent-info a:hover {
        color: #1e88e5;
    }

    .recent-date {
        font-size: 0.7rem;
        color: #888;
    }

    /* Newsletter Widget */
    .newsletter-widget p {
        color: #a0a0a0;
        font-size: 0.85rem;
        margin-bottom: 1rem;
    }

    .newsletter-input {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
    }

    .newsletter-input input {
        padding: 0.8rem;
        background: #1a1a1a;
        border: 1px solid #2a2a2a;
        border-radius: 12px;
        color: white;
    }

    .newsletter-input input:focus {
        outline: none;
        border-color: #1e88e5;
    }

    .newsletter-input button {
        background: linear-gradient(135deg, #1e88e5, #1565c0);
        border: none;
        padding: 0.8rem;
        border-radius: 12px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .newsletter-input button:hover {
        transform: translateY(-2px);
    }

    /* Tag Cloud */
    .tag-cloud {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tag {
        background: rgba(30, 136, 229, 0.1);
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.75rem;
        color: #1e88e5;
        text-decoration: none;
        transition: all 0.3s;
        border: 1px solid rgba(30, 136, 229, 0.2);
    }

    .tag:hover {
        background: #1e88e5;
        color: white;
        transform: translateY(-2px);
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .page-link {
        background: #1a1a1a;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        color: #cccccc;
        text-decoration: none;
        transition: all 0.3s;
        border: 1px solid #2a2a2a;
    }

    .page-link.active {
        background: #1e88e5;
        color: white;
        border-color: #1e88e5;
    }

    .page-link:hover:not(.active) {
        background: #2a2a2a;
        color: #1e88e5;
        border-color: #1e88e5;
    }

    /* Featured Post */
    .featured-post {
        margin-bottom: 2rem;
    }

    .featured-badge {
        display: inline-block;
        background: linear-gradient(135deg, #ff9800, #f57c00);
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .blog-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 1.8rem;
        }
        .blog-card h2 {
            font-size: 1.2rem;
        }
        .blog-image {
            height: 180px;
        }
        .sidebar {
            margin-top: 1rem;
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

    .blog-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .blog-card:nth-child(1) { animation-delay: 0.1s; }
    .blog-card:nth-child(2) { animation-delay: 0.15s; }
    .blog-card:nth-child(3) { animation-delay: 0.2s; }
    .blog-card:nth-child(4) { animation-delay: 0.25s; }
    .blog-card:nth-child(5) { animation-delay: 0.3s; }
    .blog-card:nth-child(6) { animation-delay: 0.35s; }
</style>

<!-- ========== PAGE HEADER ========== -->
<section class="page-header">
    <h1><i class="fas fa-blog"></i> Sinhala Tech Blog</h1>
    <p>Latest news, tips, and tutorials about Sinhala typing and language technology</p>
</section>

<!-- ========== MAIN CONTENT ========== -->
<div class="container">
    <div class="blog-layout">
        <!-- Main Content -->
        <div class="main-content">
            <!-- Featured Post -->
            <div class="featured-post">
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-crown"></i>
                        <span class="blog-category"></i> Featured</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> January 15, 2025</span>
                            <span><i class="fas fa-user"></i> By Rashmika Bandara</span>
                            <span><i class="fas fa-eye"></i> 2.5K views</span>
                        </div>
                        <h2><a href="blog-details.php?id=1">The Ultimate Guide to Fast Sinhala Typing in 2025</a></h2>
                        <p class="blog-excerpt">Master Sinhala typing with these 10 pro tips. Learn how to type faster, avoid common mistakes, and use voice typing effectively. Whether you're a student, professional, or content creator...</p>
                        <a href="blog-details.php?id=1" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Recent Posts Title -->
            <h2 class="section-title"><span>Recent</span> Articles</h2>
            
            <!-- Posts Grid -->
            <div class="posts-grid">
                <!-- Post 1 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-microphone-alt"></i>
                        <span class="blog-category">Tutorial</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> January 12, 2025</span>
                            <span><i class="fas fa-user"></i> By Sanduni Weerasinghe</span>
                            <span><i class="fas fa-comment"></i> 12 comments</span>
                        </div>
                        <h2><a href="#">How to Use Voice Typing for Sinhala: Complete Guide</a></h2>
                        <p class="blog-excerpt">Learn how to dictate Sinhala text using your voice. Perfect for writers, students, and professionals who want to type faster without a keyboard...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-robot"></i>
                        <span class="blog-category">AI & Tech</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> January 8, 2025</span>
                            <span><i class="fas fa-user"></i> By Nuwan Perera</span>
                            <span><i class="fas fa-eye"></i> 1.2K views</span>
                        </div>
                        <h2><a href="#">AI is Revolutionizing Sinhala Language Processing</a></h2>
                        <p class="blog-excerpt">Discover how artificial intelligence is transforming Sinhala typing, translation, and content creation. From smart predictions to auto-corrections...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-image"></i>
                        <span class="blog-category">Tool Review</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> January 5, 2025</span>
                            <span><i class="fas fa-user"></i> By Dilini Rajapaksha</span>
                            <span><i class="fas fa-eye"></i> 890 views</span>
                        </div>
                        <h2><a href="#">OCR Technology: Extract Sinhala Text from Images Easily</a></h2>
                        <p class="blog-excerpt">Stop retyping text from images! Learn how to use OCR to extract Sinhala text from photos, screenshots, and scanned documents in seconds...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-file-pdf"></i>
                        <span class="blog-category">Tutorial</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> January 1, 2025</span>
                            <span><i class="fas fa-user"></i> By Rashmika Bandara</span>
                            <span><i class="fas fa-eye"></i> 2.1K views</span>
                        </div>
                        <h2><a href="#">Convert PDF to Sinhala Unicode: Step-by-Step Tutorial</a></h2>
                        <p class="blog-excerpt">Learn how to convert legacy PDF files to searchable, editable Sinhala Unicode text. Perfect for digitizing old documents and books...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-closed-captioning"></i>
                        <span class="blog-category">Content Creation</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> December 28, 2024</span>
                            <span><i class="fas fa-user"></i> By Sanduni Weerasinghe</span>
                            <span><i class="fas fa-eye"></i> 567 views</span>
                        </div>
                        <h2><a href="#">How to Add Sinhala Subtitles to Your Videos Automatically</a></h2>
                        <p class="blog-excerpt">Create professional Sinhala captions for your YouTube videos in minutes. Step-by-step guide with tips for better accuracy...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Post 6 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-shield-alt"></i>
                        <span class="blog-category">Privacy</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> December 20, 2024</span>
                            <span><i class="fas fa-user"></i> By Nuwan Perera</span>
                            <span><i class="fas fa-eye"></i> 432 views</span>
                        </div>
                        <h2><a href="#">Why Privacy Matters in Online Typing Tools</a></h2>
                        <p class="blog-excerpt">Learn why RashSinglish doesn't store your data and how we keep your typing private. A deep dive into our privacy-first philosophy...</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">Next <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Search Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-search"></i> Search</h3>
                <div class="search-box">
                    <input type="text" placeholder="Search articles...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-folder"></i> Categories</h3>
                <ul class="categories-list">
                    <li><a href="#">Tutorials <span>(8)</span></a></li>
                    <li><a href="#">AI & Technology <span>(5)</span></a></li>
                    <li><a href="#">Tips & Tricks <span>(12)</span></a></li>
                    <li><a href="#">Tool Reviews <span>(4)</span></a></li>
                    <li><a href="#">Content Creation <span>(6)</span></a></li>
                    <li><a href="#">Privacy & Security <span>(3)</span></a></li>
                    <li><a href="#">News & Updates <span>(7)</span></a></li>
                </ul>
            </div>

            <!-- Popular Posts Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-fire"></i> Popular Posts</h3>
                <div class="recent-post">
                    <div class="recent-icon"><i class="fas fa-keyboard"></i></div>
                    <div class="recent-info">
                        <h4><a href="#">10 Tips to Type Sinhala Faster</a></h4>
                        <span class="recent-date"><i class="fas fa-eye"></i> 3.2K views</span>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="recent-icon"><i class="fas fa-microphone-alt"></i></div>
                    <div class="recent-info">
                        <h4><a href="#">Voice Typing Masterclass</a></h4>
                        <span class="recent-date"><i class="fas fa-eye"></i> 2.8K views</span>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="recent-icon"><i class="fas fa-robot"></i></div>
                    <div class="recent-info">
                        <h4><a href="#">AI in Sinhala Language</a></h4>
                        <span class="recent-date"><i class="fas fa-eye"></i> 2.1K views</span>
                    </div>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-envelope"></i> Newsletter</h3>
                <p>Get the latest articles and tips delivered to your inbox</p>
                <div class="newsletter-input">
                    <input type="email" id="blogSubscribeEmail" placeholder="Your email address">
                    <button onclick="subscribeBlog()"><i class="fas fa-paper-plane"></i> Subscribe</button>
                </div>
            </div>

            <!-- Tag Cloud Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-tags"></i> Popular Tags</h3>
                <div class="tag-cloud">
                    <a href="#" class="tag">Sinhala Typing</a>
                    <a href="#" class="tag">Voice Typing</a>
                    <a href="#" class="tag">AI Assistant</a>
                    <a href="#" class="tag">OCR Scanner</a>
                    <a href="#" class="tag">PDF Converter</a>
                    <a href="#" class="tag">Subtitles</a>
                    <a href="#" class="tag">Tutorial</a>
                    <a href="#" class="tag">Tips</a>
                    <a href="#" class="tag">Privacy</a>
                    <a href="#" class="tag">Unicode</a>
                </div>
            </div>

            <!-- Follow Us Widget -->
            <div class="widget">
                <h3 class="widget-title"><i class="fas fa-share-alt"></i> Follow Us</h3>
                <div class="tag-cloud">
                    <a href="#" class="tag"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#" class="tag"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#" class="tag"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#" class="tag"><i class="fab fa-youtube"></i> YouTube</a>
                    <a href="#" class="tag"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                </div>
            </div>
        </div>
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
                body.light-mode .blog-card,
                body.light-mode .widget { background: #ffffff; border-color: #e0e0e0; }
                body.light-mode .blog-excerpt,
                body.light-mode .widget p { color: #666; }
                body.light-mode .blog-card h2 a { color: #1a1a1a; }
                body.light-mode .blog-card h2 a:hover { color: #1e88e5; }
                body.light-mode .search-box input,
                body.light-mode .newsletter-input input { background: #f0f0f0; border-color: #ddd; color: #333; }
                body.light-mode .categories-list a { color: #555; }
                body.light-mode .recent-info a { color: #1a1a1a; }
                body.light-mode .recent-info a:hover { color: #1e88e5; }
                body.light-mode footer { background: #f0f0f0; border-top-color: #1e88e5; }
                body.light-mode .footer-col p, 
                body.light-mode .footer-bottom { color: #666; }
                body.light-mode .footer-col a { color: #555; }
                body.light-mode .page-link { background: #e0e0e0; color: #333; }
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

    // Blog Subscribe Function
    function subscribeBlog() {
        let email = document.getElementById('blogSubscribeEmail').value;
        if(email && email.includes('@')) {
            alert('✅ Thank you for subscribing to our blog!');
            document.getElementById('blogSubscribeEmail').value = '';
        } else {
            alert('⚠️ Please enter a valid email address');
        }
    }
</script>

<?php include 'includes/footer.php'; ?>