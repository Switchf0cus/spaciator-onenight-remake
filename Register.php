<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


include "db.php";

$user = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * from members WHERE name= '$user' ";
$result = $con -> query($sql);


if($result->num_rows > 0)
{
    $obj->text = "FAILED";
    $myJson = json_encode($obj);
    echo $myJson;
    //Name exist
   // echo "<p style='text-align:center; position:relative; top:20%; font-size:25; color:white;'> The username is already taken.Please choose another one.  </p>";
  //  echo "<input type='button' value='Back' id='back' style='margin-left:auto; margin-right:auto; display:block;  position:relative; top:20%; font-size:25; color:white;' onclick='goBack();' /> ";
    return;
}
else
{
    //Add the Data
    $sql = "INSERT INTO members (name , pass , bullets) Values ( '$user' , '$password' , '0') ";
    $result = $con -> query($sql);
    $obj->text = "OKOK";
    $myJson = json_encode($obj);
    echo $myJson;
   // echo "<p style='text-align:center; position:relative; top:20%; font-size:25; color:white;'> Thanks.Your Registration complete.You can now Login  </p>";
   // echo "<input type='button' value='Back' id='back' style='margin-left:auto; margin-right:auto; display:block;  position:relative; top:20%; font-size:25; color:white;' onclick='goBack();' /> ";
}

?>