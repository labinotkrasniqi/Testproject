<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial - home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <?php 
        $username = $_POST["username"];
        echo "<center><h1 id='welcome'>Welcome $username !</h1></center>";
      ?>
    </div>

    <script>
      
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>