<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'head.php'; ?>
</head>

<body>
  <!-- Navbar -->
  <?php include "navbar.php"; ?>

  <!-- Content -->
  <div class="container">
    <?php
    if ($_SESSION['loggedIn'] == 1)
      echo '<div class="alert alert-info">You are logged in as administrator!</div>';
    ?>
    <div class="jumbotron">
      <h1>The Solomon Laboratory</h1>
      <p>But then for professor Sels</p>
      This is a short introduction to ... </br>
      <img src="http://web.stanford.edu/group/solomon/home_files/chemrev_small.gif"> </br></br>
      And here are some links: </br>
      <a href="http://web.stanford.edu/group/solomon/home.html">Link to organic chemistry</a></br>
      <a href="http://web.stanford.edu/group/solomon/research.html#copper">Link to inorganic chemistry</a>
    </div>
  </div>

  <?php include_once 'footer.php' ?>
  <?php include_once 'jsinc.php' ?>
  <script>
    $('#navbar-index').addClass("active");
    $('#navbar-index a').attr("href","#");
  </script>
</body>
</html>
