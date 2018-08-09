<?php
include_once("head.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)?do=meg -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>卓越科技大學校園資訊系統</title>
<link href="./news_files/css.css" rel="stylesheet" type="text/css">
<script src="./news_files/jquery-1.9.1.min.js"></script>
<script src="./news_files/js.js"></script>
</head>

<body>
<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>
<iframe style="display:none;" name="back" id="back"></iframe>
	<div id="main">
    <?php include_once("bannerpic.php"); ?>
        	<div id="ms">
             	<div id="lf" style="float:left;">
            		<div id="menuput" class="dbor">
                    <!--主選單放此-->
                                                    <span class="t botli">主選單區</span>
                                                    <?php include_once("left.php"); ?>
                                                </div>
                    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    	<span class="t">進站總人數 : 
                        <?php include_once("people.php"); ?>             </span>
                    </div>
        		</div>
                <div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                	                     <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                                         <?php include_once("marquee.php"); ?> </marquee>
                    <div style="height:32px; display:block;"></div>
                                        <!--正中央-->
                        <div style="text-align:center;">



                        
<?php
$sql="select * from a_news where a_news_display ='1'";
$c1 = mysqli_query($link,$sql) ;
$allrow = mysqli_num_rows($c1);

if(!empty($_GET["page"])){
    $now_page = $_GET["page"]  ;
}else{ $now_page = 1 ; }

$add_page = 5 ;
$open_page = ( $now_page - 1 ) *  $add_page ; 
$allpage = ceil($allrow/$add_page);

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

$sql = "select * from a_news limit $open_page , $add_page  " ; 
$c1 = mysqli_query($link,$sql) ;
$c2 = mysqli_fetch_assoc($c1);
?>


<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
					
                    <tr>
                      <td width="100%" align="center"><span class="t botli">更多最新消息顯示</span></td>
                    
                    </tr>
                  </table>

<ul class="ssaa" style="list-style-type:decimal;">
 <?php do{ ?>
 <li>
<?=mb_substr($c2['a_news_txt'],0,10,"utf-8");?> <span class="all" style="display:none;" ><?=nl2br($c2['a_news_txt'])?></span>
 </li>
 <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
 
</ul>

      <a href ="newsdata.php?page=<?=$front_page?>"> < </a>
      <?php
      for($i=1;$i<=$allpage;$i++){ 
          if($i == $now_page){
            echo "<span style='font-size:36px;color:#F00;'>".$i."</span>" ;
          }else{ echo "<a href ='newsdata.php?page=".$i."'>".$i."</a>" ; }
          
       } ?>
       
      <a href ="newsdata.php?page=<?=$next_page?>"> > </a>

<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 200px; left: 250px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
    <script>
    $(".ssaa li").hover(
        function ()
        {
            $("#altt").html("<pre>"+$(this).children(".all").html()+"</pre>")
            $("#altt").show()
        }
    )
    $(".ssaa li").mouseout(
        function()
        {
            $("#altt").hide()
        }
    )
    </script>


</div>
    </div>
	                </div>
                <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html(""+$(this).children(".all").html()+"").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
                        </script>
                                 <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                	<!--右邊-->   
                	<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;login.php?do=admin&#39;)">管理登入</button>
                	<div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
						<div align='center'><img src="img/01E01.jpg" onclick="pp(1)"></div>
						<?php include_once("image.php"); ?>
						<div align='center'><img src="img/01E02.jpg" onclick="pp(2)"></div>
						                        <script>
                        	var nowpage=0,num=<?=$x?>;
							function pp(x)
							{
								var s,t;
								if(x==1&&nowpage-1>=0)
								{nowpage--;}
								if(x==2&&(nowpage+1)<=num-3)
								{nowpage++;}
								$(".im").hide()
								for(s=0;s<=2;s++)
								{
									t=s*1+nowpage*1;
									$("#ssaa"+t).show()
								}
							}
							pp(1)
                        </script>
                    </div>
                </div>
                            </div>
                            <div style="clear:both;"></div>
            	<div style="    top: -135px;width:1024px; left:240px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
                	<span class="t" style="line-height:123px;"><?php include_once('bot.php'); ?></span>
                </div>
    </div>

</body></html>