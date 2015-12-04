<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["emailsignup"]) && isset($_POST["passwordsignup"]))
		{
			$inputEmail = $_POST['emailsignup'];
			$inputPassword = $_POST["passwordsignup"];
			if (!($inputEmail === ""))
			{
				$dbhost = '127.0.0.1:3306';
				$dbuser = 'root';
			    $dbpass = '';
			    
			    $connect = mysql_connect($dbhost, $dbuser, $dbpass);
				$sql = "SELECT count(*) FROM users WHERE Email = '".$inputEmail."'";
				mysql_select_db('lolbuilder');
				$retval = mysql_query( $sql, $connect );
				if(! $retval )
				{
				  die('Could not get data: ' . mysql_error());
				}
				$numMatchedEmails = mysql_fetch_row(($retval));
				if ($numMatchedEmails[0] == 0)
				{
					echo "here";
					$sql = "insert into users (email, password) values ('".$inputEmail."','".$inputPassword."')";
					mysql_select_db('lolbuilder');
					$retval = mysql_query( $sql, $connect );
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					else if ($retval == 1)
					{
						$sql = "SELECT UserID FROM Users WHERE email = '".$inputEmail."'";
						mysql_select_db('lolbuilder');
						$retval = mysql_query( $sql, $connect );
						if(! $retval )
					   {
						  die('Could not get data: ' . mysql_error());
					   }
					   else
					   {
						session_start();
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
							{
								$_SESSION["userID"] = $row['UserID'];
							}
							header ("location: PastBuild.php");
							exit();
						}
					}
				}
			}
		header ("location: homepage.html");
		}
	}
?>
