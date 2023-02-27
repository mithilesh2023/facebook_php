<?php
$servername='localhost';
$username='root';
$password='';
$dbname='facebook';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "connection ok";
}else{
    echo "failed";
}
?>