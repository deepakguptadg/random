<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access");
	header("Access-Control-Allow-Methods: POST");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	include('config.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM name_api WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($row_count = mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $rusultData = array('stetus' => true, 'data' => $row);
        }else{
            $rusultData = array('stetus' => false, 'message' => 'No Data Availabel !!');
        }
        $json = json_encode($rusultData,JSON_PRETTY_PRINT);
        print_r($json); 
    }

?>
