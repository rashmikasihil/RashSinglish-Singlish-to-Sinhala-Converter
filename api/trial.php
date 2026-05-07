<?php
session_start();
header('Content-Type: application/json');

// Initialize trial count if not exists
if(!isset($_SESSION['trial_count'])) {
    $_SESSION['trial_count'] = 0;
}

// Only increment if user is NOT logged in
if(!isset($_SESSION['user_id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['trial_count']++;
}

// Return current trial status
echo json_encode([
    'trials_used' => $_SESSION['trial_count'],
    'trials_left' => max(0, 3 - $_SESSION['trial_count']),
    'is_logged_in' => isset($_SESSION['user_id'])
]);
?>