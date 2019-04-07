<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "student";

$conn = new mysqli($servername,$username,$pass,$dbname);

if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}
$name=$_POST["name"];
$id=$_POST["id"];
$dept=$_POST["dept"];
$year=$_POST["year"];
$address=$_POST["address"];

$sql= "INSERT INTO studentdet VALUES('". "'".$name."'". "','" . $id . "','" . "'".$dept."'" . "','" . $year . "','" . "'".$address."'" . "')";
$conn->query($sql);

?>	