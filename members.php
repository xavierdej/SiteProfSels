<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'head.php'; ?>
<?php include "navbar.php"; ?>
</head>

<body>
    <!-- Navbar -->
<?php generateNavbar('members'); ?>

    <!-- Content -->
    
    <?php 
    include "database.php";
    $database = new Database();
    $db = $database->getDbConnection();

    $sql = "SELECT * FROM SelsMembers WHERE Active=1";
    $query = mysqli_query($db, $sql);
    $rows = resultToArray($query);

    ?>

    <div class="container">
        <?php
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1)
        {
            echo '<div class="alert alert-info">You are logged in as administrator!</div>';
            echo '
            <form action="manageMembers.php" method="post">
                <input type="hidden" name="intention" value="addMember">
                <button type="submit" class="btn btn-default">Add member</button>
            </form>
            ';
        }
         ?>
        <div class="row">
            <?php
            foreach ($rows as $row) 
            {
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1)
				{
                	$echoForm = 
	                	'<form action="manageMembers.php" method="post">
			                <input type="hidden" name="intention" value="editMember">
			                <input type="hidden" name="memberID" value="'.$row['ID'].'">
			                <button type="submit" class="btn btn-default">Edit member</button>
			            </form>';
                }
                else
                {
                	$echoForm = "";
                }
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="'.$row['PicturePath'].'">   
                        </div><!-- card image -->

                        <div class="card-content">
                        	'.$echoForm.'
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

<?php include_once 'footer.php' ?>
<?php include_once 'jsinc.php' ?>
</body>
</html>
