// ========== MOBILE MENU TOGGLE ==========
function toggleMenu() {
    let navLinks = document.querySelector('.nav-links');
    if(navLinks) navLinks.classList.toggle('active');
}

// ========== SINGLISH TO SINHALA CONVERSION (Enhanced) ==========
// Extended mapping dictionary
const sinhalaMap = {
    // Basic vowels
    'aa': 'ආ', 'ae': 'ඇ', 'aee': 'ඈ', 'ii': 'ඊ', 'uu': 'ඌ', 'ee': 'ඒ', 'oo': 'ඕ',
    'a': 'අ', 'i': 'ඉ', 'u': 'උ', 'e': 'එ', 'o': 'ඔ',
    
    // Common words
    'amma': 'අම්මා', 'appa': 'අප්පා', 'kohomada': 'කොහොමද', 'mama': 'මම',
    'sinhalen': 'සිංහලෙන්', 'type': 'ටයිප්', 'karanawa': 'කරනවා',
    'ayubowan': 'ආයුබෝවන්', 'istuti': 'ඉස්තුති', 'ban': 'බෑන්', 'hodai': 'හොඳයි',
    'naha': 'නෑ', 'oyata': 'ඔයාට', 'mata': 'මට', 'api': 'අපි', 'oya': 'ඔයා',
    
    // Consonants with vowels
    'ka': 'ක', 'kā': 'කා', 'ki': 'කි', 'kī': 'කී', 'ku': 'කු', 'kū': 'කූ', 'ke': 'කෙ', 'kē': 'කේ', 'ko': 'කො', 'kō': 'කෝ',
    'ga': 'ග', 'gā': 'ගා', 'gi': 'ගි', 'gī': 'ගී', 'gu': 'ගු', 'gū': 'ගූ', 'ge': 'ගෙ', 'gē': 'ගේ', 'go': 'ගො', 'gō': 'ගෝ',
    'ca': 'ච', 'cā': 'චා', 'ci': 'චි', 'cī': 'චී', 'cu': 'චු', 'cū': 'චූ', 'ce': 'චෙ', 'cē': 'චේ', 'co': 'චො', 'cō': 'චෝ',
    'ja': 'ජ', 'jā': 'ජා', 'ji': 'ජි', 'jī': 'ජී', 'ju': 'ජු', 'jū': 'ජූ', 'je': 'ජෙ', 'jē': 'ජේ', 'jo': 'ජො', 'jō': 'ජෝ',
    'ta': 'ට', 'tā': 'ටා', 'ti': 'ටි', 'tī': 'ටී', 'tu': 'ටු', 'tū': 'ටූ', 'te': 'ටෙ', 'tē': 'ටේ', 'to': 'ටො', 'tō': 'ටෝ',
    'da': 'ඩ', 'dā': 'ඩා', 'di': 'ඩි', 'dī': 'ඩී', 'du': 'ඩු', 'dū': 'ඩූ', 'de': 'ඩෙ', 'dē': 'ඩේ', 'do': 'ඩො', 'dō': 'ඩෝ',
    'na': 'න', 'nā': 'නා', 'ni': 'නි', 'nī': 'නී', 'nu': 'නු', 'nū': 'නූ', 'ne': 'නෙ', 'nē': 'නේ', 'no': 'නො', 'nō': 'නෝ',
    'pa': 'ප', 'pā': 'පා', 'pi': 'පි', 'pī': 'පී', 'pu': 'පු', 'pū': 'පූ', 'pe': 'පෙ', 'pē': 'පේ', 'po': 'පො', 'pō': 'පෝ',
    'ba': 'බ', 'bā': 'බා', 'bi': 'බි', 'bī': 'බී', 'bu': 'බු', 'bū': 'බූ', 'be': 'බෙ', 'bē': 'බේ', 'bo': 'බො', 'bō': 'බෝ',
    'ma': 'ම', 'mā': 'මා', 'mi': 'මි', 'mī': 'මී', 'mu': 'මු', 'mū': 'මූ', 'me': 'මෙ', 'mē': 'මේ', 'mo': 'මො', 'mō': 'මෝ',
    'ya': 'ය', 'yā': 'යා', 'yi': 'යි', 'yī': 'යී', 'yu': 'යු', 'yū': 'යූ', 'ye': 'යෙ', 'yē': 'යේ', 'yo': 'යො', 'yō': 'යෝ',
    'ra': 'ර', 'rā': 'රා', 'ri': 'රි', 'rī': 'රී', 'ru': 'රු', 'rū': 'රූ', 're': 'රෙ', 'rē': 'රේ', 'ro': 'රො', 'rō': 'රෝ',
    'la': 'ල', 'lā': 'ලා', 'li': 'ලි', 'lī': 'ලී', 'lu': 'ලු', 'lū': 'ලූ', 'le': 'ලෙ', 'lē': 'ලේ', 'lo': 'ලො', 'lō': 'ලෝ',
    'va': 'ව', 'vā': 'වා', 'vi': 'වි', 'vī': 'වී', 'vu': 'වු', 'vū': 'වූ', 've': 'වෙ', 'vē': 'වේ', 'vo': 'වො', 'vō': 'වෝ',
    'sa': 'ස', 'sā': 'සා', 'si': 'සි', 'sī': 'සී', 'su': 'සු', 'sū': 'සූ', 'se': 'සෙ', 'sē': 'සේ', 'so': 'සො', 'sō': 'සෝ',
    'ha': 'හ', 'hā': 'හා', 'hi': 'හි', 'hī': 'හී', 'hu': 'හු', 'hū': 'හූ', 'he': 'හෙ', 'hē': 'හේ', 'ho': 'හො', 'hō': 'හෝ',
    'la': 'ල', 'lā': 'ලා', 'li': 'ලි', 'lī': 'ලී', 'lu': 'ලු', 'lū': 'ලූ', 'le': 'ලෙ', 'lē': 'ලේ', 'lo': 'ලො', 'lō': 'ලෝ',
    
    // Special characters
    'sha': 'ශ', 'shaa': 'ෂා', 'fa': 'ෆ', 'dna': 'ඥ', 'gna': 'ඤ',
    
    // Punctuation and spaces
    ' ': ' ', '.': '.', ',': ',', '?': '?', '!': '!', "'": "'", '"': '"', ';': ';', ':': ':'
};

