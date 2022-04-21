<?php
    
    require_once('DbOperations.php');
    $user = $operations->get_userdata();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../Css/homePage.css">

    <title>Home</title>
</head>

<body>
    <main>
        <div class="big-wrapper">
            <!-- Navigation Bar -->
            <header>
                <div class="container">
                    <div class="logo">
                        <img src="../Img/logo.png" alt="Logo">
                        <h3>YOLOmeet</h3>
                    </div>

                    <div class="links">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="About.php">About</a></li>
                            <li><a href="#">Features</a></li>
                            <?php if(isset($user)){ ?>
                                <li><a href="logout.php" class="btn">Logout</a></li>
                            <?php }else { ?>
                                <li><a href="login.php" class="btn">Login</a></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar">

                        </div>
                    </div>
                </div>
            </header>

            <!-- Middle Content -->
            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Future is here,</h1>
                            <h1>Meeting with Facial Expression Recognition</h1>
                        </div> 
                        <!-- 19 words --> 
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis cursus nunc
                            malesuada porta. Nam maximus elit et augue.
                        </p> 
                        <div class="cta">
                            <a href="../sender/sender.php" class="btn">New Meeting</a>
                            <a href="../receiver/receiver.php" class="btn1">Join Meeting</a>
                        </div>
                    </div>
    
                    <div class="right">
                        <!-- Dimension should be: 2302 x 2013 -->
                        <img src="../Img/person.png" alt="Meet Image" class="person"> 
                    </div>
                </div>
                
            </div>

            <div class="bottom-area">
                <div class="container">
                    
                </div>
            </div>
        </div>
    </main>

    <script src="../Javascript/app.js"></script>
</body>

</html>