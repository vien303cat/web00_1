<?php
    if(!empty($_POST["txt"])){
        $sql = "insert into a_marquee value (NULL,'".$_POST["txt"]."','0')";
        mysqli_query($link,$sql);
        echo "<script> document.location.href='admin.php?do=admin&redo=ad' ; </script>";
    }

    if(!empty($_POST["word"][0])){
        $sql = "update a_marquee set a_marquee_display ='0'";
        mysqli_query($link,$sql);

        for($i=0;$i<count($_POST["my_no"]);$i++){
            $sql="update a_marquee set a_marquee_txt ='".$_POST["word"][$i]."' where a_marquee_seq='".$_POST["my_no"][$i]."';";
            mysqli_query($link,$sql);

            if(!empty($_POST["delete"][$i])){
                $sql = "delete from a_marquee where a_marquee_seq = '".$_POST["delete"][$i]."'";
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=ad' ; </script>";
            }
            if(!empty($_POST["myupdate"][$i])){
                $sql = "update a_marquee set a_marquee_display ='1' where a_marquee_seq='".$_POST["myupdate"][$i]."';" ;
                mysqli_query($link,$sql);
                echo "<script> document.location.href='admin.php?do=admin&redo=ad'; </script>";
            }
    
        }


        
    }

?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動態文字廣告管理</p>
        <form method="POST" >
    <table width="100%">
    	<tr class="yel">
        	<td width="80%">動態文字廣告</td><td width="10%">顯示</td><td width="10%">刪除</td>
                    </tr>
<?php 
$sql = "select * from a_marquee " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
<?php do{ ?>
    <tr class="yel">
    <td width="80%"><input style="width:60%;" type="text" value="<?=$c2['a_marquee_txt']?>" name="word[]" /></td>
    <input type="hidden" value="<?=$c2['a_marquee_seq']?>" name="my_no[]" >
    <td width="10%"><input type="checkbox" value="<?=$c2['a_marquee_seq']?>" name="myupdate[]" <?php if($c2['a_marquee_display'] == 1 ){ ?> checked <?php } ?>  /> </td>
    <td width="10%"><input type="checkbox" value="<?=$c2['a_marquee_seq']?>" name="delete[]" /> </td>
    </tr>
<?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_marquee_add.php?do=ad&#39;)" value="新增動態文字廣告"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                