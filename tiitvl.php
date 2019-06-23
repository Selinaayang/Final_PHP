<?php

$numbering=$_GET["numbering"];
$dateti=$_GET["dateti"];
$time_interval=$_GET["time_interval"];
$school_id=$_GET["school_id"];
$consultant=$_GET["consultant"];

$link=mysqli_connect("localhost","a1063308","a1063308","reservation");
$SQLCreate="INSERT into ttime(numbering,dateti,time_interval,school_id,consultant) VALUES ('$numbering','$dateti','$time_interval','$school_id','$consultant')";
$result=mysqli_query($link,$SQLCreate);
$SQL="SELECT * FROM ttime";

echo "<table border='1' cellpadding='0' cellspacing='0'>";
if($result=mysqli_query($link,$SQL)){
	echo "<tr>";  
    echo "<td>諮商編號</td><td>日期</td><td>時段</td><td>學號</td><td>諮商師</td><td>功能1</td><td>功能2</td>";
    echo "</tr>";
	while ($row=mysqli_fetch_assoc($result)) {	
		echo "<tr>";
	    echo "<td>".$row["numbering"]."</td>".
	    "<td>".$row["dateti"]."</td>".
	    "<td>".$row["time_interval"]."</td>".
	    "<td>".$row["school_id"]."</td>".
	    "<td>".$row["consultant"]."</td>".
	    "<td>"."<a href='update.php?numbering=".$row["numbering"]."'>修改</a>"."</td>".
	    "<td>"."<a href='del.php?numbering=".$row["numbering"]."'>刪除</a>"."</td>";
	    echo "</tr>";
	    
	}
}
echo "</table>";

mysqli_close($link);
?>

<center><input type="button" value="檢視表單" onclick="location.href='formcheck.php'"></center>