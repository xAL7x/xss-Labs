<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <center>
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
  text: <input type="text" name="name">
  <input type="submit" value="send">
  </form>
  </center>
<?php
echo $_GET['name'];
?>

  </body>
</html>
