<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php

        $mysqli = new mysqli("localhost", "root", "tanvir", "portfolio") or die("connection is not possible!");
        $result = $mysqli->query("SELECT id, project_title, project_description, image, image_data FROM projects");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="portfolio-box" id="element_{$row["id"]}">';
                

                echo "<img src='databaseFile/{$row['image_data']}'>";

                $id = $row['id'];
                $image_data = $row['image_data'];

                echo "<div class='portfolio-layer'>";
                echo "<h4>{$row['project_title']}</h4>";
                echo "<p>{$row['project_description']}</p>";
                echo "<a href='#'><i class='bx bx-link-external' ></i></a>";
                echo "<a href='delete.php?id=$id&dir=$image_data' ><i class='bx bx-message-alt-x' ></i></a>";
                //echo base64_encode($row['image']);

                
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "No data found in the images table.";
        }

        $result->close();
        $mysqli->close();
    ?>
    </div>
</body>
</html>


