<?php

#writing to a file

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$area=$_POST['areacode'];
$mobile=$_POST['telnum'];
$email=$_POST['emailid'];
$feedbacks=$_POST['feedback'];

$notes="name:".$fname." ".$lname."<br>"."areacode:".$area." "."Phone number:".$mobile."<br>"."email:".$email."<br>"."Feedback:".$feedbacks."<br>";

$file=fopen("record.txt",'a');

$written=fwrite($file,$notes);
header("Location:index.html")
?>