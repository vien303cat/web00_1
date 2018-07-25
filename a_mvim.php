<?php
    if(!empty($_POST["upload"])){
        $ee = explode(".",$_FILES['img']['name'])[1];
        $time = strtotime("+6hour");
        $imgname = $time.".".$ee;
        $sql = "insert into a_mvim value (NULL,'$imgname','0')";
        mysqli_query($link,$sql);
        copy($_FILES["img"]["tmp_name"],"img/".$imgname);
        echo "<script> document.location.href='admin.php?do=admin&redo=mvim' ; </script>";
    }

    if(!empty($_POST["my_no"][0])){
        $sql = "update a_mvim set a_mvim_display ='0'";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){

            if(!empty($_POST["delete"][$i])){
                $sql = "select a_mvim_img from a_mvim where a_mvim_seq ='".$_POST["delete"][$i]."'" ;
                $c1 = mysqli_query($link,$sql);
                $c2 = mysqli_fetch_assoc($c1);
                unlink("img/".$c2["a_mvim_img"]);
                $sql = "delete from a_mvim where a_mvim_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=mvim' ; </script>";
            }

            if(!empty($_POST["myupdate"][$i])){
                $sql = "update a_mvim set a_mvim_display ='1' where a_mvim_seq='".$_POST["myupdate"][$i]."';" ;
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=mvim'; </script>";
            }
        }

        
    }

    if(!empty($_POST["picdata"])){
        
        copy($_FILES["picupdate"]["tmp_name"],"img/".$_POST["picname"]);
        echo "<script> document.location.href='admin.php?do=admin&redo=mvim' ; </script>";
    }

?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動畫圖片管理</p>
        <form method="POST" >
    <table width="100%">
    <tr class="yel">
        	<td width="70%">動畫圖片</td><td width="10%">顯示</td><td width="10%">刪除</td><td width="10%"></td>
                    </tr>
<?php 
$sql = "select * from a_mvim " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
<?php do{ ?>
    <tr class="yel">
    <td width="70%"><embed src="img/<?=$c2['a_mvim_img']?>" style="height:150px;" /></embed></td>
    <input type="hidden" value="<?=$c2['a_mvim_seq']?>" name="my_no[]" >
    <td width="10%"><input type="checkbox" value="<?=$c2['a_mvim_seq']?>" name="myupdate[]" <?php if($c2['a_mvim_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_mvim_seq']?>" name="delete[]" /> </td>
    <td width="10%"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_mvim_pic.php?do=mvim&picno=<?=$c2['a_mvim_seq']?>&#39;)" value="更新圖片"></td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_mvim_add.php?do=mvim&#39;)" value="新增動畫圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                