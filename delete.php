<?php

    $connection = mysqli_connect("localhost","root","tanvir","portfolio") or die("connection is not done!"); 
    if(isset($_GET['id']) && isset($_GET['dir']))
        $id = $_GET['id'];
        $fileToDelete = $_GET['dir'];
        $deleteQuery = "DELETE FROM projects WHERE id=$id";
        $deleteResult = mysqli_query($connection , $deleteQuery);

        if (!$deleteResult) {
            die("Deletion failed: " . mysqli_error($connection));
        } else {
            if (file_exists($fileToDelete)){
                unlink($fileToDelete);
            }
            header("location: index.php");
            //echo "Row with ID $id has been deleted successfully.";
        }
     
        echo "No ID provided for deletion.";
    
    
    mysqli_close($connection);

?>