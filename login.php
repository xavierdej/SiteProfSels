<?php
    session_start();

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
            header("Location: index.html");
        } else {
            echo "You didn't enter the correct details!";
        }

    }
?>

<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
<body>
    <?php 
    generateNavbar("login");
     ?>
    <h1 style="font-family: Tahoma;">Login</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <input placeholder="Username" name="username" type="text" autofocus>
        <input placeholder="Password" name="password" type="password">
        <input name="login" type="submit" value="Login">
    </form>
</body>
</html>