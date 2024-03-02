


    <script>
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
