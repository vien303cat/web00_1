<?php


$list['title'] = "a_title.php";
$list['ad'] = "a_ad.php";
$list['mvim'] = "a_mvim.php";
$list['total'] = "a_total.php";
$list['bottom'] = "a_bottom.php";
$list['news'] = "a_news.php";
$list['admin'] = "a_admin.php";

if(empty($_GET["redo"])){
	$_GET["redo"] = 'title' ;
}

$redo = $_GET["redo"];
?>