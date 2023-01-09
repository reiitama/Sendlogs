<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: home.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sendlogs</title>
</head>
<body>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">Sendlogs</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">Home</a>
        </li>
        <li>
          <a href="#!">Pricing</a>
        </li>
        <li>
          <a href="#!">Service</a>
        </li>
        <li>
          <a href="#!">Blog</a>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
    <h1></h1>
</body>
</html>