<?php
    if(!empty($_POST["txt"])){
        $sql = "update people set people_num = '".$_POST["txt"]."'";
        mysqli_query($link,$sql);
        echo "<script> document.location.href='admin.php?do=admin&redo=total' ; </script>";
    }



?> 


							   <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">進站總人數管理</p>
        <form method="POST" >
    <table width="100%">
    <?php 
$sql = "select * from people " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1) ;
?>
    	<tr class="yel">
        	<td width="50%">進站總人數</td><td width="50%"><input style="width:80%;" name="txt" type="text" value="<?=$c2['people_num']?>" ></td>
                    </tr>

  </table>
           <table style="margin-top:40px; width:70%;">
     <tr>
      <td width="200px"><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </table>    

        </form>
                                    </div>
                                                