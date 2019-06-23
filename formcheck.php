<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin_reser.css">
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
        <p class="intro">檢視表單</p>
    
        <?php
        
        error_reporting(0); #關閉錯誤訊息
        $link =@ mysqli_connect("localhost","a1063308","a1063308","reservation");
        $result = mysqli_query($link,$SQL); 
        $SQL="SELECT * FROM data";

        echo "<table border='1' cellpadding='0' cellspacing='0'>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>";  
                echo "<td>表單編號</td><td>時間</td><td>學號</td><td>姓名</td><td>身分別</td><td>來談原因</td><td>可諮商時間<a href=addtime.php>(排定時間)</a></td>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>"."<a href='formresult.php?formid=".$row["formid"]."'>".$row["formid"]."</a>"."</td>
                    <td>".$row["dattime"]."</td>
                    <td>".$row["school_id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["mygender"]."</td>
                    <td>".$row["reason"]."</td>
                    <td>".$row["time_interval"]."</td>";
                    echo "</tr>";
                }
                //admin_reser.php(表單表格印出)
                // formresult.php(完整表單內容)
            }
            echo "</table>";
        }

        mysqli_close($link);
        ?>
        <center><input type="button" value="回上一頁" onclick="location.href='last_page.php'"></center>
        <!-- <table table align="center" cellpadding="5"  border='0'><tr><td><a href='last_page.php'>回上一頁<border-right width="1" size="1"  color="#000000"> <a/></td></tr></table> -->

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