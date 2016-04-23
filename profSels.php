<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
<body>
    <?php 
    generateNavbar("profSels");
     ?>
    <!-- Content -->
    <div class="container">
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
    <div class="container">
        <div class="row">
            <div class="well well-lg">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 container text-center">
                        <i class="fa fa-lg fa-university" aria-hidden="true"></i>
                        <a href="http://www.kuleuven.be/english"><strong>KU Leuven University</strong></a>
                    </div>
                    <div class="col-md-4 container text-center">
                        <i class="fa fa-lg fa-home" aria-hidden="true"></i>
                        <a href="http://www.kuleuven.be/wieiswie/en/unit/50464356"><strong>Centre for Surface Chemistry and Catalysis</strong></a>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container text-center">
                    <p>Copyright &copy; Bert Sels 2016</p>
                </div>
            </footer>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

	<!-- Additional javascript (vertical navbar)-->
	<script src="js/profSels.js"></script>
	
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- // <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- // <script src="js/grayscale.js"></script> -->

</body>

</html>
