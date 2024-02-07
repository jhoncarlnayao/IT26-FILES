<!DOCTYPE html>
<?php include("include/config.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Project</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<style>
    h1,p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bolder;
    }
</style>
<body>
    <!-- HEADER -->
    <?php include('templates/header.php'); ?>

    <!-- MENU -->
    <?php include('templates/menu.php'); ?>   

    <!-- CONTENT -->
  <?php
  $query = mysqli_query($sql, "SELECT * FROM nayaoproj");
  while($row = mysqli_fetch_assoc($query))
  {
    $title =$row['title'];
    $content=$row['content'];
  }
  ?>
  <!-- TITLE AND THE CONTENT -->
  <h1><?php echo"$title"; ?></h1>
  <p><?php echo"$content"; ?></p>
    <!-- FOOTER -->
    <?php include('templates/footer.php'); ?>
</body>
</html>