<?php

$localhost='localhost';
$username= 'root';
$passwpord='';
$database='phpcms';

$conn=mysqli_connect("localhost","root", "","phpcms" );

if($conn){
    
}

 // Check connection
elseif (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>