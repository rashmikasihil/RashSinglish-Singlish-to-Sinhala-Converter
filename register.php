<?php include 'config/database.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - RashSinglish</title>
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
        
        .error-message {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid #ef4444;
            padding: 0.8rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            color: #ef4444;
            text-align: center;
            font-size: 0.85rem;
        }
        
        .success-message {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid #10b981;
            padding: 0.8rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            color: #10b981;
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
            <i class="fas fa-user-plus"></i>
        </div>
        <h2>Create Account</h2>
        <p class="auth-subtitle">Join RashSinglish for free</p>
        
        <?php if(isset($error)): ?>
            <div class="error-message"><i class="fas fa-exclamation-circle"></i> <?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if(isset($success)): ?>
            <div class="success-message"><i class="fas fa-check-circle"></i> <?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" name="register" class="auth-btn">
                <i class="fas fa-check"></i> Register
            </button>
        </form>
        
        <div class="auth-footer">
            <p>Already have an account? <a href="login.php">Login Here</a></p>
            <p style="margin-top: 0.5rem; font-size: 0.7rem; color: #666;">
                <i class="fas fa-lock"></i> Your data is safe and secure
            </p>
        </div>
    </div>
</div>

<?php
if(isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validation
    if(empty($name) || empty($email) || empty($password)) {
        echo '<script>alert("❌ Please fill all fields");</script>';
    } elseif($password !== $confirm_password) {
        echo '<script>alert("❌ Passwords do not match");</script>';
    } elseif(strlen($password) < 6) {
        echo '<script>alert("❌ Password must be at least 6 characters");</script>';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("❌ Please enter a valid email address");</script>';
    } else {
        // Check if email already exists
        $check = $conn->query("SELECT id FROM users WHERE email='$email'");
        if($check && $check->num_rows > 0) {
            echo '<script>alert("❌ Email already registered. Please login.");</script>';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashed_password);
            
            if($stmt->execute()) {
                echo '<script>alert("✅ Registration successful! Please login."); window.location.href="login.php";</script>';
            } else {
                echo '<script>alert("❌ Registration failed. Please try again.");</script>';
            }
            $stmt->close();
        }
    }
}
?>
</body>
</html>