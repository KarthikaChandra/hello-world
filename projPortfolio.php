<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>String Functions </title>
    <link rel="stylesheet" href="pure_css/pure.css">
    </head>
    <body>
    <br/>
    <a href="index.php">Home</a>
    <br/>
These are the placeholders for my projects - DWA - Harvard Online Extension School
<ol>
  <li>  <a href="aboutme.php">P1 Project</a></li>
  <li>  <a href="#">P2 Project</a></li>
  <li>  <a href="#">P3 Project</a></li>
  <li>  <a href="#">P4 Project</a></li>

</ol>
<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>

</body>
</html>
