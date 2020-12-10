<?php>
include "db.php";


?>

<html>
<head>
<title> SPACIATORS  TOP 20</title>

</head>

<body style="background-image:url('Images/bg1.png'); background-repeat:no-repeat; background-size:cover;" >


<?php 
    $sql = "SELECT * FROM members ORDER BY score DESC LIMIT 20";
    $result = $con->query($sql);

  $num = 1;
   echo  "<table align=\"center\" border=\"1\">";
   echo "<tr>";    
  echo "<td colspan=3 style=\"font-family:Fantasy ; font-size:30;color:white; \"> SPACIATORS TOP 20 </td>"; 
  echo "</tr>";
  echo "<tr>";    
  echo "<td  style=\"font-family:Fantasy ; font-size:20;\">Rank </td  >   <td  style=\"font-family:Fantasy ; font-size:20;\" > Username </td> <td style=\"font-family:Fantasy ; font-size:20; text-align:center\">Score  </td> ";
 echo "</tr>";
    while($row = $result->fetch_assoc())
    {
      $img = "";
      if($num == 1)
      {
        $img = "<img src='Images/gold.png' width=15 height=18 />";
      }
      else if($num == 2)
      {
        $img = "<img src='Images/silver.png' width=15 height=18 />";
      }
      else if($num == 3)
      {
        $img = "<img src='Images/bronge.png' width=15 height=18 />";
      }
      $count = $row['score'];
      $seconds= (int)($count%60);
      $minutes = ($count/60) % 60;
      $hours = (int)($minutes /60);
      $time = $hours . ":" . $minutes . ":" . $seconds;

      echo " <tr> <td style=\"font-family:Fantasy ; font-size:20;color:white; \" > " .$num. $img .  "  </td>    <td style=\"font-family:Comic Sans MS ; font-size:15; color:white;\"> " . $row['name'] ."  </td>    <td style=\"font-family:Comic Sans MS ; font-size:15; text-align:center; color:white;\"> ".$time ."  </td> </tr>";
      $num ++;
    }

echo "</table>";


?>






</body>

</html>
