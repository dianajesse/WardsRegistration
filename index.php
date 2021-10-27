<?php

$FullName=$_POST['FullName'];
$Age=$_POST['Age'];
$Class=$_POST['Class'];
$TeacherName=$_POST['TeacherName'];
$mobile =$_POST['mobile'];
$Gender=$_POST['Gender'];

$conn = new mysqli("localhost", "root", "","firstDB");


$sql = "INSERT INTO testing(FullName,Age,Class,TeacherName,mobile,Gender)
VALUES ('$FullName','$Age','$Class','$TeacherName','$mobile','$Gender')";


if($conn->query($sql)===TRUE){

    echo "Entry successful";
}else{
    echo "Error:".$sql.$conn->error;
}



