<?php include 'config/database.php'; include 'includes/header.php'; include 'includes/navbar.php'; 
if(!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; } ?>
<div class="container">
    <h1 class="section-title"><i class="fas fa-history"></i> Your Conversion History</h1>
    <div id="historyList"></div>
</div>
<?php include 'includes/footer.php'; ?>