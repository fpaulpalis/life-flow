<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include('db_connect.php');

$user_id = $_SESSION['user_id'];
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_username = trim($_POST['username']);
    $new_email    = trim($_POST['email']);
    $new_password = trim($_POST['password'] ?? ''); 


    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $new_username, $new_email, $user_id);

    if (!$stmt->execute()) {
        $error = "Error updating profile: " . $stmt->error;
    } else {
        if (!empty($new_password)) {
            $hashed = password_hash($new_password, PASSWORD_DEFAULT);
            
            $stmtPass = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmtPass->bind_param("si", $hashed, $user_id);
            if (!$stmtPass->execute()) {
                $error = "Error updating password: " . $stmtPass->error;
            }
        }
        
        if (empty($error)) {
            header("Location: profile.php?updated=1");
            exit;
        }
    }
}

$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

<nav class="navbar container">
    <div class="logo">
        <a href="index.php">
            <img src="./images/Frame 4.png" alt="Website Logo">
        </a>
    </div>
    <div class="nav-item-wrapper">
        <ul class="nav-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#BLOG">Blogs</a></li>
            <li><a href="contact.php">Need Blood</a></li>
            <li><a href="donate.php">Donate Blood</a></li>
        </ul>
    </div>
    <div class="nav-right">
        <div>
            <a href="profile.php">
                <button type="submit" class="login-btn primary-btn">Profile</button>
            </a>
        </div>
        <div>
            <a href="logout.php">
                <button type="submit" class="sign-up-btn secondary-btn">Logout</button>
            </a>
        </div>
    </div>
</nav>

<div class="container" style="max-width: 60rem; margin: 4rem auto; background: #fff; padding: 2rem; border-radius: 0.5rem;">
    <h1>Edit Profile</h1>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <form action="edit_profile.php" method="POST" style="font-size:1.4rem;">
        <div style="margin-bottom:1.5rem;">
            <label for="username" style="display:block; margin-bottom:0.5rem;">Username:</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                value="<?= htmlspecialchars($user['username']) ?>" 
                required
                style="width:100%; padding:0.5rem; font-size:1rem;"
            >
        </div>

        <div style="margin-bottom:1.5rem;">
            <label for="email" style="display:block; margin-bottom:0.5rem;">Email:</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="<?= htmlspecialchars($user['email']) ?>" 
                required
                style="width:100%; padding:0.5rem; font-size:1rem;"
            >
        </div>

        <div style="margin-bottom:1.5rem;">
            <label for="password" style="display:block; margin-bottom:0.5rem;">New Password (leave blank if no change):</label>
            <input
                type="password"
                id="password"
                name="password"
                style="width:100%; padding:0.5rem; font-size:1rem;"
            >
        </div>

        <button type="submit" style="padding:0.8rem 1.5rem; font-size:1rem; cursor:pointer;">
            Save Changes
        </button>
        <a href="profile.php" style="margin-left:1rem; font-size:1rem; text-decoration:none; color:#555;">
            Cancel
        </a>
    </form>
</div>

</body>
</html>
