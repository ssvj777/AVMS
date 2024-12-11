<?php

$name=$_POST["un"];
$cat=$_POST["cat"];
$cell=$_POST["mob"];
$add=$_POST["add"];
$apn=$_POST["apn"];
$flr=$_POST["floor"];
$who=$_POST["who"];
$rsn=$_POST["rsn"];
$mark=$_POST["mark"];

$c=new mysqli("localhost","root","","AVMS");
$sql=$c->prepare('insert into Visitors values(?,?,?,?,?,?,?,?,?,?,?)');
$sql->bind_param('sssssssssss',$id,$name,$cat,$cell,$add,$apn,$flr,$who,$rsn,$dt,$vis);
$sql->execute();
$c->close();

echo "<script> alert('Visitor details added Successfully');window.location='Visitors.html' </script>";

?>
