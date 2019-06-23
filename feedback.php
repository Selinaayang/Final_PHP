<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="feedback.css">
    <title>諮職組-我有話要說</title>
</head>
<body>
	<div class="header">
        <img src="logo1.jpg" alt="logo">
        <h1>諮商輔導組</h1>
        <div class="link">
            <a href="https://sa.nuk.edu.tw/ezfiles/35/1035/img/499/795905582.jpg">緊急校安專線</a>
            <a href="homepage.php">諮職組首頁</a>
            <a href="https://sa.nuk.edu.tw/bin/home.php">學務處</a>
            <a href="https://www.nuk.edu.tw/bin/home.php">回高大首頁</a>
        </div>
    </div>
    <div class="list">
        <ul>
            <p>服務選單</p>
            <li><a href="introduce.php">諮輔組簡介</a></li>
            <li><a href="form.php">諮商輔導預約系統</a></li>
            <li><a href="place.php">校內位置圖</a></li>
            <li><a href="feedback.php">回饋表單</a></li>
            <li><a href="resourse.php">相關資源介紹</a></li>
            <li><a href="check_admin.php">老師專區</a></li>
        </ul>   
    </div>
    <div class="main">
        <h1>回饋表單</h1>
        <div class="form">
        <form action="receive.php" method="get">
            <p>滿意程度請填1~5分</p>
<?php  
session_start();
if ( !isset($_SESSION["n3"]) ) {
          $_SESSION["n3"] = 1;
        } else {
          $_SESSION["n3"]++;
        }
for($i=1;$i<=$_SESSION["n3"];$i++){
    $c=$i;
}
?>
            <input type="hidden" value="<?=$c?>" name="No">
            1.是否滿意線上預約處理流程<input type="text" name="q1"></br>
            2.是否滿意諮商環境<input type="text" name="q2"></br>
            3.是否滿意諮商室的隔音效果<input type="text" name="q3"></br>
            4.是否滿意諮商協助減緩焦慮與不安<input type="text" name="q4"></br>
            5.是否滿意諮商師協助解決困難<input type="text" name="q5"></br>
            6.是否相信諮商師能替我守密<input type="text" name="q6"></br>
        
        </br><center><input type="submit" value="送出" class="sub"></center>
        </div>
        </form>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <p>國立高雄大學 學生事務處 Division of Student Affairs, NUK</p>
        <p>81148 高雄市楠梓區高雄大學路700號</p>  
        <p>700, Kaohsiung University Rd., Nanzih District, 811. Kaohsiung, Taiwan, R.O.C</p>   
        <p>[傳真：07-5919079] / [校園安全緊急專線：07-5917885]</p>  
    </div>
</body>
</html>