<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home Page for Class Project</title>
    <link rel="stylesheet" href="pure_css/pure.css">
    </head>


<body>
  <br/>
  <a href="index.php">Home</a>
  <br/>
  <?php echo "Hello World !"; ?><br />
  <img src="images/guidePuppy1.png" width="250px" height="200px">
  <ul>
    <li><a href="aboutme.php">About Me</a></li>
    <li><a href="#">Healing Methodologies</a></li>

  <ul>
    <br />
     <?php echo "Last modified: " . date ("F d Y H:i:s.", getlastmod()); ?>
</body>
</html>
