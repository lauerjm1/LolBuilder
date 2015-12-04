 <?php
 session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["champion"]) && isset($_POST["image1"]) && isset($_POST["image2"])&& isset($_POST["image3"])&& isset($_POST["image4"])&& isset($_POST["image5"])&& isset($_POST["image6"]))
		{
			changeDB();
		}
	}
 
	function changeDB() {
		session_start();
   $dbhost = '127.0.0.1:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   
   // $connect = mysql_connect($dbhost, $dbuser, $dbpass);
   $conn = new mysqli($dbhost, $dbuser, $dbpass,'lolbuilder');
   
   // if(! $connect )
   // {
      // die('Could not connect: ' . mysql_error());
   // }
   if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

   echo"<pre>";
   print_r($_POST);
   print_r($_SESSION);
   echo"</pre>";
   if ($_SESSION['build'] == "new"){
   $sql = "INSERT INTO builds (userid, champimg, item1img, item2img,item3img, item4img, item5img, item6img)
VALUES ('".$_SESSION['userID']."','".$_POST['champion']."', '".$_POST['image1']."', '".$_POST['image2']."','".$_POST['image3']."', '".$_POST['image4']."','".$_POST['image5']."','".$_POST['image6']."')";
   } else{
	   $sql = "update builds set champimg = '".$_POST['champion']."' , item1img = '".$_POST['image1']."', item2img = '".$_POST['image2']."', item3img = '".$_POST['image3']."', item4img = '".$_POST['image4']."', item5img = '".$_POST['image5']."', item6img = '".$_POST['image6']."' where buildid = '".$_SESSION['build']."'";
	   
   }
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
} 
 
  // mysql_select_db('loleditor');
  
   // if (mysql_query($sql, $connect)) {
    // echo "New record created successfully";
// } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($connect);
   $conn->close();
    // mysql_close($connect);
	header("location: PastBuild.php");
	exit();
}

   
   
   
   
   
   ?>