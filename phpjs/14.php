<?php
  // mysql -hlocalhost -uroot -p
  $conn = mysqli_connect("localhost", "root", "dkdl95965");
  // USE __DATABASE_NAME__
  mysqli_select_db($conn, "opentutorials");
  // sql statement
  $name = mysqli_real_escape_string($conn, $_GET['name']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);
  $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
  echo $sql;
  // SELECT * FROM __TABLE_NAME__
  $result = mysqli_query($conn, $sql);
  var_dump($result->num_rows);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($result->num_rows == 0){
      echo "로그인에 실패하였습니다.";
    }
    else{
      echo "안녕하세요 주인님";
    }
  ?>
</body>
</html>
