

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="databaseStyle.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form action="admin_login.php" method="post" id="aForm" onsubmit="return isValid()">
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
    //if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from admin_login where username='$username' and password ='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            setcookie("username", $username, time() + 300, "/");
            header("Location:check_page.php");
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
    
    if(isset($_COOKIE['username'])){
        $cookieCount = isset($_COOKIE['cookiecount']) ? $_COOKIE['cookiecount'] + 1 : 0;
        setcookie('cookiecount',$cookieCount,time()+300,"/");

        $userName = $_COOKIE['username'];
        //echo '<script>
                //window.location.href="check_page.php";
                //alert("You are already logged in!");
                //</script>';
        header("location: check_page.php");
        exit;
    } 
    
    
    ?> 