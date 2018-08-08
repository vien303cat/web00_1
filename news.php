<?php
$sql="select * from a_news where a_news_display ='1'";
$c1 = mysqli_query($link,$sql) ;
$allrow = mysqli_num_rows($c1);

if(!empty($_GET["page"])){
    $now_page = $_GET["page"]  ;
}else{ $now_page = 1 ; }

$add_page = 5 ;
$open_page = ( $now_page - 1 ) *  $add_page ; 

$sql = "select * from a_news limit $open_page , $add_page  " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1);
?>


<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
					
                    <tr>
                      <td width="90%" align="center"><span class="t botli">最新消息區</span></td>
                      <td align="right"><?php if($allrow >5){ ?><a href='newsdata.php'>More... </a><?php } ?> </td>
                    </tr>
                  </table>

<ul class="ssaa" style="list-style-type:decimal;">
 <?php do{ ?>
 <li>
<?=mb_substr($c2['a_news_txt'],0,10,"utf-8");?> <span class="all" style="display:none;" ><?=$c2['a_news_txt']?></span>
 </li>
 <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
</ul>