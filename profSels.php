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
        <div class="row">
            <div class="col-lg-2 col-lg-offset-2">
                <img src="img/person.png" class="img-rounded img-responsive">
            </div>
            <div class="col-lg-6">
                <address>
                    <strong>Prof. Bert Sels</strong> (room 03.82)<br>
                    <i class="fa fa-lg fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:bert.sels@biw.kuleuven.be">bert.sels@biw.kuleuven.be</a><br>
                    <i class="fa fa-lg fa-phone" aria-hidden="true"></i>
                    <a class="phone" href="tel:+32 16 321 593">+32 16 321 593</a><br>
                    <i class="fa fa-lg fa-phone" aria-hidden="true"></i>
                    <a class="phone" href="tel:+32 16 321 610">+32 16 321 610</a><br>
                    <i class="fa fa-lg fa-fax" aria-hidden="true"></i>
                    <a class="phone" href="tel:+32 16 321 998">+32 16 321 998</a><br>

                    <i class="fa fa-lg fa-map" aria-hidden="true"></i>
                    <a href="http://googlemapsinterface.kuleuven.be/index.cgi?nbol=50.86364142080709,4.68701813890891&amp;zoomlevel=14&amp;plaatsnaam=Centr.+vr+Oppervlaktechemie+%26+Katalyse%2C+Kasteelpark+Arenberg+23%2C+3001+Leuven">Google map</a><br>
                    Centre for Surface Chemistry and Catalysis <br>
                    Kasteelpark Arenberg 23 - box 2461 <br>
                    3001 Leuven
                </address>
            </div>
        </div>
    </div>

<?php include_once 'footer.php' ?>
<?php include_once 'jsinc.php' ?>
<script>
    $('#navbar-profSels').addClass("active");
    $('#navbar-profSels a').attr("href","#");
</script>
</body>
</html>
