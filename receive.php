<?php

$q1 = $_GET["q1"];
$q2 = $_GET["q2"];
$q3 = $_GET["q3"];
$q4 = $_GET["q4"];
$q5 = $_GET["q5"];
$q6 = $_GET["q6"];
$No = $_GET["No"];


$link =@ mysqli_connect("localhost","a1063308","a1063308","reservation");

$SQLCreate = "INSERT into feedback(No,q1,q2, q3, q4, q5, q6) VALUES('$No','$q1','$q2','$q3','$q4','$q5','$q6')";  #新增資料
$result = mysqli_query($link,$SQLCreate); 


$SQL = "SELECT * FROM feedback";

if($link){
    if ($result = mysqli_query($link,$SQL)){
        while($row = mysqli_fetch_assoc($result)){
            header("location:sucess.php");
        }
    }
}

mysqli_close($link);


?>