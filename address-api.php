


<?php 
    // SELECT CONCAT_WS(',',ct.name, s.name,c.name) as address FROM countries as c INNER JOIN states as s ON c.id = s.country_id INNER JOIN cities as ct ON s.id = ct.state_id WHERE ct.name LIKE '%dehri%';
    $conn = mysqli_connect('localhost', 'root', '', 'apiaddres');
    if(!$conn){
        echo "DB Failed";
    }

    if(isset($_POST['submit'])){
        $add = $_POST['address'];

        $sql = "SELECT CONCAT_WS(',',ct.name, s.name,c.name) as address FROM countries as c INNER JOIN states as s ON c.id = s.country_id INNER JOIN cities as ct ON s.id = ct.state_id WHERE ct.name LIKE '%dehri%'";

        $result = mysqli_query($conn, $sql);
    }



 ?>

 <form action="" method="POST">
     <input type="text" name="address">
     <input type="submit" name="submit">
 </form>