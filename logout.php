<?php 
session_start();
echo"<script>alert('You Have Logged Out')</script>";
session_destroy();
include("index.php");

?>

