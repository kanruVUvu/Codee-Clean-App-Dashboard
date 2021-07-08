<?php
$servername="localhost";
$username="u226228762_stage";
$password="zk6PT*2R[";
$database="u226228762_stage";
$con=new mysqli($servername,$username,$password,$database);
if($con->connect_error)
{
	die("connection failed".$con->connect_error);
}
?>