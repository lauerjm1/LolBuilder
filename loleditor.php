<!DOCTYPE html>
<html>
	<head>
		<title>Build Editor</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Custom style for whole website -->
		<link rel="stylesheet" href="css/main.css" > 
		<link rel="stylesheet" href="css/loleditor.css" > 
		<meta charset="utf-8">
		</head>
		<?php
		session_start();
		//include "changeDB.php";
		
		?>
		<body class="lolbuild-theme">
		<!-- Navigation Bar -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Needs reference at some point -->
<!-- 					<a class="navbar-brand" href="#">Home</a> -->
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="?">Create New Build</a></li>
						<li><a href="PastBuild.html">Past Builds</a></li>
<!-- 						<li><a href="#">User Guide</a></li> -->
					</ul>				  
				</div>
			</div>
		</nav>
		
		
		
		
		
		
		
		<div class="container-fluid"  style="padding-right: 0px; padding-left: 0px;">
			<div class="row-fluid">
			
				<div class="main-content character" id="champSelect">
				<p>Select Champion </p>
				<!-- <img src="images/champs.jpg" /> -->
				
				</div>
				
				<div class="main-content items" id="itemSelect">
				<p>Select Items </p>
				
				</div>
				
				<div class="col-sm-6 main-content lolbuild">
					<p>Build  </p>
					
					<div class="col-sm-6 main-content lolbuild">
						<p>items in build </p>
						<?php
						
						if (!$_SESSION["build"]){
						 echo '<img id="Champ" src="images/inventory.png" alt="javascript button">';
								echo '<input type="hidden" id="champion" value="NULL">';
						} else{
							echo '<img id="Champ" src=' .$_SESSION["champ"] .'  alt="javascript button">';
								echo '<input type="hidden" id="champion" value='.$_SESSION['champ'].'>';
						}
						?>
						<div id="inventory">
						<?php
						 
							if (!$_SESSION["build"]){
								
							
								echo '<img id="slot1" src="images/Slot.png" alt="javascript button">';
								echo '<img id="slot2" src="images/Slot.png" alt="javascript button">';
								echo '<img id="slot3" src="images/Slot.png" alt="javascript button">';
								echo '<img id="slot4" src="images/Slot.png" alt="javascript button">';
								echo '<img id="slot5" src="images/Slot.png" alt="javascript button">';
								echo '<img id="slot6" src="images/Slot.png" alt="javascript button">';
								echo '<input type="hidden" id="image1" name="image1" value="NULL">';
								echo '<input type="hidden" id="image2" name="image2" value="NULL">';
								echo '<input type="hidden" id="image3" name="image3" value="NULL">';
								echo '<input type="hidden" id="image4" name="image4" value="NULL">';
								echo '<input type="hidden" id="image5" name="image5" value="NULL">';
								echo '<input type="hidden" id="image6" name="image6" value="NULL">';
							} else{
								echo '<img id="slot1" src=' .$_SESSION["item1"] .'  alt="javascript button">';
								echo '<img id="slot2" src=' .$_SESSION["item2"] .' alt="javascript button">';
								echo '<img id="slot3" src=' .$_SESSION["item3"] .' alt="javascript button">';
								echo '<img id="slot4" src=' .$_SESSION["item4"] .' alt="javascript button">';
								echo '<img id="slot5" src=' .$_SESSION["item5"] .' alt="javascript button">';
								echo '<img id="slot6" src=' .$_SESSION["item6"] .' alt="javascript button">';
								echo '<input type="hidden" id="image1" name="image1" value=' .$_SESSION["item1"] .'>';
								echo '<input type="hidden" id="image2" name="image2" value=' .$_SESSION["item2"] .'>';
								echo '<input type="hidden" id="image3" name="image3" value=' .$_SESSION["item3"] .'>';
								echo '<input type="hidden" id="image4" name="image4" value=' .$_SESSION["item4"] .'>';
								echo '<input type="hidden" id="image5" name="image5" value=' .$_SESSION["item5"] .'>';
								echo '<input type="hidden" id="image6" name="image6" value=' .$_SESSION["item6"] .'>';
								
							}
							?>
						</div>
					</div>
					
				</div>
				
				<div class="col-sm-6 main-content lolbuild">
					<p>Current item </p>
					
					<div class="col-sm-6 main-content lolbuild">
						<p>items in build </p>
						<img id="Champ2" src="images/inventory.png" alt="javascript button">
					</div>
					<div>
					
					<img id="saveBuild" src="images/save.png" alt="javascript button">
					
					
					</div>
					
				</div>
				
				
			</div>
		</div>
		
		<!-- Latest compiled and minified jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="javascript/lolbuilder.js"></script>
		<script src="javascript/lolbuilderItem.js"></script>
		
	</body>
</html>