function singlishToSinhala(text) {
    if(!text) return '';
    let lowerText = text.toLowerCase();
    
    // Sort by length (longest first) to avoid partial matches
    let sortedKeys = Object.keys(sinhalaMap).sort((a, b) => b.length - a.length);
    
    for(let eng of sortedKeys) {
        let regex = new RegExp(eng, 'gi');
        lowerText = lowerText.replace(regex, sinhalaMap[eng]);
    }
    
    // Handle special patterns like "nna" -> "න්න"
    lowerText = lowerText.replace(/nna/g, 'න්න');
    lowerText = lowerText.replace(/ndha/g, 'න්ද');
    lowerText = lowerText.replace(/nga/g, 'ංග');
    
    return lowerText;
}

// Main conversion function (async with API or local)
async function convertText() {
    let input = document.getElementById('singlishInput');
    let output = document.getElementById('sinhalaOutput');
    let loading = document.getElementById('loading');
    
    if(!input || !output) return;
    
    if(!input.value.trim()) {
        output.innerHTML = '<span class="placeholder-text"><i class="fas fa-exclamation-triangle"></i> කරුණාකර යමක් ටයිප් කරන්න</span>';
        updateCounters('');
        return;
    }
    
    if(loading) loading.style.display = 'flex';
    
    // Try API first, fallback to local
    try {
        let res = await fetch('api/convert.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'singlish=' + encodeURIComponent(input.value)
        });
        if(res.ok) {
            let data = await res.json();
            output.innerHTML = data.sinhala;
        } else {
            throw new Error('API failed');
        }
    } catch(e) {
        // Fallback to local conversion
        console.log('Using local conversion');
        let sinhalaText = singlishToSinhala(input.value);
        output.innerHTML = sinhalaText;
    }
    
    if(loading) loading.style.display = 'none';
    
    // Update counters
    updateCounters(input.value);
}

