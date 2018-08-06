
							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">校園映像管理</p>
        <form method="POST" >
    <table width="100%">
    <tr class="yel">
        	<td width="70%">校園映像資料圖片</td><td width="10%">顯示</td><td width="10%">刪除</td><td width="10%"></td>
                    </tr>
<?php 
$sql = "select * from a_image " ; 
$c1 = mysqli_query($link,$sql) ;
$row = mysqli_num_rows($c1);


if(!empty($_GET["page"])){
    $now_page = $_GET["page"];
}else{$now_page = 1 ;}
$page_add = 3 ;
$open_page = ($now_page - 1 ) * $page_add ;
$allpage = ceil($row/$page_add);

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
    if(!empty($_POST["upload"])){
        $ee = explode(".",$_FILES['img']['name'])[1];
        $time = strtotime("+6hour");
        $imgname = $time.".".$ee;
        $sql = "insert into a_image value (NULL,'$imgname','0')";
        mysqli_query($link,$sql);
        copy($_FILES["img"]["tmp_name"],"img/".$imgname);
        echo "<script> document.location.href='admin.php?do=admin&redo=image' ; </script>";
    }

    if(!empty($_POST["my_no"][0])){
        $sql = "update a_image set a_image_display ='0' limit $open_page,$page_add";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){

            if(!empty($_POST["delete"][$i])){
                $sql = "select a_image_img from a_image where a_image_seq ='".$_POST["delete"][$i]."'" ;
                $c1 = mysqli_query($link,$sql);
                $c2 = mysqli_fetch_assoc($c1);
                unlink("img/".$c2["a_image_img"]);
                $sql = "delete from a_image where a_image_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=image' ; </script>";
            }

            if(!empty($_POST["myupdate"][$i])){
                $sql = "update a_image set a_image_display ='1' where a_image_seq='".$_POST["myupdate"][$i]."';" ;
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=image'; </script>";
            }
        }

        
    }

    if(!empty($_POST["picdata"])){
        
        copy($_FILES["picupdate"]["tmp_name"],"img/".$_POST["picname"]);
        echo "<script> document.location.href='admin.php?do=admin&redo=image' ; </script>";
    }




$sql = "select * from a_image limit $open_page,$page_add ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>
<?php do{ ?>
    <tr class="yel">
    <td width="70%"><embed src="img/<?=$c2['a_image_img']?>" style="height:150px;" /></embed></td>
    <input type="hidden" value="<?=$c2['a_image_seq']?>" name="my_no[]" >
    <td width="10%"><input type="checkbox" value="<?=$c2['a_image_seq']?>" name="myupdate[]" <?php if($c2['a_image_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_image_seq']?>" name="delete[]" /> </td>
    <td width="10%"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_image_pic.php?do=image&picno=<?=$c2['a_image_seq']?>&#39;)" value="更新圖片"></td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
  <table style="width:100%;">
     <tr>
      <td width="70%" align="center" valign="middle">
      <a href ="admin.php?do=admin&redo=image&page=<?=$front_page?>"> < </a>
      <?php
      for($i=1;$i<=$allpage;$i++){ 
          if($i == $now_page){
            echo "<span style='font-size:36px;color:#F00;'>".$i."</span>" ;
          }else{ echo "<a href ='admin.php?do=admin&redo=image&page=".$i."'>".$i."</a>" ; }
          
       } ?>
       
      <a href ="admin.php?do=admin&redo=image&page=<?=$next_page?>"> > </a>
      </td>
     </tr>
    </table>    
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_image_add.php?do=image&#39;)" value="新增校園映像"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                