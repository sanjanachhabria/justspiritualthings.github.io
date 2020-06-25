<?php

$con= mysqli_connect('localhost','root');
if($con){

	echo "connection successful";
}else{
	echo "no connection";
}
mysqli_select_db($con,'justspiritualthings');

$name=$_POST['name'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$comment=$_POST['comment'];

$query="insert into userinfodata(name, email, mobileno, comment)
values('$name','$email','$mobileno','$comment')";
mysqli_query($con ,$query);
header('location:index.php');

?>