<?php

    include "connection.php";
    if(isset($_POST['submit'])){
        $userName = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from admin_login where username='$userName' and password ='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("Location:check_page.php");
        }
        else {
            echo '<script>
                window.location.href= "admin_login.php";
                alert("Login failed: Username or password invalid");
                </script>';
        }
    }
    


    
    ?> <script>
        var userName1 = document.form.username.value;
        var password1 = document.form.password.value;
    function isValid(){
        if(userName1 =="" && password1==""){
            alert("Username and Password is empty!");
            return false;
        }
        else{
            if(userName1==""){
                alert("Username is empty!");
                false;
            }
            if(password1==""){
                alert("Password is empty!");
                false;
            }
        }
    }
    </script>

?>