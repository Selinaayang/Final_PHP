<?php
session_start();

if ( !isset($_SESSION["n2"]) ) {
          $_SESSION["n2"] = 1;
        } else {
          $_SESSION["n2"]++;
        }
for($i=1;$i<=$_SESSION["n2"];$i++){
    $a=$i;
}
    $b="T".$a;
?>
<form action="tiitvl.php" method="GET">
<meta charset="utf-8">
<!-- 用GET的方式傳值到另一個網頁 -->
<input type="hidden" name="numbering" value="<?=$b?>">
日期：<input type="date" name="dateti"><br/>
時段：<select name="time_interval"  size="1">
     <option value="08:10-09:00" selected="True | False">08:10-09:00</option>
     <option value="09:10-10:00" selected="True | False">09:10-10:00</option>
     <option value="10:10-11:00" selected="True | False">10:10-11:00</option>
     <option value="11:10-12:00" selected="True | False">11:10-12:00</option>
     <option value="12:00-13:00" selected="True | False">12:00-13:00</option>
     <option value="13:10-14:00" selected="True | False">13:10-14:00</option>
     <option value="14:10-15:00" selected="True | False">14:10-15:00</option>
     <option value="15:10-16:00" selected="True | False">15:10-16:00</option>
     <option value="16:10-17:00" selected="True | False">16:10-17:00</option>
     <option value="17:10-18:00" selected="True | False">17:10-18:00</option>
     <option value="18:10-18:00" selected="True | False">18:10-18:00</option>
     <option value="19:10-20:00" selected="True | False">19:10-20:00</option>
     <option value="20:10-21:00" selected="True | False">20:10-21:00</option>
     <option value="21:10-22:00" selected="True | False">21:10-22:00</option></select></br>
學號：<input type="text" name="school_id"><br/>
諮商師：<input type="text" name="consultant">
<input type="submit" value="新增"><input type="button" value="取消" onclick="location.href='formcheck.php'">
</form>