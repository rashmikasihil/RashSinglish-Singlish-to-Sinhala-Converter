// ========== MOBILE MENU TOGGLE ==========
function toggleMenu() {
    let navLinks = document.querySelector('.nav-links');
    if(navLinks) navLinks.classList.toggle('active');
}

// ========== SINGLISH TO SINHALA CONVERSION ==========
// Complete mapping dictionary (matches convert.php exactly)
const sinhalaMap = {
    // ===== COMPLETE PHRASES =====
    'rata dakwanna ayith waradak na': 'රට දක්වන්න ආයිත් වරදක් නෑ',
    'mama sinhalen kiyanawa': 'මම සිංහලෙන් කියනවා',
    'api sinhalen karanawa': 'අපි සිංහලෙන් කරනවා',
    'ayubowan': 'ආයුබෝවන්',
    'kohomada': 'කොහොමද',
    'istuti': 'ඉස්තුති',
    
    // ===== COMMON WORDS =====
    'amma': 'අම්මා', 'appa': 'අප්පා', 'nangi': 'නංගි', 'aiya': 'අයියා',
    'akka': 'අක්කා', 'malli': 'මල්ලි', 'mama': 'මම', 'api': 'අපි',
    'oya': 'ඔයා', 'oyata': 'ඔයාට', 'mata': 'මට', 'naha': 'නැහැ',
    'hodai': 'හොඳයි', 'sinhalen': 'සිංහලෙන්', 'kiyanawa': 'කියනවා',
    'karanawa': 'කරනවා', 'dakwanna': 'දක්වන්න', 'ayith': 'ආයිත්',
    'waradak': 'වරදක්', 'rata': 'රට', 'na': 'නෑ',
    
    // ===== KA SERIES (කාණ්ඩය) =====
    'ka': 'ක', 'kaa': 'කා', 'kā': 'කා', 'kA': 'කැ', 'kAE': 'කෑ',
    'ki': 'කි', 'kI': 'කී', 'kii': 'කී', 'ku': 'කු', 'kU': 'කූ', 'kuu': 'කූ',
    'ke': 'කෙ', 'kE': 'කේ', 'kee': 'කේ', 'ko': 'කො', 'kO': 'කෝ', 'koo': 'කෝ',
    'kau': 'කෞ', 'k': 'ක්',
    
    // ===== GA SERIES (ගාණ්ඩය) =====
    'ga': 'ග', 'gaa': 'ගා', 'gā': 'ගා', 'gA': 'ගැ', 'gAE': 'ගෑ',
    'gi': 'ගි', 'gI': 'ගී', 'gii': 'ගී', 'gu': 'ගු', 'gU': 'ගූ', 'guu': 'ගූ',
    'ge': 'ගෙ', 'gE': 'ගේ', 'gee': 'ගේ', 'go': 'ගො', 'gO': 'ගෝ', 'goo': 'ගෝ',
    'gau': 'ගෞ', 'g': 'ග්',
    
    // ===== CA SERIES (චාණ්ඩය) =====
    'ca': 'ච', 'caa': 'චා', 'cā': 'චා', 'cA': 'චැ', 'cAE': 'චෑ',
    'ci': 'චි', 'cI': 'චී', 'cii': 'චී', 'cu': 'චු', 'cU': 'චූ', 'cuu': 'චූ',
    'ce': 'චෙ', 'cE': 'චේ', 'cee': 'චේ', 'co': 'චො', 'cO': 'චෝ', 'coo': 'චෝ',
    'c': 'ච්',
    
    // ===== JA SERIES (ජාණ්ඩය) =====
    'ja': 'ජ', 'jaa': 'ජා', 'jā': 'ජා', 'jA': 'ජැ', 'jAE': 'ජෑ',
    'ji': 'ජි', 'jI': 'ජී', 'jii': 'ජී', 'ju': 'ජු', 'jU': 'ජූ', 'juu': 'ජූ',
    'je': 'ජෙ', 'jE': 'ජේ', 'jee': 'ජේ', 'jo': 'ජො', 'jO': 'ජෝ', 'joo': 'ජෝ',
    'j': 'ජ්',
    
    // ===== TA SERIES (ටාණ්ඩය) =====
    'ta': 'ට', 'taa': 'ටා', 'tā': 'ටා', 'tA': 'ටැ', 'tAE': 'ටෑ',
    'ti': 'ටි', 'tI': 'ටී', 'tii': 'ටී', 'tu': 'ටු', 'tU': 'ටූ', 'tuu': 'ටූ',
    'te': 'ටෙ', 'tE': 'ටේ', 'tee': 'ටේ', 'to': 'ටො', 'tO': 'ටෝ', 'too': 'ටෝ',
    't': 'ට්',
    
    // ===== DA SERIES (ඩාණ්ඩය) =====
    'da': 'ඩ', 'daa': 'ඩා', 'dā': 'ඩා', 'dA': 'ඩැ', 'dAE': 'ඩෑ',
    'di': 'ඩි', 'dI': 'ඩී', 'dii': 'ඩී', 'du': 'ඩු', 'dU': 'ඩූ', 'duu': 'ඩූ',
    'de': 'ඩෙ', 'dE': 'ඩේ', 'dee': 'ඩේ', 'do': 'ඩො', 'dO': 'ඩෝ', 'doo': 'ඩෝ',
    'd': 'ඩ්',
    
    // ===== NA SERIES (නාණ්ඩය) =====
    'na': 'න', 'naa': 'නා', 'nā': 'නා', 'nA': 'නැ', 'nAE': 'නෑ',
    'ni': 'නි', 'nI': 'නී', 'nii': 'නී', 'nu': 'නු', 'nU': 'නූ', 'nuu': 'නූ',
    'ne': 'නෙ', 'nE': 'නේ', 'nee': 'නේ', 'no': 'නො', 'nO': 'නෝ', 'noo': 'නෝ',
    'n': 'න්',
    
    // ===== PA SERIES (පාණ්ඩය) =====
    'pa': 'ප', 'paa': 'පා', 'pā': 'පා', 'pA': 'පැ', 'pAE': 'පෑ',
    'pi': 'පි', 'pI': 'පී', 'pii': 'පී', 'pu': 'පු', 'pU': 'පූ', 'puu': 'පූ',
    'pe': 'පෙ', 'pE': 'පේ', 'pee': 'පේ', 'po': 'පො', 'pO': 'පෝ', 'poo': 'පෝ',
    'p': 'ප්',
    
    // ===== BA SERIES (බාණ්ඩය) =====
    'ba': 'බ', 'baa': 'බා', 'bā': 'බා', 'bA': 'බැ', 'bAE': 'බෑ',
    'bi': 'බි', 'bI': 'බී', 'bii': 'බී', 'bu': 'බු', 'bU': 'බූ', 'buu': 'බූ',
    'be': 'බෙ', 'bE': 'බේ', 'bee': 'බේ', 'bo': 'බො', 'bO': 'බෝ', 'boo': 'බෝ',
    'b': 'බ්',
    
    // ===== MA SERIES (මාණ්ඩය) =====
    'ma': 'ම', 'maa': 'මා', 'mā': 'මා', 'mA': 'මැ', 'mAE': 'මෑ',
    'mi': 'මි', 'mI': 'මී', 'mii': 'මී', 'mu': 'මු', 'mU': 'මූ', 'muu': 'මූ',
    'me': 'මෙ', 'mE': 'මේ', 'mee': 'මේ', 'mo': 'මො', 'mO': 'මෝ', 'moo': 'මෝ',
    'm': 'ම්',
    
    // ===== YA SERIES (යාණ්ඩය) =====
    'ya': 'ය', 'yaa': 'යා', 'yā': 'යා', 'yA': 'යැ', 'yAE': 'යෑ',
    'yi': 'යි', 'yI': 'යී', 'yii': 'යී', 'yu': 'යු', 'yU': 'යූ', 'yuu': 'යූ',
    'ye': 'යෙ', 'yE': 'යේ', 'yee': 'යේ', 'yo': 'යො', 'yO': 'යෝ', 'yoo': 'යෝ',
    'y': 'ය්',
    
    // ===== RA SERIES (රාණ්ඩය) =====
    'ra': 'ර', 'raa': 'රා', 'rā': 'රා', 'rA': 'රැ', 'rAE': 'රෑ',
    'ri': 'රි', 'rI': 'රී', 'rii': 'රී', 'ru': 'රු', 'rU': 'රූ', 'ruu': 'රූ',
    're': 'රෙ', 'rE': 'රේ', 'ree': 'රේ', 'ro': 'රො', 'rO': 'රෝ', 'roo': 'රෝ',
    'r': 'ර්',
    
    // ===== LA SERIES (ලාණ්ඩය) =====
    'la': 'ල', 'laa': 'ලා', 'lā': 'ලා', 'lA': 'ලැ', 'lAE': 'ලෑ',
    'li': 'ලි', 'lI': 'ලී', 'lii': 'ලී', 'lu': 'ලු', 'lU': 'ලූ', 'luu': 'ලූ',
    'le': 'ලෙ', 'lE': 'ලේ', 'lee': 'ලේ', 'lo': 'ලො', 'lO': 'ලෝ', 'loo': 'ලෝ',
    'l': 'ල්',
    
    // ===== VA SERIES (වාණ්ඩය) =====
    'va': 'ව', 'vaa': 'වා', 'vā': 'වා', 'vA': 'වැ', 'vAE': 'වෑ',
    'vi': 'වි', 'vI': 'වී', 'vii': 'වී', 'vu': 'වු', 'vU': 'වූ', 'vuu': 'වූ',
    've': 'වෙ', 'vE': 'වේ', 'vee': 'වේ', 'vo': 'වො', 'vO': 'වෝ', 'voo': 'වෝ',
    'v': 'ව්',
    
    // ===== SA SERIES (සාණ්ඩය) =====
    'sa': 'ස', 'saa': 'සා', 'sā': 'සා', 'sA': 'සැ', 'sAE': 'සෑ',
    'si': 'සි', 'sI': 'සී', 'sii': 'සී', 'su': 'සු', 'sU': 'සූ', 'suu': 'සූ',
    'se': 'සෙ', 'sE': 'සේ', 'see': 'සේ', 'so': 'සො', 'sO': 'සෝ', 'soo': 'සෝ',
    's': 'ස්',
    
    // ===== HA SERIES (හාණ්ඩය) =====
    'ha': 'හ', 'haa': 'හා', 'hā': 'හා', 'hA': 'හැ', 'hAE': 'හෑ',
    'hi': 'හි', 'hI': 'හී', 'hii': 'හී', 'hu': 'හු', 'hU': 'හූ', 'huu': 'හූ',
    'he': 'හෙ', 'hE': 'හේ', 'hee': 'හේ', 'ho': 'හො', 'hO': 'හෝ', 'hoo': 'හෝ',
    'h': 'හ්',
    
    // ===== SPECIAL CHARACTERS =====
    'sha': 'ශ', 'shaa': 'ෂ', 'fa': 'ෆ', 'nya': 'ඤ', 'gna': 'ඥ',
    'kya': 'ක්‍ය', 'kra': 'ක්‍ර', 'gya': 'ග්‍ය', 'gra': 'ග්‍ර',
    'dnya': 'ඥ',
    
    // ===== VOWELS (ස්වර) =====
    'a': 'අ', 'aa': 'ආ', 'ae': 'ඇ', 'aae': 'ඈ',
    'i': 'ඉ', 'ii': 'ඊ', 'u': 'උ', 'uu': 'ඌ',
    'e': 'එ', 'ee': 'ඒ', 'o': 'ඔ', 'oo': 'ඕ', 'ou': 'ඖ',
    
    // ===== PUNCTUATION & SPACES =====
    ' ': ' ', '.': '.', ',': ',', '?': '?', '!': '!',
    ';': ';', ':': ':', '"': '"', "'": "'", '(': '(',
    ')': ')', '[': '[', ']': ']', '{': '{', '}': '}'
};

