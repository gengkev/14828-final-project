<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

if (!$is_https) {
  header("Location: https://bank.local");
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


<p>
<a href="https://bank.local/login.php">Login page 1 (HTTPS -> HTTPS)</a>
</p>

<p>
<a href="http://bank.local/login2.php">Login page 2 (HTTP -> HTTPS)</a>
</p>

<p>
<a href="http://bank.local/login3.php">Login page 3 (HTTP -> HTTP)</a>
</p>

<p>
<a href="https://bank.local/login4.php">Login page 4 (HTTPS -> HTTP)</a>
</p>

<p>
<a href="https://bank.local/login5.php">Login page 5 (different action on load)</a>
</p>

<p>
<a href="https://bank.local/login6.php">Login page 6 (different action on submit)</a>
</p>

<p>
<a href="https://bank.local/login7.php">Login page 7 (autocomplete off)</a>
</p>

</body>
</html>
