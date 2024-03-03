<?php 

    $user = "";
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    } 
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="databaseStyle.css">
    <title>Project Registration</title>
</head>
<body>
    <div class="container">

        <form action="dataUp.php" method="post" id="aForm" onsubmit="return isValid()" enctype="multipart/form-data">
            <h1 class="name">"<?php echo 'Welcome to admin Panel '. $user ?>"</h1>
            <h1>Login Successful!</h1>
            <label for="projectTitle">Project Title :</label>
            <input type="text" id="projectTitle" name="projectTitle" placeholder="Project Title"><br>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" placeholder="Description"><br>
            <label for="image">Choose a Image For the Project :</label>
            <input type="file" id="image" name="image" accept="image/*"><br>
            

            <button type="submit" name="submit" class="btn2">Submit</button>
            
        </form>
    </div>

    

    
</body>
</html>

