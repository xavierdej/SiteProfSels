<?php session_start() ?>
<?php include_once "head.php" ?>
<?php include "navbar.php" ?>

<?php 
	include "database.php";
    $database = new Database();
    $db = $database->getDbConnection();

    $sql = "SELECT * FROM SelsMembers WHERE Active=1";
    $query = mysqli_query($db, $sql);
    $rows = resultToArray($query);

 ?>
<body>
    <?php 
    generateNavbar("members");
     ?>
    <!-- Content -->
    <div class="container">
    	<?php
        if ($_SESSION['loggedIn'] == 1)
            echo '<div class="alert alert-info">You are logged in as administrator!</div>';
         ?>
        <div class="row">
        	<?php
        	foreach ($rows as $row) 
        	{
        		echo '
	        	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
					<div class="card">
						<div class="card-image">
							<img class="img-responsive" src="http://placehold.it/500x500">   
						</div><!-- card image -->

						<div class="card-content">
							<h4 class="card-title">'.$row['FirstName'].' '.$row['LastName'].'</h4>
							<div class="row">    
								<div class="col-md-6">
									<a  href="javascript:void(0)" class="btn-show" data-rel="'.$row['ID'].'">READ MORE</a>
								</div>
							</div>
						</div><!-- card content -->
						<div class="card-reveal" data-rel="'.$row['ID'].'">
							<button type="button" class="close" data-rel="'.$row['ID'].'" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="card-title">'.$row['FirstName'].' '.$row['LastName'].'</h4>
							<div>
								<i class="fa fa-lg fa-phone" aria-hidden="true"></i>
                    			<a class="phone" href="tel:'.$row['Phone'].'">'.$row['Phone'].'</a><br>
							</div>
							<div>
								<i class="fa fa-lg fa-envelope" aria-hidden="true"></i>
                    			<a class="phone" href="mailto:'.$row['Email'].'">'.$row['Email'].'</a><br>
							</div>
							<div><h4>About me:</h4>
								'.$row['InfoStory'].'
							</div>
						</div><!-- card reveal -->
					</div>
				</div>';
        	}
			 ?>
        </div>	    
    </div>
    <div class="col-xs-12" style="height:30px;"></div>
<?php include_once "tail.php" ?>