<?php session_start(); 
    $message = "";
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==1)
        $_SESSION['loggedIn']=0;
    if(isset($_POST['login'])) {
        include "database.php";
        $database = new Database();
        $db = $database->getDbConnection();
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);
        
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $password = md5($password);

        $sql = "SELECT * FROM SelsUsers WHERE UserName='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['ID'];
        $db_password = $row['PasswordHash'];

        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['loggedIn'] = 1;
            header("Location: index.php");
        } else {
            $message = '<div class="alert alert-danger">Maybe you typed the wrong username or password!</div>';
            $_SESSION['loggedIn'] = 0;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'head.php'; ?>
<?php include "navbar.php"; ?>
</head>

<body>
    <!-- Navbar -->
<?php generateNavbar('login'); ?>

    <!-- Content -->

    <div class="container">
        <div class="row">
            <?php echo $message; ?>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="well well-lg">
                <form action "login.php" method="post" encdata="multipart/form-data">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Username" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control" id="password" placeholder="Password">
                  </div>
                  <button name="login" type="submit" class="btn btn-default" value="Login">Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'footer.php' ?>
<?php include_once 'jsinc.php' ?>
</body>
</html>
