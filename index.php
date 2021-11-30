<?php
include 'dbcontext.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT * FROM produkte";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " - Preis: " . $row["Preis"]. " - Kategorie: " . $row["Kategorie"]. " - Beschreibung: " . $row["Beschreibung"]. " - ImageSource: " . $row["ImageSource"]. "<br>";
    }
  } else {
    echo "0 results";
  }

?>