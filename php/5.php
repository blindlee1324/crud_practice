<html>
<head>
</head>
<body>
  <a href="http://opentutorials.org/course/1">생활코딩</a>
  &lt;a href&equals;&quot;http://opentutorials.org/course/1&quot;&gt;생활코딩&lt;&sol;a&gt;
  <?php
    // Character Entity transfer
    echo htmlspecialchars('<a href="http://opentutorials.org/course/1">생활코딩</a>');
    echo htmlspecialchars('<script>alert(1);</script>')
  ?>
</body>
</html>
