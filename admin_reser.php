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
        $formid=$_GET["formid"];
        $link =@ mysqli_connect("localhost","a1063308","a1063308","reservation");
        $SQL="SELECT * FROM data WHERE formid='" . $formid . "';";

        error_reporting(0); #關閉錯誤訊息

        echo "<table>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>"; 
                echo "<td>姓名</td><td>身分證字號</td><td>生日</td><td>性別</td><td>學號</td><td>系級</td><td>身分別</td><td>婚姻狀況</td><td>身心障礙生</td><td>住宿情況</td><td>連絡電話</td><td>聯絡地址</td><td>常用信箱</td><td>緊急聯絡人姓名</td><td>緊急聯絡人關係</td><td>緊急聯絡人電話</td>";
                echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row["name"]."</td><td>".$row["idnumber"]."</td><td>".$row["birth"]."</td><td>".$row["mygender"]."</td><td>".$row["school_id"]."</td><td>".$row["department"]."</td><td>".$row["status"]."</td><td>".$row["wedding"]."</td><td>".$row["disability"]."</td><td>".$row["stay"]."</td><td>".$row["phone"]."</td><td>".$row["addr"]."</td><td>".$row["mail"]."</td><td>".$row["contect_name"]."</td><td>".$row["contect_rel"]."</td><td>".$row["contect_phone"]."</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }
        echo "</br>";
        echo "<table>";
        if($link){
            if ($result = mysqli_query($link,$SQL)){
                echo "<tr>";
                echo "<td>來談原因</td><td>來談主題</td><td>最近兩星期身心狀態</td><td>壓力指數</td><td>自傷念頭</td><td>有無諮商經驗</td><td>晤談安排</td><td>特別疾病史</td><td>是否服用藥物</td><td>期望晤談次數</td><td>時效評估</td><td>對諮商期待</td><td>可諮商時間</td>";
                echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row["reason"]."</td><td>".$row["issue"]."</td><td>".$row["health"]."</td><td>".$row["pressure"]."</td><td>".$row["injury"]."</td><td>".$row["experience"]."</td><td>".$row["plan"]."</td><td>".$row["check1"]."</td><td>".$row["check2"]."</td><td>".$row["timess"]."</td><td>".$row["evaluation"]."</td><td>".$row["message"]."</td><td>".$row["time_interval"]."</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }

        mysqli_close($link);
        ?>
        <table table align="center" cellpadding="5"  border='0'><tr><td><center><a href='last_page.php'>回上一頁<border-right width="1" size="1"  color="#000000"> <a/></center></td></tr></table>

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