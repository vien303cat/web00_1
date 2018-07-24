<?php
include_once("head.php");
$sql = "select * from a_title where a_title_seq ='".$_GET['picno']."'";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1); 
?>
							
							<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                  <p class="t cent botli">更新圖片</p>
        <form method="post" action="" enctype="multipart/form-data" >

		<table width="80%" border="0" cellpadding="2">
	<tr>
		<td>標題區圖片:</td>
		<td><input type="file" name="picupdate"/></td>
		<input type="hidden" value="<?=$_GET['picno']?>" name="picdata">
		<input type="hidden" value="<?=$c2["a_title_img"]?>" name="picname">
	</tr>

	</table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="修改"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    
	
        </form>
                                    </div>