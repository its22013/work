<?php
function getToken() {
  $s = file_get_contents('/dev/urandom', false, NULL, 0, 24);
  return base64_encode($s); // base64エンコードして返す
}

  session_start();
  $token = getToken(); // トークンの生成
  setcookie('token', $token, 0, '/');  // トークンcookie
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="46-016.php">next</a>
</body>