// ========== UPDATE CHARACTER & WORD COUNTERS ==========
function updateCounters(text) {
    let charCount = document.getElementById('charCount');
    let wordCount = document.getElementById('wordCount');
    
    if(charCount) charCount.innerText = text.length;
    if(wordCount) {
        let words = text.trim() ? text.trim().split(/\s+/).length : 0;
        wordCount.innerText = words;
    }
}

// ========== CLEAR INPUT ==========
function clearInput() {
    let input = document.getElementById('singlishInput');
    if(input) {
        input.value = '';
        convertText();
        input.focus();
    }
}

// ========== TOGGLE CASE (UPPERCASE/LOWERCASE) ==========
let isUpperCase = false;
function toggleCase() {
    let input = document.getElementById('singlishInput');
    if(!input) return;
    
    if(isUpperCase) {
        input.value = input.value.toLowerCase();
    } else {
        input.value = input.value.toUpperCase();
    }
    isUpperCase = !isUpperCase;
    convertText();
}

// ========== COPY TO CLIPBOARD ==========
async function copyToClipboard() {
    let output = document.getElementById('sinhalaOutput');
    if(!output) return;
    
    let text = output.innerText;
    let placeholder = '✨ ඔබගේ සිංහල පෙළ මෙහි දිස්වනු ඇත';
    let oldPlaceholder = 'සිංහල ප්‍රතිඵලය මෙහි දිස්වනු ඇත';
    
    if(text && text !== placeholder && text !== oldPlaceholder && text !== '') {
        try {
            await navigator.clipboard.writeText(text);
            showToast('✅ සිංහල පෙළ පිටපත් කරන ලදී!', 'success');
        } catch(e) {
            showToast('❌ Copy failed. Please try again.', 'error');
        }
    } else {
        showToast('⚠️ කරුණාකර පළමුව යමක් ටයිප් කරන්න', 'warning');
    }
}

// ========== DOWNLOAD AS TEXT FILE ==========
function downloadAsTxt() {
    let output = document.getElementById('sinhalaOutput');
    if(!output) return;
    
    let text = output.innerText;
    let placeholder = '✨ ඔබගේ සිංහල පෙළ මෙහි දිස්වනු ඇත';
    let oldPlaceholder = 'සිංහල ප්‍රතිඵලය මෙහි දිස්වනු ඇත';
    
    if(text && text !== placeholder && text !== oldPlaceholder && text !== '') {
        let blob = new Blob([text], {type: 'text/plain;charset=utf-8'});
        let link = document.createElement('a');
        let url = URL.createObjectURL(blob);
        link.href = url;
        link.download = `sinhala_text_${new Date().toISOString().slice(0,19)}.txt`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
        showToast('✅ File downloaded successfully!', 'success');
    } else {
        showToast('⚠️ No text to download', 'warning');
    }
}

