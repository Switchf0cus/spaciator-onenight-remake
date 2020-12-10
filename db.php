<?php
include "db.php";
session_start();

$user = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * from members WHERE name= '$user' and pass= '$password' ";
$result = $con -> query($sql);


if($result->num_rows == 0)
{
echo "FAILED";
}
else
{
echo "SUCCESS";}
?>