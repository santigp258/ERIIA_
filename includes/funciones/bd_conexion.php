<?php 

$conn = new mysqli('localhost', 'root', '', 'ERIIA');

if($conn->connect_error){
    echo $error = $conn->connect_error;
}

?>