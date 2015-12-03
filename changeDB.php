 <?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["champion"]) && isset($_POST["image1"]) && isset($_POST["image2"])&& isset($_POST["image3"])&& isset($_POST["image4"])&& isset($_POST["image5"])&& isset($_POST["image6"]))
		{
			changeDB();
		}
	}
 
	function changeDB() {
   $dbhost = '127.0.0.1:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   
   $connect = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $connect )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "INSERT INTO builds (userid, champimg, item1img, item2img,item3img, item4img, item5img, item6img)
VALUES ('".$_SESSION['userID']."','".$_POST['champion']"', '".$_POST['item1']."', '".$_POST['item2']."','".$_POST['item3']."', '".$_POST['item4']."','".$_POST['item5']."','".$_POST['item6']."')";
  
  mysql_select_db('loleditor');
  
   if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

   
   
   
   
   
   
    mysql_close($connect);
	}
   ?>