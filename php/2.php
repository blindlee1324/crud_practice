<html>
<head>
  <meta charset="utf-8">
  <title>file_get_contents</title>
</head>
<body>
  <?php
    echo file_get_contents($_GET['id'] . ".txt");
  ?>
</body>
</html>
