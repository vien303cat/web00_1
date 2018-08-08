<?php
    if(!empty($_POST["txt"]) && $_POST["pw"] == $_POST["pw2"] ){
        $sql = "insert into a_member value (NULL,'".$_POST["txt"]."','".$_POST["pw"]."')";
        mysqli_query($link,$sql);
        echo "<script> document.location.href='admin.php?do=admin&redo=admin' ; </script>";
    }

    if(!empty($_POST["word"][0])){
        $sql = "update a_member set a_member_display ='0'";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){
            $sql="update a_member set a_member_acc ='".$_POST["word"][$i]."',a_member_pw ='".$_POST["pww"][$i]."' where a_member_seq='".$_POST["my_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["delete"][$i])){
                $sql = "delete from a_member where a_member_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=admin' ; </script>";
            }
    
        }


        
    }

?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動態文字廣告管理</p>
        <form method="POST" >
    <table width="100%">
    	<tr class="yel">
        	<td width="45%">帳號</td><td width="45%">密碼</td><td width="20%">刪除</td>
                    </tr>
<?php 
$sql = "select * from a_member " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
<?php do{ ?>
    <tr class="yel">
    <td width="45%"><input style="width:60%;" type="text" value="<?=$c2['a_member_acc']?>" name="word[]" /></td>
    <input type="hidden" value="<?=$c2['a_member_seq']?>" name="my_no[]" >
    <td width="45%"><input style="width:60%;" type="password" value="<?=$c2['a_member_pw']?>" name="pww[]" /></td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_member_seq']?>" name="delete[]" /> </td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_admin_add.php?do=ad&#39;)" value="新增管理者帳號"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                