<?php
  require("/lib/db.php");
  require("/config/config.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  // SELECT * FROM __TABLE_NAME__
  $result = mysqli_query($conn, "SELECT * FROM TOPIC");
  // FETCH all rows

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel = "stylesheet" type="text/css" href="http://localhost/css/style.css">
</head>
<body id="target">
    <header>
      <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩" />
      <h1><a href="http://localhost/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <!-- list.txt 파일을 변경하여 네이게이션 변경가능 -->
        <ol>
          <?php
            while($row = mysqli_fetch_assoc($result)){
              echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">' . $row['title'] . '</a></li>';
            }
          ?>
        </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'" />
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"  />
      <a href="http://localhost/write.php">쓰기</a>
    </div>
    <article>
     <form action="process.php" method="post">
       <p>
         제목 : <input type="text" name="title">
       </p>
       <p>
         작성자 : <input type="text" name="author">
       </p>
       <p>
         본문 : <textarea name="description"></textarea>
       </p>
       <input type="submit" name="name">
     </form>
   </article>
</body>
</html>
