<?php
  function db_init($host, $duser, $dpw, $dname){
    // mysql -hlocalhost -uroot -p
    $conn = mysqli_connect($host, $duser, $dpw);
    // USE __DATABASE_NAME__
    mysqli_select_db($conn, $dname);
    return $conn;
  }
?>
