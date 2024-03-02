<?php


    session_start();
    $in = "index.php";
    if(isset($_SESSION['url'])){
        $in = $in . $_SESSION['url'];
    }
    session_unset();
    //echo $_SESSION['url'];
    //echo session_status();
    echo $in ;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Our Website!</h1>
        <p>This is a simple welcome message. Feel free to explore more.</p>
        <a href="<?php echo $in ?>" target="_blank">Visit Our Website</a>

    </div>
</body>

</html>
