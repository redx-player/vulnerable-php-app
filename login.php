<?php
require __DIR__ . '/config.php';

// Authenticate a user against the users table.
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$conn = db();
$sql = "SELECT id, username, role FROM users WHERE username = '$username' AND password = '$password'";
$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    setcookie('uid', $row['id']);
    setcookie('role', $row['role']);
    echo 'Welcome back, ' . $row['username'];
} else {
    echo 'Invalid username or password';
}
?>
<form method="post">
  <input name="username" placeholder="username">
  <input name="password" type="password" placeholder="password">
  <button type="submit">Sign in</button>
</form>
