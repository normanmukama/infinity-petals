<?php
 $conn = new mysqli("localhost","root","adminnorman","edgedata");
 if($conn->connect_error){
    die("connect failed!".$conn->connect_error);
 }
?>