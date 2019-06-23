<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin_feedback.css">
    <title>老師專區</title>
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
        <p class="intro">回饋表單</p>
        
        <?php
        
        error_reporting(0); #關閉錯誤訊息
        $link =@ mysqli_connect("localhost","a1063308","a1063308","reservation");
        $result = mysqli_query($link,$SQL); 
        $SQL="SELECT * FROM feedback";

        echo "<table>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>";
                echo "<td>資料</td><td>線上預約處理流程</td><td>諮商環境</td><td>諮商室的隔音效果</td><td>協助減緩焦慮與不安</td><td>協助解決困難</td><td>諮商師能替我守密</td>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row["No"]."</td><td>".$row["q1"]."</td><td>".$row["q2"]."</td><td>".$row["q3"]."</td><td>".$row["q4"]."</td><td>".$row["q5"]."</td><td>".$row["q6"]."</td>";
                }
            }

            echo "</table>";
        }

        mysqli_close($link);
        ?>
        <center><input type="button" value="回上一頁" onclick="location.href='last_page.php'"></center>
        <!-- <table cellpadding="5"  border='0'><tr><td><center><a href='last_page.php'>回上一頁<border-right width="1" size="1"  color="#000000"> <a/></center></td></tr></table> --> 

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