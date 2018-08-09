<?php
    if(!empty($_POST["txt"])){
        $sql = "insert into a_mid value (NULL,'".$_POST["txt"]."','".$_POST["nt"]."','1')";
        mysqli_query($link,$sql);
        echo "<script> document.location.href='admin.php?do=admin&redo=menu' ; </script>";
    }

    if(!empty($_POST["addseq"])){
        $sql = "insert into a_sup value(NULL,'".$_POST["suptt"]."','".$_POST["nt"]."','".$_POST["addseq"]."')";
        mysqli_query($link,$sql);
    }

    if(!empty($_POST["word"][0])){
        $sql = "update a_mid set a_mid_display ='0'";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){
            $sql="update a_mid set a_mid_txt ='".$_POST["word"][$i]."',a_mid_net='".$_POST["net"][$i]."' where a_mid_seq='".$_POST["my_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["delete"][$i])){
                $sql = "delete from a_mid where a_mid_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=menu' ; </script>";
            }
            if(!empty($_POST["myupdate"][$i])){
                $sql = "update a_mid set a_mid_display ='1' where a_mid_seq='".$_POST["myupdate"][$i]."';" ;
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=menu'; </script>";
            }
    
        }
    }

    if(!empty($_POST["suptxt"][0])){

        for($i=0;$i<count($_POST["sup_no"]);$i++){
            $sql="update a_sup set a_sup_txt ='".$_POST["suptxt"][$i]."',a_sup_net='".$_POST["supnet"][$i]."' where a_sup_seq='".$_POST["sup_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["supdelete"][$i])){
                $sql = "delete from a_sup where a_sup_seq = '".$_POST["supdelete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=menu' ; </script>";
            }
    
        }
    }

?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">選單管理</p>
        <form method="POST" >
    <table width="100%">
    	<tr class="yel">
        	<td width="30%">主選單名稱</td><td width="30%">選單連結網址</td><td width="10%">次選單數</td><td width="10%">顯示</td><td width="10%">刪除</td><td width="10%"></td>
                    </tr>
<?php 
$sql = "select * from a_mid " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
<?php do{
    $sqll = "select * from a_sup where a_sup_midseq = '".$c2["a_mid_seq"]."' " ;
    $cc1 = mysqli_query($link,$sqll);
    $row = mysqli_num_rows($cc1);
    ?>
    <tr class="yel">
    <td width="30%"><input style="width:80%;" type="text" value="<?=$c2['a_mid_txt']?>" name="word[]" /></td>
    <td width="30%"><input style="width:80%;" type="text" value="<?=$c2['a_mid_net']?>" name="net[]" /></td>
    <input type="hidden" value="<?=$c2['a_mid_seq']?>" name="my_no[]" >
    <td width="10%"><?=$row?> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_mid_seq']?>" name="myupdate[]" <?php if($c2['a_mid_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_mid_seq']?>" name="delete[]" /> </td>
    <td width="10%"><input type="button" value="編輯次選單" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_menu_sup.php?do=ad&seq=<?=$c2["a_mid_seq"]?>&#39;)" > </td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_menu_add.php?do=ad&#39;)" value="新增主選單"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                