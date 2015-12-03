<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["loginEmail"]) && isset($_POST["loginPass"]))
		{
			
			$loginPass= $_POST["loginPass"];
			$loginEmail = $_POST["loginEmail"];
			
			
			
			if ($loginPass === "" || $loginEmail === "")
			{
				header ("location: homepage.html");
				echo "Incorrect Email or Password";
			}
			else
			{
				$dbhost = '127.0.0.1:3306';
				$dbuser = 'root';
			    $dbpass = '';
			    
			   
			    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
			   
			    if(! $connect )
			    {
				  die('Could not connect: ' . mysql_error());
			    }
			   $sql = "SELECT UserID FROM Users WHERE email = '".$loginEmail."'";
			   
			   echo $sql;
			   mysql_select_db('lolbuilder');
			   $retval = mysql_query( $sql, $connect );
			   
			   if(! $retval )
			   {
				  die('Could not get data: ' . mysql_error());
			   }else if ($retval == NULL){
				   header ("location: homepage.html");
				   echo "Incorrect Email or Password";
			   }else{
				   session_start();
				   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
						$_SESSION["userID"] = $row['UserID'];
					}
				    header ("location: PastBuild.php");
					  
				   
			   }
				
				 
				
			}
		//	include("homepage.html");
		}
	}
?>
