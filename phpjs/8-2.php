<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
      echo "안녕하세요 주인님";
    }
    else{
      echo "로그인에 실패하였습니다.";
    }
  ?>
</body>
</html>
