<?php include 'config/database.php';
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')");
    header("Location: login.php");
}
?>
<!-- Similar form as login with name, email, password -->