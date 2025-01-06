<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    
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

    <h1> Mega titre </h1>
    <a href="https://www.instagram.com/simply_racim/profilecard/?igsh=MTQwMWpnb3h5endiNA==">
        <h1> TEST 1 </h1>
        <p> THIS IS MY MESSAGE TO MY MASTER </p> <br> 
        <img class="centered-image" src="images/Surprise.jpg">
    </a>
    <br>

</body>
</html>