function singlishToSinhala(text) {
    if(!text) return '';
    let result = text;
    
    // Sort by length (longest first) to avoid partial matches
    let sortedKeys = Object.keys(sinhalaMap).sort((a, b) => b.length - a.length);
    
    for(let eng of sortedKeys) {
        let regex = new RegExp(eng, 'gi');
        result = result.replace(regex, sinhalaMap[eng]);
    }
    
    return result;
}

// Main conversion function
async function convertText() {
    let input = document.getElementById('singlishInput');
    let output = document.getElementById('sinhalaOutput');
    let loading = document.getElementById('loading');
    
    if(!input || !output) return;
    
    let text = input.value.trim();
    
    if(!text) {
        output.innerHTML = '<span class="placeholder-text"><i class="fas fa-exclamation-triangle"></i> කරුණාකර යමක් ටයිප් කරන්න</span>';
        updateCounters('');
        return;
    }
    
    if(loading) loading.style.display = 'flex';
    
    try {
        let res = await fetch('api/convert.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'singlish=' + encodeURIComponent(text)
        });
        
        if(res.ok) {
            let data = await res.json();
            output.innerHTML = data.sinhala;
            
            // --- TRIAL SYSTEM: Increment trial count after successful conversion ---
            let trialRes = await fetch('api/trial.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            let trialData = await trialRes.json();
            
            // Update trial warning display
            let trialCountElement = document.querySelector('.trial-count');
            if(trialCountElement && trialData.trials_left !== undefined) {
                trialCountElement.innerText = trialData.trials_left;
            }
            
            // Check if trials finished and user not logged in
            if(trialData.trials_left === 0 && !trialData.is_logged_in) {
                output.innerHTML = '<span class="placeholder-text"><i class="fas fa-exclamation-triangle"></i> ඔබගේ නොමිලේ අත්හදා බැලීම් 3ම අවසන්! පිවිසෙන්න...</span>';
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 2000);
            }
        } else {
            throw new Error('API failed');
        }
    } catch(e) {
        // Fallback to local conversion
        let sinhalaText = singlishToSinhala(text);
        output.innerHTML = sinhalaText;
    }
    
    if(loading) loading.style.display = 'none';
    updateCounters(text);
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
            speechSynthesis.cancel();
            
            let utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'si-LK';
            utterance.rate = 0.9;
            utterance.pitch = 1;
            
            let voices = speechSynthesis.getVoices();
            let sinhalaVoice = voices.find(voice => voice.lang.includes('si'));
            if(sinhalaVoice) utterance.voice = sinhalaVoice;
            
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
    let existingToast = document.querySelector('.custom-toast');
    if(existingToast) existingToast.remove();
    
    let toast = document.createElement('div');
    toast.className = `custom-toast toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle'}"></i>
            <span>${message}</span>
        </div>
    `;
    
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
    
    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// Add animation styles for toast
const toastStyles = document.createElement('style');
toastStyles.textContent = `
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOutRight {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
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
    let textarea = document.getElementById('singlishInput');
    if(textarea) {
        textarea.addEventListener('input', (e) => {
            updateCounters(e.target.value);
            convertText();
        });
        textarea.addEventListener('focus', startTypingTimer);
        textarea.addEventListener('blur', stopTypingTimer);
    }
    
    if(document.getElementById('historyList')) {
        loadHistory();
    }
    
    loadSavedTheme();
    initCounters();
    initScrollReveal();
    initLiveDemo();
    
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