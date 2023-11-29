<?php
include ("header.php");
include ("foodIteams_function.php");
include("../../config/config.php");
$taka = "/= taka"; 

$objUserFoodList = new foodIteams();
$receive_store = $objUserFoodList->display_data();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/foodIteams.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
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
    <style type="text/css">
        .heading{
            background: #e84343;
            margin: 20px 30px 0px 30px;
            padding: 25px 0;
            grid-column: 1/-1;
            text-align: center;
            opacity: 0.75;
            border-radius: 6px;
        }
    </style>
</head>


<body class="welcome-body">

<!-- Heading -->
    <div class="heading">
        <h1 class="search-title">&mdash; Search Foods &mdash;</h1>
        <div style="margin: 20px auto; width: 70%;" >
        <input style="font-weight: bold; font-size: large; font-family: Agency FB;" type="text" autofocus class="form-input-box" id="search" autocomplete="off" placeholder="Type any food prefer to search here...">
        </div>
    </div>


<!-- Total Food Area -->
<div class="menu" id="output">
    <?php
        while($single_data_after_break=mysqli_fetch_assoc($receive_store)) {
    ?>
        <div class="food-items">
            <img src="upload/<?php echo $single_data_after_break['foodimg']; ?>">
            <div class="details">
                <div class="details-sub">
                    <h4><?php echo $single_data_after_break['foodname'];?></h4>
                    <h4><?php echo $single_data_after_break['foodprice'].$taka;?></h4>
                </div>
        <!-- checking whether user login or not! -->
        <!-- if login, move order page otherwise move login page -->
            <?php if (isset($_COOKIE['user'])) { ?>
            <p class="order-button"><a class="order" href="payment.php?status=order&&id=<?php echo $single_data_after_break['food_id'];?>">Order</a></p>
            <?php } else{ ?>
            <p class="order-button"><a class="order" href="login.php">Order</a></p>
            <?php } ?>  
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
    <script src="../../public/js/search.js"></script>

</body>

</html>