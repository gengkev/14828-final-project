<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

if ($is_https) {
  header("Location: http://bank.local");
}

session_start();
?>

<!doctype html>
<html>
<head>
  <title>Bank Index</title>
</head>
<body>

<h1>
  Welcome to Your Bank&trade;
</h1>

<?php
if (isset($_SESSION['username'])) {
?>
<p>
  You are logged in as <?= htmlspecialchars($_SESSION['username']) ?>
</p>
<?php
} else {
?>
<p>
  You are not logged in
</p>
<?php
}
?>


<a href="login.php">Go to login page</a>

</body>
</html>
