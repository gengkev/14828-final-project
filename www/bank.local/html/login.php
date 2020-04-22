<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

if ($is_https) {
  die('login page must be over http');
}

session_start();
?>

<!doctype html>
<html>
<head>
  <title>Bank Login</title>
</head>
<body>

<h1>
  Log into Your Bank&trade;
</h1>

<form action="https://bank.local/do_login.php" method="POST">
  <fieldset>
    <legend>Login</legend>
    <label>
      Username:
      <input type="text" name="username">
    </label>
    <br>
    <label>
      Password:
      <input type="password" name="password">
    </label>
    <br>
    <input type="submit">
  </fieldset>
</form>

</body>
</html>
