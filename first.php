<?php



$a=-1;

if(isset($_POST["a"])){
    $a = $_POST["a"];
}

$sql = "select * from lab2.guys limit 0,".$a;
$conn = new mysqli("localhost", "root", "", "lab2");
if($result = $conn->query($sql)){
echo "<table style='border: 1px solid pink'>";
    while($row = $result->fetch_array()){
      echo "<tr>";
      echo "<td>";
      echo $row["name"];
      echo "</td>";
      echo "<td>";
      echo $row["surname"];
      echo "</td>";
      echo "<td>";
      echo $row["age"];
      echo "</td>";
      echo "</tr>";
    }
}echo "</table>";

?>
