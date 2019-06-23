<?php
$link=mysqli_connect("localhost","a1063308","a1063308","reservation");
$SQL="SELECT * FROM ttime";
echo "<table border='1' cellpadding='0' cellspacing='0'>";
if($result=mysqli_query($link,$SQL)){
    echo "<tr>";  
    echo "<td>諮商編號</td><td>日期</td><td>時段</td><td>學號</td><td>諮商師</td>";
    echo "</tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["numbering"]."</td>".
        "<td>".$row["dateti"]."</td>".
        "<td>".$row["time_interval"]."</td>".
        "<td>".$row["school_id"]."</td>".
        "<td>".$row["consultant"]."</td>";
        echo "</tr>";
    }
}
echo "</table>";

mysqli_close($link);
?>
</br></br>
<center><input type="button" value="回上一頁" onclick="location.href='last_page.php'">&nbsp;<input type="button" value="排定時間" onclick="location.href='tiitvl.php'"></center>