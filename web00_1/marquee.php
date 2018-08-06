<?php 
$sql = "select * from a_marquee where a_marquee_display ='1'";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
$mar = "";
do{
    $mar .= $c2["a_marquee_txt"]."　";
}while($c2 = mysqli_fetch_assoc($c1));

echo $mar
?>