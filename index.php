<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; ?>

<!-- Hero Section with Animated Background -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-crown"></i> #1 Sinhala Typing Tool in Sri Lanka
        </div>
        <h1 class="glitch-text" data-text="Singlish → සිංහල">Singlish → සිංහල</h1>
        <p class="hero-description">Type in English letters, get beautiful Sinhala Unicode instantly — Free, Fast & 100% Private!</p>
        <div class="hero-buttons">
            <a href="#converter" class="btn-primary btn-large"><i class="fas fa-keyboard"></i> Start Typing Now</a>
            <a href="#features" class="btn-secondary btn-large"><i class="fas fa-play-circle"></i> Watch Demo</a>
        </div>
        <div class="hero-stats">
            <div class="hero-stat"><i class="fas fa-check-circle"></i> 50,000+ Users</div>
            <div class="hero-stat"><i class="fas fa-star"></i> 4.9 Rating</div>
            <div class="hero-stat"><i class="fas fa-globe"></i> Available 24/7</div>
        </div>
    </div>
    <div class="hero-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0a0a0f" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,208C384,203,480,181,576,181.3C672,181,768,203,864,208C960,213,1056,203,1152,186.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</section>

<div class="container" id="converter">
    <!-- Floating Elements Decoration -->
    <div class="floating-orb orb-1"></div>
    <div class="floating-orb orb-2"></div>
    <div class="floating-orb orb-3"></div>

    <!-- Enhanced Converter Box -->
    <div class="converter-box card fade-in glow-card">
        <div class="converter-header">
            <div class="converter-title">
                <i class="fas fa-keyboard"></i>
                <h2>Sinhala Typing Converter</h2>
            </div>
            <div class="converter-badges">
                <span class="badge"><i class="fas fa-bolt"></i> Real-time</span>
                <span class="badge"><i class="fas fa-shield-alt"></i> Secure</span>
                <span class="badge"><i class="fas fa-microphone" onclick="startVoiceTyping()" style="cursor:pointer;"></i> Voice</span>
            </div>
        </div>
        
        <p class="converter-desc">Type Singlish phonetically and get instant Sinhala Unicode output</p>
        
        <div class="input-group">
            <textarea id="singlishInput" rows="4" placeholder="Example: kohomada? Mama RashSinglish type karanawa..."></textarea>
            <div class="input-tools">
                <button onclick="clearInput()" class="icon-btn"><i class="fas fa-eraser"></i></button>
                <button onclick="toggleCase()" class="icon-btn"><i class="fas fa-text-height"></i></button>
                <button onclick="speakText()" class="icon-btn"><i class="fas fa-volume-up"></i></button>
            </div>
        </div>
        
        <div class="action-buttons">
            <button class="btn-primary" onclick="convertText()"><i class="fas fa-magic"></i> Convert Now</button>
            <button class="btn-secondary" onclick="copyToClipboard()"><i class="fas fa-copy"></i> Copy Result</button>
            <button class="btn-secondary" onclick="downloadAsTxt()"><i class="fas fa-download"></i> Save as TXT</button>
        </div>
        
        <div class="stats-panel">
            <div class="stat-item">
                <i class="fas fa-font"></i>
                <span>Characters: <strong id="charCount">0</strong></span>
            </div>
            <div class="stat-item">
                <i class="fas fa-words"></i>
                <span>Words: <strong id="wordCount">0</strong></span>
            </div>
            <div class="stat-item">
                <i class="fas fa-clock"></i>
                <span>Time: <strong id="typingTime">0s</strong></span>
            </div>
        </div>
        
        <div class="output-area premium-output">
            <div class="output-header">
                <i class="fas fa-sinhala"></i>
                <strong>සිංහල ප්‍රතිඵලය</strong>
                <span class="output-badge">Unicode</span>
            </div>
            <div class="output-content" id="sinhalaOutput">
                <span class="placeholder-text">✨ ඔබගේ සිංහල පෙළ මෙහි දිස්වනු ඇත</span>
            </div>
            <div id="loading" class="loading-spinner" style="display:none;">
                <i class="fas fa-spinner fa-pulse"></i> Converting...
            </div>
        </div>
        
        <!-- Quick Examples -->
        <div class="quick-examples">
            <p><i class="fas fa-lightbulb"></i> Quick Examples:</p>
            <div class="example-chips">
                <span class="chip" onclick="setExample('ayubowan')">ආයුබෝවන්</span>
                <span class="chip" onclick="setExample('kohomada')">කොහොමද</span>
                <span class="chip" onclick="setExample('istuti')">ඉස්තුති</span>
                <span class="chip" onclick="setExample('mama sinhalen kiyanawa')">මම සිංහලෙන් කියනවා</span>
                <span class="chip" onclick="setExample('rata dakwanna ayith waradak na')">රට දක්වන්න ආයිත් වරදක් නෑ</span>
            </div>
        </div>
    </div>

    <!-- Enhanced Stats Grid with Animation -->
    <div class="stats-section" id="stats">
        <div class="stats-grid">
            <div class="stat-card premium-stat" data-count="50000">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <h3 class="counter" data-target="50000">0</h3>
                <p>Happy Users</p>
                <span class="stat-trend"><i class="fas fa-chart-line"></i> +25% this month</span>
            </div>
            <div class="stat-card premium-stat" data-count="1250000">
                <div class="stat-icon"><i class="fas fa-exchange-alt"></i></div>
                <h3 class="counter" data-target="1250000">0</h3>
                <p>Total Conversions</p>
                <span class="stat-trend"><i class="fas fa-chart-line"></i> 1.2M+</span>
            </div>
            <div class="stat-card premium-stat" data-count="41000">
                <div class="stat-icon"><i class="fas fa-book"></i></div>
                <h3 class="counter" data-target="41000">0</h3>
                <p>Word Dictionary</p>
                <span class="stat-trend"><i class="fas fa-plus-circle"></i> Constantly updated</span>
            </div>
            <div class="stat-card premium-stat" data-count="99">
                <div class="stat-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3 class="counter" data-target="99">0</h3>
                <p>Accuracy %</p>
                <span class="stat-trend"><i class="fas fa-check-circle"></i> AI powered</span>
            </div>
        </div>
    </div>

    <!-- Features Section with 3D Cards -->
    <div class="section-header" id="features">
        <span class="section-badge">Why Choose Us</span>
        <h2 class="section-title">Everything You Need <span class="highlight">for Sinhala</span></h2>
        <p class="section-subtitle">From phonetic typing to AI-powered tools, we've got you covered with cutting-edge technology</p>
    </div>

    <div class="features-grid premium-grid">
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-bolt"></i></div>
            <h3>Real-time Conversion</h3>
            <p>Instant Singlish to Sinhala transformation as you type — no delays, no waiting.</p>
            <div class="feature-footer"><span class="feature-tag">⚡ Speed: 0.01s</span></div>
        </div>
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-microphone-alt"></i></div>
            <h3>Voice Typing</h3>
            <p>Speak in Sinhala or English and watch your words appear instantly. 100% private.</p>
            <div class="feature-footer"><span class="feature-tag">🎤 Offline support</span></div>
        </div>
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-robot"></i></div>
            <h3>AI Assistant</h3>
            <p>Smart word suggestions, auto-complete, and intelligent Sinhala language processing.</p>
            <div class="feature-footer"><span class="feature-tag">🧠 AI powered</span></div>
        </div>
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-image"></i></div>
            <h3>OCR Scanner</h3>
            <p>Extract Sinhala text from images, screenshots, and scanned documents with 98% accuracy.</p>
            <div class="feature-footer"><span class="feature-tag">📸 Drag & drop</span></div>
        </div>
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-file-pdf"></i></div>
            <h3>PDF Converter</h3>
            <p>Convert PDF files to searchable Sinhala Unicode text. Preserve formatting and layout.</p>
            <div class="feature-footer"><span class="feature-tag">📄 Batch processing</span></div>
        </div>
        <div class="feature-card premium-feature" data-tilt>
            <div class="feature-icon"><i class="fas fa-closed-captioning"></i></div>
            <h3>Caption Generator</h3>
            <p>Auto-generate Sinhala subtitles for your videos. Perfect for YouTube creators.</p>
            <div class="feature-footer"><span class="feature-tag">🎬 SRT format</span></div>
        </div>
    </div>

    <!-- Live Preview Demo Section -->
    <div class="live-preview-section">
        <div class="preview-card">
            <div class="preview-header">
                <i class="fas fa-eye"></i>
                <h3>Live Conversion Demo</h3>
                <span class="live-badge"><i class="fas fa-circle"></i> Live</span>
            </div>
            <div class="preview-grid">
                <div class="preview-item">
                    <span class="preview-label">Type:</span>
                    <span class="preview-value">amma</span>
                </div>
                <div class="preview-arrow"><i class="fas fa-arrow-right"></i></div>
                <div class="preview-item">
                    <span class="preview-label">Text:</span>
                    <span class="preview-value sinhala-text">අම්මා</span>
                </div>
                <div class="preview-arrow"><i class="fas fa-arrow-right"></i></div>
                <div class="preview-item">
                    <span class="preview-label">Result:</span>
                    <span class="preview-value sinhala-text">ආදරෙයි අම්මා</span>
                </div>
            </div>
            <div class="preview-animation">
                <div class="typing-animation">Type "kohomada" → <span id="demoResult">කොහොමද</span></div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials-section">
        <h2 class="section-title">What <span class="highlight">Our Users Say</span></h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"Best Sinhala typing tool ever! The voice typing feature is amazing and super accurate."</p>
                <div class="testimonial-author">
                    <div class="author-avatar"><i class="fas fa-user-circle"></i></div>
                    <div><strong>Nuwan Perera</strong><br><span>Content Creator</span></div>
                </div>
                <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"Finally a modern solution for Sinhala typing. The UI is beautiful and it works flawlessly on mobile."</p>
                <div class="testimonial-author">
                    <div class="author-avatar"><i class="fas fa-user-circle"></i></div>
                    <div><strong>Dilini Rajapaksha</strong><br><span>Teacher</span></div>
                </div>
                <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p>"As a journalist, I need fast Sinhala typing. This tool saves me hours every week. Highly recommended!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar"><i class="fas fa-user-circle"></i></div>
                    <div><strong>Chamara Weerasinghe</strong><br><span>Journalist</span></div>
                </div>
                <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <h2 class="section-title">Frequently Asked <span class="highlight">Questions</span></h2>
        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <i class="fas fa-question-circle"></i>
                    <span>How does Singlish to Sinhala conversion work?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Simply type Sinhala words using English letters (phonetically). Our smart algorithm instantly converts them to Sinhala Unicode. Example: "kohomada" → "කොහොමද"</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <i class="fas fa-question-circle"></i>
                    <span>Is my data private and secure?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Yes! 100% privacy guaranteed. All conversions happen locally in your browser. We do NOT store or share any of your typed content.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <i class="fas fa-question-circle"></i>
                    <span>Can I use this offline?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Yes! Once the page loads, you can use the converter offline. The entire dictionary works without internet connection.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <i class="fas fa-question-circle"></i>
                    <span>Is there a mobile app available?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Not yet, but our website is fully responsive and works perfectly on all mobile browsers. An Android app is coming soon!</div>
            </div>
        </div>
    </div>

    <!-- CTA Banner -->
    <div class="cta-banner">
        <div class="cta-content">
            <h3>Ready to master Sinhala typing?</h3>
            <p>Join 50,000+ users who type Sinhala faster every day</p>
            <a href="#converter" class="btn-primary btn-large"><i class="fas fa-arrow-right"></i> Start Typing Now</a>
        </div>
        <div class="cta-decoration">
            <i class="fas fa-keyboard"></i>
            <i class="fas fa-language"></i>
            <i class="fas fa-microphone"></i>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="newsletter-section">
    <div class="newsletter-container">
        <i class="fas fa-envelope-open-text newsletter-icon"></i>
        <h3>Subscribe to our Newsletter</h3>
        <p>Get weekly tips, new features, and Sinhala typing updates</p>
        <form class="newsletter-form" onsubmit="subscribeNewsletter(event)">
            <input type="email" placeholder="Your email address" required>
            <button type="submit"><i class="fas fa-paper-plane"></i> Subscribe</button>
        </form>
        <p class="newsletter-note"><i class="fas fa-lock"></i> No spam, unsubscribe anytime</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>