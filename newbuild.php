<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$_SESSION['build'] = "new";
		echo $_SESSION['build'];
		header("location: loleditor.php");
		//exit();
	}
	
?>