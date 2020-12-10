<?php
include "db.php";

$username = $_GET['username'];
$parameter = $_GET['param'];


switch($parameter)
{
case bullets:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['bullets'];
    }
    else
    {
        echo "0";
    }
break;
case distance:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['distance'];
    }
    else
    {
        echo "0";
    }
break;
case kills:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['kills'];
    }
    else
    {
        echo "0";
    }
break;
case deaths:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['deaths'];
    }
    else
    {
        echo "0";
    }
break;
case items:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['collector'];
    }
    else
    {
        echo "0";
    }
break;
case accuracy:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['accuracy'];
    }
    else
    {
        echo "0";
    }
break;
case bot:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['bulletsontarget'];
    }
    else
    {
        echo "0";
    }
break;
case score:
    $sql = "SELECT * FROM members WHERE name='$username'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
       $row =$result->fetch_assoc();
        echo $row['score'];
    }
    else
    {
        echo "0";
    }
break;
}




?>