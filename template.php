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


<?php include_once 'footer.php' ?>
<?php include_once 'jsinc.php' ?>
<script>
	$('#navbar-index').addClass("active");
	$('#navbar-index a').attr("href","#");
</script>
</body>
</html>
