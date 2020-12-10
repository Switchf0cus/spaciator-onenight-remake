<?php
include "db.php";

$username = $_GET['username'];
$parameter = $_GET['param'];
$value = $_GET['val'];


switch($parameter)
{
case bullets:
    $sql = "UPDATE members SET bullets='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case distance:
    $sql = "UPDATE members SET distance='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case kills:
    $sql = "UPDATE members SET kills='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case deaths:
    $sql = "UPDATE members SET deaths='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case items:
    $sql = "UPDATE members SET collector='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case accuracy:
    $sql = "UPDATE members SET accuracy='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case bot:       //bulletsOnTarget
    $sql = "UPDATE members SET bulletsontarget='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
case score:       //bulletsOnTarget
    $sql = "UPDATE members SET score='$value' WHERE name='$username'";
    $result = $con->query($sql);
  
break;
}




?>