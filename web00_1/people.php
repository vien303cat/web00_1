<?php
if(empty($_SESSION["login"])){
    $_SESSION["login"] = 1 ;
    $sql = "update people set people_num = people_num + 1";
    mysqli_query($link,$sql);
}
$sql = "select * from people" ;
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
echo $c2["people_num"];
?>