<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
<body>
    <?php 
    generateNavbar("index");
     ?>

    <!-- Content -->

<div class="container">
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

	<!-- Additional javascript (scrollspy) -->
	<script src="js/profSels.js"></script>
	
	<!-- 

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- // <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- // <script src="js/grayscale.js"></script> -->

</body>

</html>
