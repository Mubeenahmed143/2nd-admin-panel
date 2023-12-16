<?php 
include('config.php');


if(isset($_GET['id'])){
    $userid = $_GET['id'];
}

$trash = "UPDATE `user` Set `status` = '0' WHERE `id` = '$userid' ";
$result = mysqli_query($connection, $trash);
if($result){
    header("location:trash.php");
}

?>            