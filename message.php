<?php


    $conn = new mysqli("localhost", "root", "tanvir", "portfolio");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the database
    $sql = "SELECT id, email, message FROM messages";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Table</h2>

    <?php
    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Serial</th><th>Email</th><th>Messages</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['message']}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No data found";
    }
    ?>
    <a href="index.php">Goto Portfolio Page</a>
</body>
</html>
