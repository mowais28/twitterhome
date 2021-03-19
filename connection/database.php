<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'twitter';
$connect = mysqli_connect($host,$user,$password,$database);
if(!$connect)
{
    echo '<script> alert("Fail to Connect The Database"); </script>';
    echo '<script> location="./index.php" </script>';
}
?>