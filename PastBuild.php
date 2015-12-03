
		<?php
		session_start();
		$_SESSION["test"] = "hi";
		include "DisplayPastBuilds.php";
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>LoL Builder</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Custom style for whole website -->
		<link rel="stylesheet" href="css/main.css" > 
		<!-- Custom style for past build only -->
		<link rel="stylesheet" href="css/PastBuild.css">
		<meta charset="utf-8">
	</head>
	
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
	<!-- 				<a class="navbar-brand" href="#">Home</a> -->
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="loleditor.html">Create New Build</a></li>
						<li><a href="?">Past Builds</a></li>
<!-- 						<li><a href="#">User Guide</a></li> -->
					</ul>				  
				</div>
			</div>
		</nav>
		
		<div class="container-fluid"  style="old-builds">
			<div class="row-fluid">
				<div class="col-sm-12 welcome-box main-content buildList">
					<h3 class="title">Here are your past builds:</h3>
					<div class="inner-pane">
						<!-- <a href="loleditor.html">
						<p class="row pastbuildbutton" id="build1">
							<span><img src="http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/Thresh.png"></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</p>
						</a>
						<p class="row pastbuildbutton" id="build2">
							<span><img src="http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/Tryndamere.png"></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</p>
						<p class="row pastbuildbutton" id="build3">
							<span><img src="http://ddragon.leagueoflegends.com/cdn/5.21.1/img/champion/Jayce.png"></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</p> -->
					<!-- <a href="loleditor.html"> -->
<!-- 					<img src="images/Cassiopeia.png" alt="Your first test build" title="Build Number One"/>
					</a>
					<img src="images/Jayce.png" alt="Your second test build" title="Build Number Two"/>
					<img src="images/Tryndamere.png" alt="Your third test build" title="Build Number Three"/> -->
					<?php displayPastBuilds();?>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Latest compiled and minified jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>