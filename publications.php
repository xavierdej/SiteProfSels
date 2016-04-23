<?php session_start() ?>
<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
<body>
    <?php 
    generateNavbar("publications");
     ?>

    <!-- Content -->
    <div class="container">
        <?php
        if ($_SESSION['loggedIn'] == 1)
            echo '<div class="alert alert-info">You are logged in as administrator!</div>';
         ?>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div><div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<img class="img-responsive" src="img/placehold500.png">
			</div>
			
        </div>
    </div>
<?php include_once "tail.php" ?>