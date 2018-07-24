<?php 
$sql = "select * from a_title where a_title_display ='1'";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
$bannerimg = $c2["a_title_img"]; 
?>
<a href="index.php"><div class="ti">
<img src="img/<?=$bannerimg?>" height="100px" width="1024px" />
</div><!--標題--></a>