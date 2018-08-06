<?php
$sql = "select * from a_image where a_image_display='1'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
$x = 0 ;
do{ 

$img[$x] = "img/".$c2['a_image_img'] ;
 $x++ ; } while($c2  = mysqli_fetch_assoc($c1))
?>