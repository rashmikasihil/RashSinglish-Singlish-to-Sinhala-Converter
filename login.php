<?php
// Start session
session_start();

// Database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'rash_singlish';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

$error = '';
$success = '';

// Handle login
if(isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    if(empty($email) || empty($password)) {
        $error = "Please enter email and password";
    } else {
        $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['trial_count'] = 0;
                
                // Redirect to index.php
                header("Location: index.php");
                exit();
            } else {
                $error = "Wrong password!";
            }
        } else {
            $error = "User not found!";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RashSinglish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #0f172a 100%);
            color: #e0e0e0;
            min-height: 100vh;
        }
        
        .page-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .auth-card {
            background: linear-gradient(145deg, #121212, #0d0d0d);
            border-radius: 32px;
            padding: 2.5rem;
            max-width: 450px;
            width: 100%;
            border: 1px solid rgba(30, 136, 229, 0.2);
            transition: all 0.3s;
            animation: fadeInUp 0.6s ease;
        }
        
        .auth-card:hover {
            border-color: #1e88e5;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        
        .auth-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(30, 136, 229, 0.15), rgba(30, 136, 229, 0.05));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            border: 1px solid rgba(30, 136, 229, 0.3);
        }
        
        .auth-icon i {
            font-size: 2.5rem;
            color: #1e88e5;
        }
        
        .auth-card h2 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #ffffff, #1e88e5);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .auth-subtitle {
            text-align: center;
            color: #94a3b8;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }
        
        .form-group {
            margin-bottom: 1.2rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 1rem;
            background: #1a1a1a;
            border: 2px solid #2a2a2a;
            border-radius: 16px;
            color: #ffffff;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #1e88e5;
            box-shadow: 0 0 10px rgba(30, 136, 229, 0.3);
        }
        
        .form-group input::placeholder {
            color: #666;
        }
        
        .auth-btn {
            background: linear-gradient(135deg, #1e88e5, #1565c0);
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 0.5rem;
        }
        
        .auth-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(30, 136, 229, 0.4);
            background: linear-gradient(135deg, #42a5f5, #1e88e5);
        }
        
        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid #2a2a2a;
            color: #94a3b8;
        }
        
        .auth-footer a {
            color: #1e88e5;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .auth-footer a:hover {
            color: #42a5f5;
            text-decoration: underline;
        }
        
        .message-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid #ef4444;
            padding: 0.8rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            color: #ef4444;
            text-align: center;
            font-size: 0.85rem;
        }
        
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
        
        @media (max-width: 480px) {
            .auth-card {
                padding: 1.5rem;
            }
            .auth-card h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<div class="page-container">
    <div class="auth-card">
        <div class="auth-icon">
            <i class="fas fa-sign-in-alt"></i>
        </div>
        <h2>Welcome Back</h2>
        <p class="auth-subtitle">Login to your RashSinglish account</p>
        
        <?php if($error): ?>
            <div class="message-error"><i class="fas fa-exclamation-circle"></i> <?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="auth-btn">
                <i class="fas fa-arrow-right"></i> Login
            </button>
        </form>
        
        <div class="auth-footer">
            <p>Don't have an account? <a href="register.php">Create Account</a></p>
        </div>
    </div>
</div>
</body>
</html>