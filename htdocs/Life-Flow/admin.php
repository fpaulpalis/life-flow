<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}

include('db_connect.php');

if (isset($_GET['delete_user'])) {
    $user_id = intval($_GET['delete_user']);
    $conn->query("DELETE FROM users WHERE id = $user_id");
    header("Location: admin.php");
    exit;
}

if (isset($_GET['remove_need_id'])) {
    $need_id = intval($_GET['remove_need_id']);
    $conn->query("DELETE FROM need_blood WHERE id = $need_id");
    header("Location: admin.php");
    exit;
}

if (isset($_GET['remove_donate_id'])) {
    $donate_id = intval($_GET['remove_donate_id']);
    $conn->query("DELETE FROM donate_blood WHERE id = $donate_id");
    header("Location: admin.php");
    exit;
}

$admins       = $conn->query("SELECT id, username, email FROM users WHERE is_admin=1");
$normal_users = $conn->query("SELECT id, username, email FROM users WHERE is_admin=0");

$needRequests   = $conn->query("SELECT * FROM need_blood ORDER BY created_at DESC");
$donateRequests = $conn->query("SELECT * FROM donate_blood ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./css/admin.css"> 
</head>
<body>
    <nav class="navbar container">
        <div class="logo">
            <a href="./index.php">
                <img src="./images/Frame 4.png" alt="Logo">
            </a>
        </div>
        <div class="nav-right">
            <a href="admin_register.php" class="button">Create New Admin</a>
            <a href="admin_logout.php" class="button">
                <button>Logout</button>
            </a>
        </div>
    </nav>
    
    <div class="container">
        <h1>Welcome, Admin</h1>
        
        <h2>Manage Admins</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $admins->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td>
                    <a href="admin.php?delete_user=<?= $row['id'] ?>" class="button">Remove</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <h2>Manage Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $normal_users->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td>
                    <a href="admin.php?delete_user=<?= $row['id'] ?>" class="button">Remove</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Need Blood Submissions</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Type</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $needRequests->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['blood_type']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= $row['created_at'] ?></td>
                <td>
                    <a href="admin.php?remove_need_id=<?= $row['id'] ?>" 
                       class="button"
                       onclick="return confirm('Remove this Need Blood entry?');">
                       Remove
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <h2>Donate Blood Submissions</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Weight</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Type</th>
                <th>Medical History</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $donateRequests->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
                <td><?= htmlspecialchars($row['age']) ?></td>
                <td><?= htmlspecialchars($row['weight']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['blood_type']) ?></td>
                <td><?= htmlspecialchars($row['medical_history']) ?></td>
                <td><?= $row['created_at'] ?></td>
                <td>
                    <a href="admin.php?remove_donate_id=<?= $row['id'] ?>" 
                       class="button"
                       onclick="return confirm('Remove this Donate Blood entry?');">
                       Remove
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
