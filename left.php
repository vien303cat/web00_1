<?php 
$sql = "select * from a_mid where a_mid_display='1';";
$c1  = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
do{
?>
<div class="mainmu"> 
    <a href ='<?=$c2["a_mid_net"]?>' > <?=$c2["a_mid_txt"]?> </a>
    
    <?php 
    $sqll = "select * from a_sup where a_sup_midseq='".$c2["a_mid_seq"]."';";
    $cc1  = mysqli_query($link,$sqll);
    $cc2 = mysqli_fetch_assoc($cc1);
    do{ ?>
        <div class ="mw" style="display:none;">
        <a href ='<?=$cc2["a_sup_net"]?>' > <?=$cc2["a_sup_txt"]?> </a>
        </div>
    <?php }while($cc2 = mysqli_fetch_assoc($cc1)) ?>
    


</div>
<?php }while($c2 = mysqli_fetch_assoc($c1)) ?>