<?php
     session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["buildID"]))
		{
			
			$BNum = $_POST["buildID"];
			$dbhost = '127.0.0.1:3306';
				$dbuser = 'root';
			    $dbpass = '';
			    
			   
			    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
			   
			    if(! $connect )
			    {
				  die('Could not connect: ' . mysql_error());
			    }
			   $sql = "SELECT ChampImg, item1Img, item2Img, item3Img, item4Img, item5Img, item6Img FROM builds WHERE BuildID = ".$BNum;
			   
			   mysql_select_db('lolbuilder');
			   $retval = mysql_query( $sql, $connect );
			   
			   if(! $retval )
			   {
				  die('Could not get data: ' . mysql_error());
			   }
			    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
						$_SESSION["build"] = $BNum;
						$_SESSION["champ"] = $row['ChampImg'];
						$_SESSION["item1"] = $row['item1Img'];
						$_SESSION["item2"] = $row['item2Img'];
						$_SESSION["item3"] = $row['item3Img'];
						$_SESSION["item4"] = $row['item4Img'];
						$_SESSION["item5"] = $row['item5Img'];
						$_SESSION["item6"] = $row['item6Img'];
					}
					
					echo $_SESSION["build"];
					echo $_SESSION["champ"];
					echo $_SESSION["item1"];
					echo $_SESSION["item2"];
					 echo $_SESSION["item3"];
					echo $_SESSION["item4"];
					echo $_SESSION["item5"];
					echo $_SESSION["item6"];
					header ("location: loleditor.php");
					exit();
			
			
			
			
		//	$_SESSION["BuildID"] = 
		//	include("homepage.html");
		}
	}
?>