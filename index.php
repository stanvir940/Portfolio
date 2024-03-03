



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- for icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Tanvir Ahmed</title>
    <link rel="icon" href="atTop.png">
</head>
<body>
    <header class="header">
    
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon" ></i>
        
        <nav class="navbar">
            <a href="#home" >Home</a>
            <a href="#about" >About</a>
            <a href="#services" >Services</a>
            <a href="#portfolio" >Projects</a>
            <a href="#contact" >Contact</a>
            <a href="databaseFile/admin_login.php">Admin Panel</a>
            <a href="mesLogin.php" >Messages</a>
        </nav>
    
    </header>

    <!-- home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Tanvir Ahmed</h1>
            <h3>And I'm a <span id="element"></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident impedit, deleniti aut voluptates dignissimos at. Officiis pariatur iusto dolore repellat ut expedita, harum corporis, voluptas consequuntur quisquam vero mollitia nobis?

            </p>

            <div class="social-media">
                <a href="https://www.facebook.com/tanvir.shariar.01"><i class='bx bxl-facebook' ></i></a> 
                <a href="#" id=""><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        
        <div class="home-img">
            <img src="tanvir.jpeg" alt="">
        </div>


    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="second_pic.jpg" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Frontend Developer</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident perferendis expedita in at accusamus aperiam recusandae totam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus voluptas temporibus consequuntur nisi repellendus expedita, ex maxime nihil perferendis necessitatibus, neque quasi ea animi. Iure in tempora illum eius laborum!</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </section>

    <!-- service section  -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut nemo cum aperiam. Hic odit quas, placeat libero recusandae quasi veniam esse provident beatae alias molestias vero accusamus possimus dolore?</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bxs-paint' ></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut nemo cum aperiam. Hic odit quas, placeat libero recusandae quasi veniam esse provident beatae alias molestias vero accusamus possimus dolore?</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-bar-chart-square'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut nemo cum aperiam. Hic odit quas, placeat libero recusandae quasi veniam esse provident beatae alias molestias vero accusamus possimus dolore?</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- portfolio section  -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">
            Latest <span>Project</span>

        </h2>

        <div class="portfolio-container">
            <?php include "retrieve.php"; ?>
            

        </div>
    </section>

    <!-- contact section design  -->

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="index.php" method="post">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email">
                
            </div>

            

            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" name="submit" value="Send Message" class="btn">
        </form>

    </section>

    <!-- footer design -->


    <footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2024 by Codehal | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>



    <script src="script.js"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

  <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
        strings: ['Businessman.', 'Frontend Developer.','Cyber Security Expert'],
        typeSpeed: 100,
        backSpedd: 100,
        backDelay: 1000,
        loop: true,
        });
    </script>



</body>
</html>

<?php

    
    
    if (isset($_POST['submit'])){
        $mysqli = mysqli_connect("localhost","root","tanvir","portfolio") or die("connection is not done!");  
        $email = $_POST["email"];
        $message = $_POST["message"];
        

        // Prepare and execute the query
        $stmt = $mysqli->prepare("INSERT INTO messages (email,message) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $message);
        $stmt->execute();
        
        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            
            '<script> alert("Message Sent"); </script>';
            

        } else {
            '<script> alert("Message is not Sent"); </script>';
        }

        // Close statement
        $stmt->close();
        $mysqli->close();
    }           

    

?>