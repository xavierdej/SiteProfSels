<?php session_start() ?>
<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
<body>
    <?php 
    generateNavbar("research");
     ?>

    <!-- Content -->

<div class="container">
    <?php
        if ($_SESSION['loggedIn'] == 1)
            echo '<div class="alert alert-info">You are logged in as administrator!</div>';
         ?>
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix">
        <li><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>                     
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1">    
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>
<?php include_once "tail.php" ?>