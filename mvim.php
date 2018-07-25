<?php
$sql = "select * from a_mvim where a_mvim_display='1'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
$x = 0 ;
do{ ?>

lin[<?=$x?>] = "img/<?=$c2["a_mvim_img"]?>";

<?php $x++ ; } while($c2  = mysqli_fetch_assoc($c1))
?>