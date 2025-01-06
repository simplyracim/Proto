<?php
include 'db_connect.php';

$sql = "SELECT * FROM fmb.new_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . "<br>";
    }
} else {
    echo "0 results";
}
?>