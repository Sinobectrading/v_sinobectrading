<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">

		<nav class="navbar navbar-default yamm">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
 					<a class="navbar-brand" href="/sinobectrading/en/index.php"><img src="../images/logo.png" alt=""></a>
 			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav nav-mega">
						<li 
						<?php if (trim($_SERVER['PHP_SELF']) == "/sinobectrading/en/index.php") {
                              echo 'class="active"';} ?>
						><a href="index.php" class="effect-3">Home</a></li>
						<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/sinobectrading/en/about.php") {
                              echo 'class="active"';} ?>
						><a href="about.php" class="effect-3">About</a></li>
 
						<li class="dropdown yamm-fullwidth">
			                 <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"> Products <b class="caret"></b> </a>
			                  <ul class="dropdown-menu ">
			                    <li>
			                      <div class="yamm-content">
			                        <div class="row-fluid">
			                          <ul class="thumbnails">

			                          	<li class="span3">
			                          		<div class="thumbnail clearfix">
			                          			<a class="hvr-shutter-out-vertical" href="raw.php">
				                          			<img alt="260x130" src="../img/260_130/raw.jpg" class="hidden-xs">
				                          			<div class="caption">
				                          				<h4>Aluminum RAW Material</h4>
				                          				<div class="w3l-button hidden-xs">
				                          					Ingot & Billet
				                          				</div>
				                          			</div>
			                          			</a>
			                          		</div>
			                          	</li>

			                          	<li class="span3">
			                          		<div class="thumbnail clearfix">
			                          			<a class="hvr-shutter-out-vertical" href="standard.php">
				                          			<img alt="260x130" src="../img/260_130/std.jpg" class="hidden-xs">
				                          			<div class="caption">
				                          				<h4>Aluminum Extrusion</h4>
				                          				<div class="w3l-button hidden-xs">
				                          						Standard & Customized Extrusion
														</div>
				                          			</div>
				                          		</a>
			                          		</div>
			                          	</li>
										

										<li class="span3">
			                            	<div class="thumbnail clearfix">
			                            		<a class="hvr-shutter-out-vertical" href="sheet.php">
				                            		<img alt="260x130" src="../img/cp.png" class="hidden-xs">
				                            		<div class="caption">
				                            			<h4>Aluminum Sheets & Coils</h4>
				                            			<div class="w3l-button hidden-xs">
				                            				Plates/Sheets & Coils 
				                            			</div>
				                            		</div>
				                            	</a>
			                            	</div>
			                            </li>

			                            <li class="span3">
			                            	<div class="thumbnail clearfix">
			                            		<a class="hvr-shutter-out-vertical" href="steel.php">
				                            		<img alt="260x130" src="../img/260_130/steel.jpg" class="hidden-xs">
				                            		<div class="caption">
				                            			<h4>Stainless Steel</h4>
				                            			<div class="w3l-button hidden-xs">
				                            				Coils & Sheets 
				                            			</div>
				                            		</div>
				                            	</a>
			                            	</div>
			                            </li>
			                          </ul>
			                        </div>
			                      </div>
			                    </li>
			                  </ul>
			                </li>     

						<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/sinobectrading/en/contact.php") {
                              echo 'class="active"';} ?>
						><a href="contact.php" class="effect-3">Contact Us</a></li>
						<li class="language active">
							 <a  href="/sinobectrading/en/<?php echo basename($_SERVER['PHP_SELF']); ?>">EN</a> 
							  
						</li>
						<li class="language">
							<a class="fr" href="/sinobectrading/fr/<?php echo basename($_SERVER['PHP_SELF']); ?>">FR</a>
						</li>
					</ul>
				</nav>
			</div>
		</nav>
		<div class="clearfix"> </div>
	</div>
</div>