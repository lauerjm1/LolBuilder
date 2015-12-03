<?php

    session_start();
   function displayPastBuilds() {
   $dbhost = '127.0.0.1:3306';
   $dbuser = 'root';
   $dbpass = '';
   $userID = $_SESSION["userID"];
   
   $connect = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $connect )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT BuildID, ChampImg, item1Img, item2Img, item3Img, item4Img, item5Img, item6Img FROM builds WHERE UserID = ".$userID;
   mysql_select_db('lolbuilder');
   $retval = mysql_query( $sql, $connect );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {
	  //echo "<div> <input type='image' src='{$row['ChampImg']}' alt='Submit'> </div>";
	  echo '<div id = stuff>';
	echo '<form method="post" action="gotoEditor.php">';
	  echo '<img src='.$row['ChampImg'].' alt='.$row['ChampImg'].'></img>';
	  echo '<img src='.$row['item1Img'].' alt='.$row['item1Img'].'></img>';
	  echo '<img src='.$row['item2Img'].' alt='.$row['item2Img'].'></img>';
	  echo '<img src='.$row['item3Img'].' alt='.$row['item3Img'].'></img>';
	  echo '<img src='.$row['item4Img'].' alt='.$row['item4Img'].'></img>';
	  echo '<img src='.$row['item5Img'].' alt='.$row['item5Img'].'></img>';
	  echo '<img src='.$row['item6Img'].' alt='.$row['item6Img'].'></img>';
	  echo "<input type='submit' name='buildID' value='".$row['BuildID']."'></input>";
	  echo '</form>';
	  echo '</div>';
   }
   
   //TODO: Add case of no builds
   mysql_close($connect);
   }
   
?>