<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access");
	header("Access-Control-Allow-Methods: POST");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include('config.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM name_api WHERE id = '$id'";
        if(mysqli_query($conn, $sql)){
            $sql = "SELECT * FROM name_api";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_all($result);
            $rusultData = array('stetus' => true, 'message' => 'Deleted SuccesFully !!', 'data' => $row);
        }else{
            $rusultData = array('stetus' => false, 'message' => 'Can Not Deleted SuccesFully !!');
        }
        $json = json_encode($rusultData,JSON_PRETTY_PRINT);
        print_r($json); 
    }

?>
