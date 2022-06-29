<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access");
	header("Access-Control-Allow-Methods: POST");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include('config.php');
    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['id'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $id = $_POST['id'];
        $sql = "UPDATE `name_api` SET `name`='$name',`address`='$address' WHERE id = '$id'";

        if(mysqli_query($conn, $sql)){
            $sql1 = "SELECT * FROM name_api";
            $result = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_all($result);
            $rusultData = array('stetus' => true, 'message'=>'Data Updated Succesfully !!', 'data' => $row);
        }else{
            $rusultData = array('stetus' => false, 'data' => 'Data Not Updated !!');
        }
    }
    $json = json_encode($rusultData,JSON_PRETTY_PRINT);
    print_r($json); 

?>
