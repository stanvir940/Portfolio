

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="databaseFile/databaseStyle.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form action="mesLogin.php" method="post" id="aForm" onsubmit="return isValid()">
            <h1>Admin Login</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" ><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" ><br>

            <button type="submit" class="btn1">Login</button>
        </form>
    </div>
    
    
</body>
</html>


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost","root","tanvir","portfolio") or die("connection is not done!"); 

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from admin_login where username='$username' and password ='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){

            header("Location:message.php");
            exit;

        }
        else {
            echo '<script>
                window.location.href= "admin_login.php";
                alert("Login failed: Username or password invalid");
                </script>';
        }

        

    

        mysqli_close($conn);
    }
    
    
    
    
    ?> 