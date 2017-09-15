<?php 
		if(isset($_POST['commentBtn']))
		{
			require("../model/Database.php");
			$db = new Database();
			$connection = $db->connect();
			$comment = $_POST['commentValue'];
			//echo $comment;
      $date = date("Y-m-d");
      //$time = date("h:i:sa");
      $probID = $_GET['id'];  
      $query = "SELECT com_id FROM comment_2";
      $query_run = $db->executeQuery($query);
      $user = 1;
      $oldno = mysqli_num_rows($query_run);
      $newno = $oldno + 1;
      //$prefix = "REV";
      //$newid = $prefix.$newno;
      //echo "1";
      $sql5="INSERT INTO comment_2 VALUES('$newno','$probID','$comment','$date','$user')";
      //echo "1";
      $res5=mysqli_query($connection,$sql5);
		header("location:commentPage.php?id=$probID");
		}
	?>