<?php
include_once("head.php");





$sql = "select * from a_sup where a_sup_midseq = '".$_GET["seq"]."'";
$c1  = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
?>


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                  <p class="t cent botli">次選單管理</p>
        <form method="post" action="" enctype="multipart/form-data" >

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="40%" align="center">次選單名稱</td>
    <td width="40%" align="center">次選單連結網址</td>
    <td width="20%" align="center">刪除</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td width="40%" align="center"><input type="text" value="<?=$c2["a_sup_txt"]?>" name="suptxt[]" ></td>
    <td width="40%" align="center"><input type="text" value="<?=$c2["a_sup_net"]?>" name="supnet[]" ></td>
    <td width="20%" align="center"><input type="checkbox" value="<?=$c2['a_sup_seq']?>" name="supdelete[]" /></td>
    <input type="hidden" value="<?=$c2['a_sup_seq']?>" name="sup_no[]" >
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>

</table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_menu_supadd.php?do=ad&seq=<?=$_GET["seq"]?>&#39;)" value="新增次選單"></td>
     </tr>
    </tbody></table>    
	
        </form>
                                    </div>