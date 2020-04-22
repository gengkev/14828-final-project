<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

if (!$is_https) {
  http_response_code(400);
  die('do_login.php must be over https');
}

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  die('do_login.php must be POST request');
}

$correct = $_POST['password'] === 'abcdef';
if ($correct) {
  header("Location: http://bank.local/");
  $_SESSION['username'] = $_POST['username'];
} else {
  http_response_code(401);
}
?>

<!doctype html>
<html>
<head>
  <title>Bank Login</title>
</head>
<body>

<?php
  if ($correct) {
?>
<h1>Login is correct</h1>
<?php
  } else {
?>
<h1>Login is invalid</h1>
<?php
  }
?>

<p>
  Log into Your Bank&trade;
</p>

<p>
  Received username: <?= htmlspecialchars( $_POST['username'] ); ?>
</p>

<p>
  Received password: <?= htmlspecialchars( $_POST['password'] ); ?>
</p>

</body>
</html>
