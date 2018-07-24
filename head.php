<?php
session_start();
$link = mysqli_connect("localhost","root","","db00_1");
mysqli_query($link,"SET NAMES UTF8");

include_once("total_list.php");
?>