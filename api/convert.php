<?php
header('Content-Type: application/json');
session_start();

function singlishToSinhala($text) {
    // ===== 1. COMPLETE PHRASES (LONGEST FIRST) =====
    $phrases = [
        'rata dakwanna ayith waradak na' => 'රට දක්වන්න ආයිත් වරදක් නෑ',
        'mama sinhalen kiyanawa' => 'මම සිංහලෙන් කියනවා',
        'api sinhalen karanawa' => 'අපි සිංහලෙන් කරනවා',
        'ayubowan' => 'ආයුබෝවන්',
        'kohomada' => 'කොහොමද',
        'istuti' => 'ඉස්තුති',
    ];
    
    // ===== 2. COMMON WORDS =====
    $words = [
        'amma' => 'අම්මා', 'appa' => 'අප්පා', 'nangi' => 'නංගි', 'aiya' => 'අයියා',
        'akka' => 'අක්කා', 'malli' => 'මල්ලි', 'mama' => 'මම', 'api' => 'අපි',
        'oya' => 'ඔයා', 'oyata' => 'ඔයාට', 'mata' => 'මට', 'naha' => 'නැහැ',
        'hodai' => 'හොඳයි', 'sinhalen' => 'සිංහලෙන්', 'kiyanawa' => 'කියනවා',
        'karanawa' => 'කරනවා', 'dakwanna' => 'දක්වන්න', 'ayith' => 'ආයිත්',
        'waradak' => 'වරදක්', 'rata' => 'රට', 'na' => 'නෑ'
    ];
    
    // ===== 3. COMPLETE KA SERIES (කාණ්ඩය) =====
    $ka_series = [
        'k' => 'ක්', 'ka' => 'ක', 'kaa' => 'කා', 'kā' => 'කා', 'kA' => 'කැ', 'kAE' => 'කෑ',
        'ki' => 'කි', 'kI' => 'කී', 'kii' => 'කී', 'ku' => 'කු', 'kU' => 'කූ', 'kuu' => 'කූ',
        'ke' => 'කෙ', 'kE' => 'කේ', 'kee' => 'කේ', 'ko' => 'කො', 'kO' => 'කෝ', 'koo' => 'කෝ',
        'kau' => 'කෞ'
    ];
    
    // ===== 4. COMPLETE GA SERIES (ගාණ්ඩය) =====
    $ga_series = [
        'g' => 'ග්', 'ga' => 'ග', 'gaa' => 'ගා', 'gā' => 'ගා', 'gA' => 'ගැ', 'gAE' => 'ගෑ',
        'gi' => 'ගි', 'gI' => 'ගී', 'gii' => 'ගී', 'gu' => 'ගු', 'gU' => 'ගූ', 'guu' => 'ගූ',
        'ge' => 'ගෙ', 'gE' => 'ගේ', 'gee' => 'ගේ', 'go' => 'ගො', 'gO' => 'ගෝ', 'goo' => 'ගෝ',
        'gau' => 'ගෞ'
    ];
    
    // ===== 5. COMPLETE CA SERIES (චාණ්ඩය) =====
    $ca_series = [
        'c' => 'ච්', 'ca' => 'ච', 'caa' => 'චා', 'cā' => 'චා', 'cA' => 'චැ', 'cAE' => 'චෑ',
        'ci' => 'චි', 'cI' => 'චී', 'cii' => 'චී', 'cu' => 'චු', 'cU' => 'චූ', 'cuu' => 'චූ',
        'ce' => 'චෙ', 'cE' => 'චේ', 'cee' => 'චේ', 'co' => 'චො', 'cO' => 'චෝ', 'coo' => 'චෝ'
    ];
    
    // ===== 6. COMPLETE JA SERIES (ජාණ්ඩය) =====
    $ja_series = [
        'j' => 'ජ්', 'ja' => 'ජ', 'jaa' => 'ජා', 'jā' => 'ජා', 'jA' => 'ජැ', 'jAE' => 'ජෑ',
        'ji' => 'ජි', 'jI' => 'ජී', 'jii' => 'ජී', 'ju' => 'ජු', 'jU' => 'ජූ', 'juu' => 'ජූ',
        'je' => 'ජෙ', 'jE' => 'ජේ', 'jee' => 'ජේ', 'jo' => 'ජො', 'jO' => 'ජෝ', 'joo' => 'ජෝ'
    ];
    
    // ===== 7. COMPLETE TA SERIES (ටාණ්ඩය) =====
    $ta_series = [
        't' => 'ට්', 'ta' => 'ට', 'taa' => 'ටා', 'tā' => 'ටා', 'tA' => 'ටැ', 'tAE' => 'ටෑ',
        'ti' => 'ටි', 'tI' => 'ටී', 'tii' => 'ටී', 'tu' => 'ටු', 'tU' => 'ටූ', 'tuu' => 'ටූ',
        'te' => 'ටෙ', 'tE' => 'ටේ', 'tee' => 'ටේ', 'to' => 'ටො', 'tO' => 'ටෝ', 'too' => 'ටෝ'
    ];
    
    // ===== 8. COMPLETE DA SERIES (ඩාණ්ඩය) =====
    $da_series = [
        'd' => 'ඩ්', 'da' => 'ඩ', 'daa' => 'ඩා', 'dā' => 'ඩා', 'dA' => 'ඩැ', 'dAE' => 'ඩෑ',
        'di' => 'ඩි', 'dI' => 'ඩී', 'dii' => 'ඩී', 'du' => 'ඩු', 'dU' => 'ඩූ', 'duu' => 'ඩූ',
        'de' => 'ඩෙ', 'dE' => 'ඩේ', 'dee' => 'ඩේ', 'do' => 'ඩො', 'dO' => 'ඩෝ', 'doo' => 'ඩෝ'
    ];
    
    // ===== 9. COMPLETE NA SERIES (නාණ්ඩය) =====
    $na_series = [
        'n' => 'න්', 'na' => 'න', 'naa' => 'නා', 'nā' => 'නා', 'nA' => 'නැ', 'nAE' => 'නෑ',
        'ni' => 'නි', 'nI' => 'නී', 'nii' => 'නී', 'nu' => 'නු', 'nU' => 'නූ', 'nuu' => 'නූ',
        'ne' => 'නෙ', 'nE' => 'නේ', 'nee' => 'නේ', 'no' => 'නො', 'nO' => 'නෝ', 'noo' => 'නෝ'
    ];
    
    // ===== 10. COMPLETE PA SERIES (පාණ්ඩය) =====
    $pa_series = [
        'p' => 'ප්', 'pa' => 'ප', 'paa' => 'පා', 'pā' => 'පා', 'pA' => 'පැ', 'pAE' => 'පෑ',
        'pi' => 'පි', 'pI' => 'පී', 'pii' => 'පී', 'pu' => 'පු', 'pU' => 'පූ', 'puu' => 'පූ',
        'pe' => 'පෙ', 'pE' => 'පේ', 'pee' => 'පේ', 'po' => 'පො', 'pO' => 'පෝ', 'poo' => 'පෝ'
    ];
    
    // ===== 11. COMPLETE BA SERIES (බාණ්ඩය) =====
    $ba_series = [
        'b' => 'බ්', 'ba' => 'බ', 'baa' => 'බා', 'bā' => 'බා', 'bA' => 'බැ', 'bAE' => 'බෑ',
        'bi' => 'බි', 'bI' => 'බී', 'bii' => 'බී', 'bu' => 'බු', 'bU' => 'බූ', 'buu' => 'බූ',
        'be' => 'බෙ', 'bE' => 'බේ', 'bee' => 'බේ', 'bo' => 'බො', 'bO' => 'බෝ', 'boo' => 'බෝ'
    ];
    
    // ===== 12. COMPLETE MA SERIES (මාණ්ඩය) =====
    $ma_series = [
        'm' => 'ම්', 'ma' => 'ම', 'maa' => 'මා', 'mā' => 'මා', 'mA' => 'මැ', 'mAE' => 'මෑ',
        'mi' => 'මි', 'mI' => 'මී', 'mii' => 'මී', 'mu' => 'මු', 'mU' => 'මූ', 'muu' => 'මූ',
        'me' => 'මෙ', 'mE' => 'මේ', 'mee' => 'මේ', 'mo' => 'මො', 'mO' => 'මෝ', 'moo' => 'මෝ'
    ];
    
    // ===== 13. COMPLETE YA SERIES (යාණ්ඩය) =====
    $ya_series = [
        'y' => 'ය්', 'ya' => 'ය', 'yaa' => 'යා', 'yā' => 'යා', 'yA' => 'යැ', 'yAE' => 'යෑ',
        'yi' => 'යි', 'yI' => 'යී', 'yii' => 'යී', 'yu' => 'යු', 'yU' => 'යූ', 'yuu' => 'යූ',
        'ye' => 'යෙ', 'yE' => 'යේ', 'yee' => 'යේ', 'yo' => 'යො', 'yO' => 'යෝ', 'yoo' => 'යෝ'
    ];
    
    // ===== 14. COMPLETE RA SERIES (රාණ්ඩය) =====
    $ra_series = [
        'r' => 'ර්', 'ra' => 'ර', 'raa' => 'රා', 'rā' => 'රා', 'rA' => 'රැ', 'rAE' => 'රෑ',
        'ri' => 'රි', 'rI' => 'රී', 'rii' => 'රී', 'ru' => 'රු', 'rU' => 'රූ', 'ruu' => 'රූ',
        're' => 'රෙ', 'rE' => 'රේ', 'ree' => 'රේ', 'ro' => 'රො', 'rO' => 'රෝ', 'roo' => 'රෝ'
    ];
    
    // ===== 15. COMPLETE LA SERIES (ලාණ්ඩය) =====
    $la_series = [
        'l' => 'ල්', 'la' => 'ල', 'laa' => 'ලා', 'lā' => 'ලා', 'lA' => 'ලැ', 'lAE' => 'ලෑ',
        'li' => 'ලි', 'lI' => 'ලී', 'lii' => 'ලී', 'lu' => 'ලු', 'lU' => 'ලූ', 'luu' => 'ලූ',
        'le' => 'ලෙ', 'lE' => 'ලේ', 'lee' => 'ලේ', 'lo' => 'ලො', 'lO' => 'ලෝ', 'loo' => 'ලෝ'
    ];
    
    // ===== 16. COMPLETE VA SERIES (වාණ්ඩය) =====
    $va_series = [
        'v' => 'ව්', 'va' => 'ව', 'vaa' => 'වා', 'vā' => 'වා', 'vA' => 'වැ', 'vAE' => 'වෑ',
        'vi' => 'වි', 'vI' => 'වී', 'vii' => 'වී', 'vu' => 'වු', 'vU' => 'වූ', 'vuu' => 'වූ',
        've' => 'වෙ', 'vE' => 'වේ', 'vee' => 'වේ', 'vo' => 'වො', 'vO' => 'වෝ', 'voo' => 'වෝ'
    ];
    
    // ===== 17. COMPLETE SA SERIES (සාණ්ඩය) =====
    $sa_series = [
        's' => 'ස්', 'sa' => 'ස', 'saa' => 'සා', 'sā' => 'සා', 'sA' => 'සැ', 'sAE' => 'සෑ',
        'si' => 'සි', 'sI' => 'සී', 'sii' => 'සී', 'su' => 'සු', 'sU' => 'සූ', 'suu' => 'සූ',
        'se' => 'සෙ', 'sE' => 'සේ', 'see' => 'සේ', 'so' => 'සො', 'sO' => 'සෝ', 'soo' => 'සෝ'
    ];
    
    // ===== 18. COMPLETE HA SERIES (හාණ්ඩය) =====
    $ha_series = [
        'h' => 'හ්', 'ha' => 'හ', 'haa' => 'හා', 'hā' => 'හා', 'hA' => 'හැ', 'hAE' => 'හෑ',
        'hi' => 'හි', 'hI' => 'හී', 'hii' => 'හී', 'hu' => 'හු', 'hU' => 'හූ', 'huu' => 'හූ',
        'he' => 'හෙ', 'hE' => 'හේ', 'hee' => 'හේ', 'ho' => 'හො', 'hO' => 'හෝ', 'hoo' => 'හෝ'
    ];
    
    // ===== 19. SPECIAL CHARACTERS =====
    $special = [
        'sha' => 'ශ', 'shaa' => 'ෂ', 'fa' => 'ෆ', 'nya' => 'ඤ', 'gna' => 'ඥ',
        'kya' => 'ක්‍ය', 'kra' => 'ක්‍ර', 'gya' => 'ග්‍ය', 'gra' => 'ග්‍ර',
        'dnya' => 'ඥ'
    ];
    
    // ===== 20. VOWELS (ස්වර) =====
    $vowels = [
        'a' => 'අ', 'aa' => 'ආ', 'ae' => 'ඇ', 'aae' => 'ඈ',
        'i' => 'ඉ', 'ii' => 'ඊ', 'u' => 'උ', 'uu' => 'ඌ',
        'e' => 'එ', 'ee' => 'ඒ', 'o' => 'ඔ', 'oo' => 'ඕ', 'ou' => 'ඖ'
    ];
    
    // ===== 21. PUNCTUATION & SPACES =====
    $punctuation = [
        ' ' => ' ', '.' => '.', ',' => ',', '?' => '?', '!' => '!',
        ';' => ';', ':' => ':', '"' => '"', "'" => "'", '(' => '(',
        ')' => ')', '[' => '[', ']' => ']', '{' => '{', '}' => '}'
    ];
    
    // ===== MERGE ALL MAPPINGS =====
    $map = array_merge(
        $phrases, $words,
        $ka_series, $ga_series, $ca_series, $ja_series,
        $ta_series, $da_series, $na_series, $pa_series,
        $ba_series, $ma_series, $ya_series, $ra_series,
        $la_series, $va_series, $sa_series, $ha_series,
        $special, $vowels, $punctuation
    );
    
    // ===== SORT KEYS BY LENGTH (LONGEST FIRST) =====
    $keys = array_keys($map);
    usort($keys, function($a, $b) {
        return strlen($b) - strlen($a);
    });
    
    // ===== APPLY CONVERSION =====
    $result = $text;
    foreach ($keys as $eng) {
        $result = str_replace($eng, $map[$eng], $result);
    }
    
    return $result;
}

// ===== MAIN REQUEST HANDLER (NO DATABASE) =====
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    $singlish = $_POST['singlish'] ?? '';
    $sinhala = singlishToSinhala($singlish);
    
    // DATABASE CODE REMOVED - Only conversion
    echo json_encode(["sinhala" => $sinhala]);
    exit;
}
?>