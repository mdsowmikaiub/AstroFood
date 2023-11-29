<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/welcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
    <link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
    <style type="text/css">
        ::-webkit-scrollbar{
            width: 8px;
        }
        ::-webkit-scrollbar-track{
            background: #c7ecee;
        }
        ::-webkit-scrollbar-thumb{
            background: linear-gradient(#0a3d62,#60a3bc,#0c2461);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- Header Section (Just for welcome page) -->
    <div class="region">
        <nav>
            <h1 class="title"><a href="welcome.php">Astro Food</a></h1>
            <ul>
                <li> <a href="https://github.com/mdsowmikaiub/AstroFood" target="_blank"> GitHub </a> </li>
                <li> <a href="https://github.com/mdsowmikaiub" target="_blank"> Admin </a> </li>
            </ul>
        </nav>
    </div>


<!-- Image Slider Start -->
<div class="slider-area">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
    
    
            <div class="slide first">
                <img src="../../public/img/1.jpg" alt="slider_image">
            </div>
            <div class="slide">
                <img src="../../public/img/2.jpg" alt="slider_image">
            </div>
            <div class="slide">
                <img src="../../public/img/3.jpg" alt="slider_image">
            </div>
            <div class="slide">
                <img src="../../public/img/4.jpg" alt="slider_image">
            </div>
    
    
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
    
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
    
        </div>
    </div>
</div>
<!-- Image Slider End -->



<!-- Content-->
<img class="welcome-logo" src="../../public/img/logo.png" alt="logo"> <br>

<div class="welcome-text">
    <h1 class="welcome-title">Eat and Order<br>Do It Easy</h1>
    <p>Choose your favourite foods and get it to taste the amazing taste, enjoy it with your family or friends.</p>
    <p style="margin-top:-15px ;">Let's try it out here</p>
    <button class="button" onclick="location.href='../views/home.php'">Get Started</button>
</div>


<?php include 'footer.php'; ?>

    <script type="text/javascript" src="../../public/js/slider.js"></script>
    
</body>

</html>