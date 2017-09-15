<?php session_start() ?>

<?php
require_once ('../model/database.php');

// making connection
$db = new Database();
$connection = $db->connect();


$data = json_decode(stripslashes($_POST['data']));
$rg_name = $data[0];
$rg_email = $data[1];
$rg_password = $data[2];
$rg_cpassword = $data[3];

// check for submission
$result =array();
$errors =null;

// check if the username and password has been entered
if (!isset($rg_name) || strlen(trim($rg_name)) < 1){
    $errors = 'Fill name';
}
/*
if(!isValidPhoneNumber($rg_contact_number)){
    $errors = 'invalid phone number';
}*/


if (!isset($rg_email) || strlen(trim($rg_email)) < 1 ){
    $errors = 'Fill email';
}

/*if(!is_email($rg_email)){
    $errors= 'Invalid email';
}*/

if (!isset($rg_password) || strlen(trim($rg_password)) < 1 ){
    $errors= 'Invalid user registration';
}

if(strcmp($rg_password, $rg_cpassword) != 0){
    $errors = 'password doesnt match';
}

// if (!isset($rg_cpassword) || strlen(trim($rg_cpassword)) < 1 ){
//    $errors[] = 'Invalid user registration';
// }


// check if there are any errors in the form
if ($errors == null){

    // save username and password into variables
    // in here user can enter a sql statement to damage our database (sql injection), so we must remove this risk

    $rg_name = mysqli_real_escape_string($connection,$rg_name);
    $rg_email = mysqli_real_escape_string($connection,$rg_email);
    $rg_password = mysqli_real_escape_string($connection,$rg_password);
    $hashed_password = md5($rg_password);

    //$hashed_password = sha1($password);

    // prepare database query
    $query = "INSERT INTO customer(cust_name,cust_email) VALUES ('$rg_name','$rg_email')";
    //echo $query;
    //$result_set = mysql_query(query);

    //$result_set = $db -> executeQuery($query);
    $result_set = mysqli_query($connection,$query);
    $db->verifyQuery($result_set);


    if($result_set){
        $query = "INSERT INTO user(name,email,password,type) VALUES ('$rg_name','$rg_email','$hashed_password','Customer')";

        $result_set = mysqli_query($connection,$query);
        $db->verifyQuery($result_set);
        if($result_set){
            array_push($result,"success");
            array_push($result, "successfully registered");
            echo json_encode($result);
            //echo "done";
        }

    }
    else{
        array_push($result,"failure", "not successfully registered,db error");
        echo json_encode($result);
        //echo "undone";
    }
}
else{
    array_push($result,"failure", $errors);
    echo json_encode($result);
    //echo "error";
}

?>