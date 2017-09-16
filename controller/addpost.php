<?php 
session_start();
 ?>
<?php 
require('../model/Database.php');
// making connection
$db = new Database();
$connection = $db->connect();
$query = "INSERT INTO customer_problem ( ";
			$query .= "cust_id";
			$query .= ") VALUES (";
			$query .= "'{$_SESSION['user_id']}'";
			$query .= ")";

    $result_set = $db->executeQuery($query);
    //$problemid = "";
    //$customerid = "";

    $result=$db->verifyQuery($result_set);
    if ($result) {

    		echo "Success....";

    	}
 ?>