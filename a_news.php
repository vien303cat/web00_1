<?php 
$sql = "select * from a_news " ; 
$c1 = mysqli_query($link,$sql) ;
$allrow = mysqli_num_rows($c1);

if(!empty($_GET["page"])){
    $now_page = $_GET["page"]  ;
}else{ $now_page = 1 ; }

$add_page = 4 ;
$open_page = ( $now_page - 1 ) *  $add_page ; 
$allpage = ceil($allrow/$add_page);
if($now_page == 1){
    $front_page = 1 ;
    $next_page  = $now_page + 1 ;
}elseif($now_page == $allpage){
    $front_page = $now_page - 1 ;
    $next_page  = $allpage ;
}else{
    $front_page = $now_page - 1 ;
    $next_page  = $now_page + 1 ;
}

?>


<?php
    if(!empty($_POST["txt"])){
        $sql = "insert into a_news value (NULL,'".$_POST["txt"]."','0')";
        mysqli_query($link,$sql);
        echo "<script> document.location.href='admin.php?do=admin&redo=news' ; </script>";
    }

    if(!empty($_POST["word"][0])){
        $sql = "update a_news set a_news_display ='0' limit $open_page , $add_page  ";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){
            $sql="update a_news set a_news_txt ='".$_POST["word"][$i]."' where a_news_seq='".$_POST["my_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["delete"][$i])){
                $sql = "delete from a_news where a_news_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=news' ; </script>";
            }
            if(!empty($_POST["myupdate"][$i])){
                $sql = "update a_news set a_news_display ='1' where a_news_seq='".$_POST["myupdate"][$i]."';" ;
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=news'; </script>";
            }
    
        }


        
    }
?> 

							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">最新消息資料管理</p>
        <form method="POST" >
    <table width="100%">
    	<tr class="yel">
        	<td width="80%">最新消息資料內容</td><td width="10%">顯示</td><td width="10%">刪除</td>
                    </tr>
<?php
$sql = "select * from a_news limit $open_page , $add_page  " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1);
?>
<?php do{ ?>
    <tr class="yel">
    <td width="80%"><textarea name="word[]" cols="45" rows="5" width="350"><?=$c2['a_news_txt']?></textarea></td>
    <input type="hidden" value="<?=$c2['a_news_seq']?>" name="my_no[]" >
    <td width="10%"><input type="checkbox" value="<?=$c2['a_news_seq']?>" name="myupdate[]" <?php if($c2['a_news_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_news_seq']?>" name="delete[]" /> </td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style=" width:100%;">
           <tr>
    <td colspan="2" align="center">
    <a href ="admin.php?do=admin&redo=news&page=<?=$front_page?>"> < </a>
      <?php
      for($i=1;$i<=$allpage;$i++){ 
          if($i == $now_page){
            echo "<span style='font-size:36px;color:#F00;'>".$i."</span>" ;
          }else{ echo "<a href ='admin.php?do=admin&redo=news&page=".$i."'>".$i."</a>" ; }
          
       } ?>
       
      <a href ="admin.php?do=admin&redo=news&page=<?=$next_page?>"> > </a>

    </td>
  </tr>
     <tr>
      <td width="100px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_news_add.php?do=ad&#39;)" value="新增最新消息資料"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                

