<?php
$formid=$_GET["formid"];

$link =@ mysqli_connect("localhost","a1063308","a1063308","reservation");
$SQL="SELECT * FROM data WHERE formid='" . $formid . "';";

error_reporting(0); #關閉錯誤訊息
if($link){
  if ($result = mysqli_query($link,$SQL)){
  	while($row = mysqli_fetch_assoc($result)){

echo "<H4><B>PART 1</B></H4>";
echo "表單編號：".$row["formid"]."<br/>";
echo "時間：".$row["dattime"]."<br/>";
echo "姓名：".$row["name"]."<br/>";
echo "身分證字號：".$row["idnumber"]."<br/>";
echo "生日：".$row["birth"]."<br/>";
echo "性別：".$row["mygender"]."<br/>";
echo "學號：".$row["school_id"]."<br/>";
echo "系級：".$row["department"]."<br/>";
echo "身分別：".$row["status"]."<br/>";
echo "婚姻狀況：".$row["wedding"]."<br/>";
echo "身心障礙學生：".$row["disability"]."<br/>";
echo "住宿情況：".$row["stay"]."<br/>";
echo "聯絡電話：".$row["phone"]."<br/>";
echo "聯絡地址：".$row["addr"]."<br/>";
echo "常用信箱：".$row["mail"]."<br/>";
echo "緊急聯絡人一姓名：".$row["contect_name"]." / 關係：".$row["contect_rel"]." / 電話：".$row["contect_phone"]."<br/>";//<HR>

echo "<H4><B>PART 2</B></H4>";
echo "來談原因：".$row["reason"]."<br/>";
echo "來談主題：".$row["issue"]."<br/>";
echo "最近兩個星期身心狀態：".$row["health"]."<br/>";
echo "來談主題：";
// foreach ($row["issue"] as $x1){
// 	echo $x1."/";
// }echo "<br/>";

// echo "最近兩個星期身心狀態：";
// foreach ($row["health"] as $x2){
// 	echo $x2."/";
// }echo "<br/>";

echo "最近兩個星期的壓力指數(0-10)：".$row["pressure"]."<br/>";
echo "最近兩個星期有無傷害自己的念頭：".$row["injury"]."<br/>";
echo "諮商經驗：".$row["experience"]."<br/>";
echo "晤談安排：".$row["plan"]."<br/><br/>";
echo "醫療資訊："."<br/>";
echo "1.您是否有特別疾病史？".$row["check1"]."<br/>";
echo "2.您目前是否服用藥物？".$row["check2"]."<br/>";
echo "期望晤談次數：".$row["timess"]."<br/>";
echo "時效評估：".$row["evaluation"]."<br/>";
echo "對諮商的期待：".$row["message"]."<br/>";
echo "可諮商時間：".$row["time_interval"]."<br/>";
// echo "可諮商時間：";
// foreach ($row["time_interval"] as $x3){
// 	echo $x3."/";
// }echo "<br/>";

   }
  }
}

mysqli_close($link);
?>
<center><input type="button" value="回上一頁" onclick="location.href='formcheck.php'"></center>