// ========== SPEAK TEXT (TEXT TO SPEECH) ==========
function speakText() {
    let output = document.getElementById('sinhalaOutput');
    if(!output) return;
    
    let text = output.innerText;
    let placeholder = '✨ ඔබගේ සිංහල පෙළ මෙහි දිස්වනු ඇත';
    let oldPlaceholder = 'සිංහල ප්‍රතිඵලය මෙහි දිස්වනු ඇත';
    
    if(text && text !== placeholder && text !== oldPlaceholder && text !== '') {
        if('speechSynthesis' in window) {
            // Cancel any ongoing speech
            speechSynthesis.cancel();
            
            let utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'si-LK';
            utterance.rate = 0.9;
            utterance.pitch = 1;
            
            // Try to get Sinhala voice
            let voices = speechSynthesis.getVoices();
            let sinhalaVoice = voices.find(voice => voice.lang.includes('si'));
            if(sinhalaVoice) utterance.voice = sinhalaVoice;
            
            utterance.onend = () => console.log('Speech finished');
            utterance.onerror = (e) => console.error('Speech error:', e);
            
            speechSynthesis.speak(utterance);
            showToast('🔊 Speaking Sinhala text...', 'info');
        } else {
            showToast('❌ Text-to-speech not supported in this browser', 'error');
        }
    } else {
        showToast('⚠️ කරුණාකර පළමුව යමක් ටයිප් කරන්න', 'warning');
    }
}

// ========== VOICE TYPING (SPEECH TO TEXT) ==========
function startVoiceTyping() {
    if('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
        const SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
        const recognition = new SpeechRecognition();
        
        recognition.lang = 'si-LK';
        recognition.continuous = false;
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;
        
        recognition.onstart = () => {
            showToast('🎤 Listening... Speak now', 'info');
        };
        
        recognition.onresult = (event) => {
            let text = event.results[0][0].transcript;
            let input = document.getElementById('singlishInput');
            if(input) {
                input.value = text;
                convertText();
                showToast('✅ Voice recognized!', 'success');
            }
        };
        
        recognition.onerror = (event) => {
            console.error('Speech recognition error:', event.error);
            if(event.error === 'not-allowed') {
                showToast('❌ Microphone permission denied', 'error');
            } else {
                showToast('❌ Voice typing failed. Please try again.', 'error');
            }
        };
        
        recognition.onend = () => {
            console.log('Voice recognition ended');
        };
        
        recognition.start();
    } else {
        showToast('❌ Voice typing not supported in this browser. Please use Chrome or Edge.', 'error');
    }
}

// ========== SET EXAMPLE TEXT ==========
function setExample(text) {
    let input = document.getElementById('singlishInput');
    if(input) {
        input.value = text;
        convertText();
        input.focus();
    }
}

