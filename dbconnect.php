<?php

error_reporting(0); #關閉錯誤訊息
$formid=$_POST["formid"];
$dattime=$_POST["dattime"];
$name=$_POST["name"];
$idnumber=$_POST["idnumber"];
$birth=$_POST["birth"];
$mygender=$_POST["mygender"];
$school_id=$_POST["school_id"];
$department=$_POST["department"];
$status=$_POST["status"];
$wedding=$_POST["wedding"];
$disability=$_POST["disability"];
$stay=$_POST["stay"];
$phone=$_POST["phone"];
$addr=$_POST["addr"];
$mail=$_POST["mail"];
$contect_name=$_POST["contect_name"];
$contect_rel=$_POST["contect_rel"];
$contect_phone=$_POST["contect_phone"];
$reason=$_POST["reason"];
$issue=$_POST["issue"];
$allissue = implode ("/", $issue);
$health=$_POST["health"];
$allhealth = implode ("/", $health);
$pressure=$_POST["pressure"];
$injury=$_POST["injury"];
$experience=$_POST["experience"];
$plan=$_POST["plan"];
$check1=$_POST["check1"];
$check2=$_POST["check2"];
$timess=$_POST["timess"];
$evaluation=$_POST["evaluation"];
$message=$_POST["message"];
$time_interval=$_POST["time_interval"];
$alltii = implode ("/", $time_interval);


$link=mysqli_connect("localhost","a1063308","a1063308","reservation");

$SQLCreate="INSERT into data(formid,dattime,name,idnumber,birth,mygender,school_id,department,status,wedding,disability,stay,phone,addr,mail,contect_name,contect_rel,contect_phone,reason,issue,health,pressure,injury,experience,plan,check1,check2,timess,evaluation,message,time_interval) VALUES ('$formid',
'$dattime',
'$name',
'$idnumber',
'$birth',
'$mygender',
'$school_id',
'$department',
'$status',
'$wedding',
'$disability',
'$stay',
'$phone',
'$addr',
'$mail',
'$contect_name',
'$contect_rel',
'$contect_phone',
'$reason',
'$allissue',
'$allhealth',
'$pressure',
'$injury',
'$experience',
'$plan',
'$check1',
'$check2',
'$timess',
'$evaluation',
'$message',
'$alltii')";

$result=mysqli_query($link,$SQLCreate);


$SQL="SELECT * FROM data";

if($link){
    if ($result = mysqli_query($link,$SQL)){
        while($row = mysqli_fetch_assoc($result)){
            header("location:sucess.php");
        }
    }
}


mysqli_close($link);

?>