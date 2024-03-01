

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
        <form action="login.php" method="post" id="aForm" onsubmit="return isValid()">
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