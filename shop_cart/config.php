<?php
 $conn = new mysqli("localhost","root","","edgedata");
 if($conn->connect_error){
    die("connect failed!".$conn->connect_error);
 }
?>