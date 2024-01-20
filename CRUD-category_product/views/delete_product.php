<?php 
include '../Controller/productp.php';
$productp = new productp ();
$productp->delete($_GET['id']);
header('Location:listproduct.php');
?>