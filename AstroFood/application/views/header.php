<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
    <title>Header</title>
    <link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
</head>

<body>
    <div class="region">
        <nav>
            <h1 class="title"><a href="welcome.php">Astro Food</a></h1>
            <ul>
                <li> <a href="home.php">Home</a> </li>
                <li> <a href="foodIteams.php">Food Iteams</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a href="about_us_new.php">About Us</a> </li>
            </ul>


        <?php
            if ((isset($_COOKIE['admin'])) XOR !(isset($_COOKIE['user'])))
                {
                    echo "<a class='signin' href='login.php'>Sign In </a>";
                    
                     
                }

            if (isset($_COOKIE['admin']))
                    {
                        echo "<a class='signin' href='adminProfile.php'> {$_COOKIE['admin']}</a>
                            <a class='signin' href='../controllers/logout.php'>Logout</a>";
                          
                    }
            if (isset($_COOKIE['user'])) {
                    echo "<a class='signin' href='profile.php'> {$_COOKIE['user']}</a>
                            <a class='signin' href='../controllers/logout.php'>Logout</a>"; 
                      }
                  
            
        ?>

            
            
        </nav>
    </div>
</body>
</html>