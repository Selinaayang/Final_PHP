<?php

$numbering=$_GET["numbering"];
$dateti=$_GET["dateti"];
$time_interval=$_GET["time_interval"];
$school_id=$_GET["school_id"];
$consultant=$_GET["consultant"];

$link=mysqli_connect("localhost","a1063308","a1063308","reservation");
$SQLUpdate="SELECT * FROM ttime WHERE numbering='$numbering'";

if($result=mysqli_query($link,$SQLUpdate)){
	while ($row=mysqli_fetch_assoc($result)){
		echo "<form action='updateresult.php' method='GET'>";
		echo "諮商編號：".$row["numbering"]."</br>";
		echo "<input type=hidden value=".$row["numbering"]." name='numbering'></br>";
		echo "日期：<input type=text placeholder='EX：2019-06-12' value=".$row["dateti"]." name='dateti'></br>";
		echo "時段：<input type=text value=".$row["time_interval"]." name='time_interval'></br>";
		echo "學號：<input type=text value=".$row["school_id"]." name='school_id'></br>";
		echo "諮商師：<input type=text value=".$row["consultant"]." name='consultant'></br>";

		echo "<center><input type='submit' value='確認'></center>";
		echo "</form>";
	}
}

mysqli_close($link);

echo "<table border='1' cellpadding='0' cellspacing='0'>";
    echo "<tr>";  
    echo "<td colspan='2'>時段</td>";
    echo "</tr>";

echo "<tr>"; 
echo "<td>1</td>";
echo "<td>08:10-09:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>2</td>";
echo "<td>09:10-10:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>3</td>";
echo "<td>10:10-11:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>4</td>";
echo "<td>11:10-12:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>5</td>";
echo "<td>12:00-13:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>6</td>";
echo "<td>13:10-14:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>7</td>";
echo "<td>14:10-15:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>8</td>";
echo "<td>15:10-16:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>9</td>";
echo "<td>16:10-17:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>10</td>";
echo "<td>17:10-18:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>11</td>";
echo "<td>18:10-18:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>12</td>";
echo "<td>19:10-20:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>13</td>";
echo "<td>20:10-21:00</td>"; 
echo "</tr>";
echo "<tr>"; 
echo "<td>14</td>";
echo "<td>21:10-22:00</td>"; 
echo "</tr>";

echo "</table>";
?>