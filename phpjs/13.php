<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>JavaScript</h1>
  <script>
    function a(input) {
      return parseInt(input) + 1;
    }
    document.write(a(prompt("숫자만 입력")));
  </script>
  <h1>php</h1>
  <?php
    function a($input){
      return $input + 1;
    }
    echo a(6);
  ?>
</body>
</html>