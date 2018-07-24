<?php
    if(!empty($_POST["txt"])){
        $ee = explode(".",$_FILES['img']['name'])[1];
        $time = strtotime("+6hour");
        $imgname = $time.".".$ee;
        $sql = "insert into a_title value (NULL,'$imgname','".$_POST["txt"]."','0')";
        mysqli_query($link,$sql);
        copy($_FILES["img"]["tmp_name"],"img/".$imgname);
        echo "<script> document.location.href='admin.php?do=admin&redo=title' ; </script>";
    }

    if(!empty($_POST["word"][0])){
        $sql = "update a_title set a_title_display ='0'";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){
            $sql="update a_title set a_title_txt ='".$_POST["word"][$i]."' where a_title_seq='".$_POST["my_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["delete"][$i])){
                $sql = "select a_title_img from a_title where a_title_seq ='".$_POST["delete"][$i]."'" ;
                $c1 = mysqli_query($link,$sql);
                $c2 = mysqli_fetch_assoc($c1);
                unlink("img/".$c2["a_title_img"]);
                $sql = "delete from a_title where a_title_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=title' ; </script>";
            }
        }

        if(!empty($_POST["myupdate"])){
            $sql = "update a_title set a_title_display ='1' where a_title_seq='".$_POST["myupdate"]."';" ;
            mysqli_query($link,$sql);
            echo "<script> document.location.href='admin.php?do=admin&redo=title'; </script>";
        }

        
    }

    if(!empty($_POST["picdata"])){
        
        copy($_FILES["picupdate"]["tmp_name"],"img/".$_POST["picname"]);
        echo "<script> document.location.href='admin.php?do=admin&redo=title' ; </script>";
    }

?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">網站標題管理</p>
        <form method="POST" >
    <table width="100%">
    	<tr class="yel">
        	<td width="45%">網站標題</td><td width="23%">替代文字</td><td width="7%">顯示</td><td width="7%">刪除</td><td></td>
                    </tr>
<?php 
$sql = "select * from a_title " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
<?php do{ ?>
    <tr class="yel">
    <td width="45%"><img src="img/<?=$c2['a_title_img']?>" style="height:30px;width:300px" /></td>
    <td width="23%"><input type="text" value="<?=$c2['a_title_txt']?>" name="word[]" /></td>
    <input type="hidden" value="<?=$c2['a_title_seq']?>" name="my_no[]" >
    <td width="7%"><input type="radio" value="<?=$c2['a_title_seq']?>" name="myupdate" <?php if($c2['a_title_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="7%"><input type="checkbox" value="<?=$c2['a_title_seq']?>" name="delete[]" /> </td>
    <td><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_title_pic.php?do=title&picno=<?=$c2['a_title_seq']?>&#39;)" value="更新圖片"></td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_title_add.php?do=title&#39;)" value="新增網站標題圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                