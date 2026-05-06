<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Login - RashSinglish</title><link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<div class="container" style="max-width:500px; margin-top:5rem;">
    <div class="card">
        <h2><i class="fas fa-sign-in-alt"></i> Login to RashSinglish</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login"><i class="fas fa-arrow-right"></i> Login</button>
        </form>
        <p>No account? <a href="register.php">Register here</a></p>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if($result->num_rows) {
        $user = $result->fetch_assoc();
        if(password_verify($pass, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: index.php");
        } else echo "<script>alert('Wrong password');</script>";
    } else echo "<script>alert('User not found');</script>";
}
?>