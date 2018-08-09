<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                  <p class="t cent botli">新增次選單</p>
        <form method="post" action="" enctype="multipart/form-data" >

		<table width="80%" border="0" cellpadding="2">
	<tr>
		<td>次選單名稱:</td>
		<td><input type="text" name="suptt"/></td>
	</tr>
    <tr>
		<td>次選單網址:</td>
		<td><input type="text" name="nt"/></td>
	</tr>
    <input type="hidden" value="<?=$_GET["seq"]?>" name="addseq" >
	</table>
		
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    
	
        </form>
                                    </div>