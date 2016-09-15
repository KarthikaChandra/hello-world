<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>About Me Functions </title>
    <link rel="stylesheet" href="pure_css/pure.css">
    </head>


<body>
  <br/>
  <a href="index.php">Home</a>
  <br/>

<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</body>
</html>
