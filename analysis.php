<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="analysis.css">
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
        <p class="intro">表單分析</p>
        <?php
        
        error_reporting(0); #關閉錯誤訊息
        $link =@ mysqli_connect("localhost","a1063308","a1063308","reservation"); 
        mysqli_select_db($link, "feedback"); //選擇資料庫
        $result = mysqli_query($link,$SQL); 
        $SQL="SELECT * FROM feedback";

        echo "<table>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>";
                echo "<td>資料</td><td>線上預約處理流程</td><td>諮商環境</td><td>諮商室的隔音效果</td><td>協助減緩焦慮與不安</td><td>協助解決困難</td><td>諮商師能替我守密</td>";
                while($row = mysqli_fetch_assoc($result)){
                    $allq1 += $row["q1"];
                    $allq2 += $row["q2"];
                    $allq3 += $row["q3"];
                    $allq4 += $row["q4"];
                    $allq5 += $row["q5"];
                    $allq6 += $row["q6"];
                    $i += 1;
                    
                }
                $avgq1 = round($allq1/$i,2);
                $avgq2 = round($allq2/$i,2);
                $avgq3 = round($allq3/$i,2);
                $avgq4 = round($allq4/$i,2);
                $avgq5 = round($allq5/$i,2);
                $avgq6 = round($allq6/$i,2);
                echo "<tr>";
                echo "<td>平均</td><td>".$avgq1."</td><td>".$avgq2."</td><td>".$avgq3."</td><td>".$avgq4."</td><td>".$avgq5."</td><td>".$avgq6."</td>";

            }
            echo "</table>";
        }

        mysqli_close($link);
        ?> 
        <?php
        
        error_reporting(0); #關閉錯誤訊息
        $link =@ mysqli_connect("localhost","a1063308","a1063308","reservation"); //選擇資料庫
        $result = mysqli_query($link,$SQL); 
        $SQL="SELECT * FROM data";

        echo "<table>";
        echo "<h2>來談原因分析:</h2>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>";
                echo "<td>資料</td><td>原因</td>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo "<td>$i</td><td>".$row["issue"]."</td>";
                    $i +=1;
                }
            }
            
            echo "</table>";
        }

        mysqli_close($link);
        ?>
        <center><input type="button" value="回上一頁" onclick="location.href='last_page.php'"></center>

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