
<?php

    $mysqli = mysqli_connect("localhost","root","tanvir","portfolio") or die("connection is not done!");  
    
    if (isset($_POST['submit'])){
        $projectTitle = $_POST["projectTitle"];
        $description = $_POST["description"];
        $fileName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];

        if ($_FILES['image']['error'] > 0) {
            echo 'Upload Error: ' . $_FILES['image']['error'];
            exit;
        }
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            echo 'Error uploading file.';
            exit;
        }    

        // Read the file content
        $fileContent = file_get_contents($tmpName);
        $targetDirectory = "upload/".$fileName;
        move_uploaded_file($tmpName,$targetDirectory);

        // Prepare and execute the query
        $stmt = $mysqli->prepare("INSERT INTO projects (project_title,project_description,image,image_data) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssbs", $projectTitle, $description, $fileContent, $targetDirectory);
        $stmt->execute();
        
        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            
            header("location: check_page.php");
            exit;

        } else {
            echo "Error uploading image.";
        }

        // Close statement
        $stmt->close();
    }           
    
    $mysqli->close();

?>