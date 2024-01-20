<?php 
include '../Controller/productp.php';
$categoryc = new categoryc ();
$categoryc->delete_category($_GET['id']);
header('Location:listcategory.php');
?>