// ========== TOAST NOTIFICATION SYSTEM ==========
function showToast(message, type = 'info') {
    // Remove existing toast
    let existingToast = document.querySelector('.custom-toast');
    if(existingToast) existingToast.remove();
    
    // Create toast element
    let toast = document.createElement('div');
    toast.className = `custom-toast toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle'}"></i>
            <span>${message}</span>
        </div>
        <div class="toast-progress"></div>
    `;
    
    // Style the toast
    toast.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : type === 'warning' ? '#f59e0b' : '#3b82f6'};
        color: white;
        padding: 12px 24px;
        border-radius: 50px;
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        font-size: 14px;
        font-weight: 500;
        min-width: 250px;
        text-align: center;
    `;
    
    document.body.appendChild(toast);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// Add animation styles for toast
const toastStyles = document.createElement('style');
toastStyles.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(toastStyles);

// ========== DARK/LIGHT MODE TOGGLE ==========
function toggleTheme() {
    document.body.classList.toggle('light-mode');
    let isLight = document.body.classList.contains('light-mode');
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
    
    let themeIcon = document.querySelector('.theme-toggle i');
    if(themeIcon) {
        themeIcon.className = isLight ? 'fas fa-sun' : 'fas fa-moon';
    }
    
    showToast(isLight ? '☀️ Light mode activated' : '🌙 Dark mode activated', 'info');
}

// Load saved theme
function loadSavedTheme() {
    let savedTheme = localStorage.getItem('theme');
    if(savedTheme === 'light') {
        document.body.classList.add('light-mode');
        let themeIcon = document.querySelector('.theme-toggle i');
        if(themeIcon) themeIcon.className = 'fas fa-sun';
    }
}

// ========== TYPING TIMER ==========
let startTime = Date.now();
let timerInterval = null;

function startTypingTimer() {
    if(timerInterval) clearInterval(timerInterval);
    startTime = Date.now();
    timerInterval = setInterval(() => {
        let elapsed = Math.floor((Date.now() - startTime) / 1000);
        let timeSpan = document.querySelector('#typingTime strong');
        if(timeSpan) timeSpan.innerText = elapsed + 's';
    }, 1000);
}

function stopTypingTimer() {
    if(timerInterval) {
        clearInterval(timerInterval);
        timerInterval = null;
    }
}

// ========== FAQ TOGGLE (ACCORDION) ==========
function toggleFaq(element) {
    let faqItem = element.closest('.faq-item');
    if(!faqItem) return;
    
    // Close others (optional)
    let allFaqs = document.querySelectorAll('.faq-item');
    allFaqs.forEach(item => {
        if(item !== faqItem && item.classList.contains('active')) {
            item.classList.remove('active');
        }
    });
    
    faqItem.classList.toggle('active');
}

// ========== ANIMATE COUNTERS ==========
function animateCounter(element, target) {
    if(!element) return;
    
    let current = 0;
    let increment = target / 60;
    let interval = setInterval(() => {
        current += increment;
        if(current >= target) {
            element.innerText = target.toLocaleString();
            clearInterval(interval);
        } else {
            element.innerText = Math.floor(current).toLocaleString();
        }
    }, 20);
}

// ========== SCROLL REVEAL ANIMATION ==========
function initScrollReveal() {
    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('scroll-reveal');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.feature-card, .stat-card, .testimonial-card, .premium-feature').forEach(el => {
        observer.observe(el);
    });
}

// ========== NEWSLETTER SUBSCRIPTION ==========
async function subscribeNewsletter(event) {
    if(event) event.preventDefault();
    
    let emailInput = document.querySelector('#subscribeEmail, .newsletter-form input');
    if(!emailInput) return;
    
    let email = emailInput.value;
    if(!email || !email.includes('@')) {
        showToast('⚠️ කරුණාකර වලංගු ඊමේල් ලිපිනයක් ඇතුළත් කරන්න', 'warning');
        return;
    }
    
    try {
        let res = await fetch('api/subscribe.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'email=' + encodeURIComponent(email)
        });
        let data = await res.json();
        showToast(data.message || '✅ Successfully subscribed!', 'success');
        emailInput.value = '';
    } catch(e) {
        // Demo mode - just show success
        showToast('✅ Thank you for subscribing!', 'success');
        emailInput.value = '';
    }
}

// ========== LOAD HISTORY (for history page) ==========
async function loadHistory() {
    try {
        let res = await fetch('api/get_history.php');
        if(!res.ok) throw new Error('API failed');
        let data = await res.json();
        let container = document.getElementById('historyList');
        if(container) {
            if(data.length === 0) {
                container.innerHTML = '<div class="card"><p class="placeholder-text">No conversion history yet. Start typing!</p></div>';
            } else {
                container.innerHTML = data.map(item => `
                    <div class="card fade-in history-item">
                        <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap;">
                            <div style="flex:1">
                                <div><strong><i class="fas fa-keyboard"></i> Singlish:</strong> ${escapeHtml(item.singlish_text)}</div>
                                <div class="sinhala-history"><strong><i class="fas fa-sinhala"></i> සිංහල:</strong> ${escapeHtml(item.sinhala_text)}</div>
                                <small><i class="far fa-clock"></i> ${item.created_at}</small>
                            </div>
                            <button onclick="deleteHistory(${item.id})" class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                `).join('');
            }
        }
    } catch(e) {
        console.log('History API not available - demo mode');
        let container = document.getElementById('historyList');
        if(container) {
            container.innerHTML = '<div class="card"><p class="placeholder-text">⚠️ History feature requires backend setup. Log in to save your conversions.</p></div>';
        }
    }
}

function escapeHtml(str) {
    if(!str) return '';
    return str.replace(/[&<>]/g, function(m) {
        if(m === '&') return '&amp;';
        if(m === '<') return '&lt;';
        if(m === '>') return '&gt;';
        return m;
    });
}

async function deleteHistory(id) {
    if(confirm('මෙම පරිවර්තනය මකා දමන්න?')) {
        try {
            await fetch('api/delete_history.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'id=' + id
            });
            loadHistory();
            showToast('✅ History item deleted', 'success');
        } catch(e) {
            showToast('❌ Delete failed', 'error');
        }
    }
}

// ========== ANIMATE STATS COUNTERS ON VIEW ==========
function initCounters() {
    let counters = document.querySelectorAll('.counter');
    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                let target = parseInt(entry.target.getAttribute('data-target'));
                if(target && !entry.target.hasAttribute('data-animated')) {
                    animateCounter(entry.target, target);
                    entry.target.setAttribute('data-animated', 'true');
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
}

// ========== LIVE DEMO ANIMATION ==========
function initLiveDemo() {
    let demoWords = ['kohomada', 'ayubowan', 'istuti', 'mama', 'sinhalen'];
    let index = 0;
    let demoResult = document.getElementById('demoResult');
    
    if(demoResult) {
        setInterval(() => {
            let word = demoWords[index % demoWords.length];
            let converted = singlishToSinhala(word);
            demoResult.innerText = converted;
            index++;
        }, 2000);
    }
}

// ========== INITIALIZE EVERYTHING ON PAGE LOAD ==========
document.addEventListener('DOMContentLoaded', () => {
    // Converter elements
    let textarea = document.getElementById('singlishInput');
    if(textarea) {
        textarea.addEventListener('input', (e) => {
            updateCounters(e.target.value);
            convertText();
        });
        textarea.addEventListener('focus', startTypingTimer);
        textarea.addEventListener('blur', stopTypingTimer);
    }
    
    // Load history if on history page
    if(document.getElementById('historyList')) {
        loadHistory();
    }
    
    // Load saved theme
    loadSavedTheme();
    
    // Initialize counters animation
    initCounters();
    
    // Initialize scroll reveal
    initScrollReveal();
    
    // Initialize live demo
    initLiveDemo();
    
    // Add style for delete button
    const style = document.createElement('style');
    style.textContent = `
        .delete-btn {
            background: #dc2626;
            border: none;
            padding: 8px 14px;
            border-radius: 12px;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
        }
        .delete-btn:hover {
            background: #ef4444;
            transform: scale(1.05);
        }
        .sinhala-history {
            margin: 8px 0;
            font-family: 'Noto Sans Sinhala', sans-serif;
        }
        .history-item {
            transition: all 0.3s;
        }
        .history-item:hover {
            transform: translateX(5px);
        }
        .scroll-reveal {
            animation: fadeInUp 0.6s ease forwards;
        }
    `;
    document.head.appendChild(style);
    
    // Add keyboard shortcut (Ctrl+Enter to convert)
    if(textarea) {
        textarea.addEventListener('keydown', (e) => {
            if(e.ctrlKey && e.key === 'Enter') {
                e.preventDefault();
                convertText();
            }
        });
    }
    
    console.log('✅ RashSinglish JavaScript initialized successfully!');
});

// ========== EXPORT FUNCTIONS FOR GLOBAL ACCESS ==========
window.toggleMenu = toggleMenu;
window.convertText = convertText;
window.clearInput = clearInput;
window.toggleCase = toggleCase;
window.copyToClipboard = copyToClipboard;
window.downloadAsTxt = downloadAsTxt;
window.speakText = speakText;
window.startVoiceTyping = startVoiceTyping;
window.setExample = setExample;
window.toggleTheme = toggleTheme;
window.toggleFaq = toggleFaq;
window.subscribeNewsletter = subscribeNewsletter;
window.deleteHistory = deleteHistory;