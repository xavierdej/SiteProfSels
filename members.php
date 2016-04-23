<?php session_start() ?>
<?php include_once "head.php" ?>
<?php include "navbar.php" ?>
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
            <div class="col-lg-2 col-lg-offset-1">
                <img src="img/person.png" class="img-rounded img-responsive">
            </div>
            <div class="col-lg-3">
                <address>
                    <strong>Member 1</strong> (room 03.82)<br>
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
			<div class="col-lg-2 ">
                <img src="img/person.png" class="img-rounded img-responsive">
            </div>
            <div class="col-lg-3">
                <address>
                    <strong>Member 2</strong> (room 03.82)<br>
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
            <div class="col-lg-2 col-lg-offset-1">
                <img src="img/person.png" class="img-rounded img-responsive">
            </div>
            <div class="col-lg-3">
                <address>
                    <strong>Member 3</strong> (room 03.82)<br>
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
			<div class="col-lg-2 ">
                <img src="img/person.png" class="img-rounded img-responsive">
            </div>
            <div class="col-lg-3">

                <address>
                    <strong>Member 4</strong> (room 03.82)<br>
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
		<div class="row">    
			<div class="col-sm-3 col-sm-offset-1">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive" src="http://placehold.it/500x500">   
					</div><!-- card image -->
					
					<div class="card-content">
						<h4 class="card-title">Member 5</h4>
						<div class="row">    
							<div class="col-md-6">CU/oxygen</p>
							</div>
							<div class="col-md-6">
							<a  href="javascript:void(0)" class="btn-show" data-rel="1">READ MORE</a>
							</div>
						</div>
		
					</div><!-- card content -->
					<div class="card-reveal" data-rel="1">
						<button type="button" class="close" data-rel="1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<div class="tabbable tabs-below">
							<div class="tab-content">
							 <div class="tab-pane active" id="one_">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. 
							 Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
							 <div class="tab-pane" id="two_">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
							 Aliquam in felis sit amet augue.</div>
							</div>
							<ul class="nav nav-tabs">
							  <li><a href="#one_" data-toggle="tab">First tab</a></li>
							  <li><a href="#two_" data-toggle="tab">Second tab</a></li>
							</ul>
						  </div>
					</div><!-- card reveal -->
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive" src="http://placehold.it/500x500">
						
					</div><!-- card image -->
					
					<div class="card-content">
						<h4 class="card-title">Member 6</h4>
						<div class="row">    
							<div class="col-md-6">
							<p class="card-function">Binuclear Fe structure/function</p>
							</div>
							<div class="col-md-6">
							<a  href="javascript:void(0)" class="btn-show" data-rel="2">READ MORE</a>
							</div>
						</div>
					</div><!-- card content -->
					<div class="card-reveal" data-rel="2">
						<button type="button" class="close" data-rel="2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div><!-- card reveal -->
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card">
					<div class="card-image">
						<img class="img-responsive" src="http://placehold.it/500x500">
						
					</div><!-- card image -->
					
					<div class="card-content">
						<h4 class="card-title">Member 7</h4>
						<div class="row">    
							<div class="col-md-6">
							<p class="card-function">Binuclear Fe structure/function</p>
							</div>
							<div class="col-md-6">
							<a  href="javascript:void(0)" class="btn-show" data-rel="3">READ MORE</a>
							</div>
						</div>
					</div><!-- card content -->
					<div class="card-reveal" data-rel="3">
						<button type="button" class="close" data-rel="3" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div><!-- card reveal -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  Member 8
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body">
				  <img src="img/person.png" class="img-rounded img-responsive">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Member 9
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				  <div class="panel-body">
				  <img src="img/person.png" class="img-rounded img-responsive">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  Member 10
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				  <div class="panel-body">
				  <img src="img/person.png" class="img-rounded img-responsive">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			  </div>
			</div>
		</div>
    </div>
<?php include_once "tail.php" ?>