<?php
include 'database.php';
if($con-> connect_error)
{
    die("Connection Failed :".$con->connect_error);
}
$getid="SELECT Username from signed_in";
$result=$con->query($getid);
$row=$result->fetch_assoc();
$signinid=$row["Username"];
echo $signinid;
$con->close();
?>