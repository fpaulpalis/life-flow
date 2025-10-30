<?php
session_start();
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username = ? AND is_admin = 0 LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];

            if (isset($_SESSION['redirect_after_login'])) {
                $redirectPage = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']);
                header("Location: $redirectPage");
                exit;
            } else {
                header("Location: index.php");
                exit;
            }
        } else {
            $_SESSION['login_error'] = "Invalid username or password.";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION['login_error'] = "Invalid username or password.";
        header("Location: login.php");
        exit;
    }
}
