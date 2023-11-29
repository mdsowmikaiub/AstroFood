<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/home.css">
    <title>Home</title>
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
    <style>
        /*====================== Section-1 ======================*/
        .section-1{
            min-height: 100vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-1{
            min-height: 90vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area1{
            min-height: 90vh;
            width: 100%;
        }
        .img-area1 img{
            min-height: 75vh;
            width: 100%;
            margin: 70px auto;
        }
        .txt-area1{
            min-height: 50px;
            width: 100%;
        }
        .txt-area1 p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #e17055;
            text-shadow: .5px 1px #ffeaa7;
            text-align: center;         
            margin: 40px;
            display: block;

        }
        .txt-area1 p b{
            color:#c0392b;
            text-shadow: 0 2px #e67e22;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area1 p .mid{
            font-family: Agency FB;
            color: #e17055;
            text-shadow: .5px 1px #ffeaa7;
            font-size: 35px;
            font-style: italic;
        }

        /*====================== Section-2 ======================*/
        .section-2{
            min-height: 100vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-2{
            min-height: 90vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area2{
            min-height: 80vh;
            width: 100%;
            margin-top: -25px;
        }
        .img-area2 img{
            min-height: 65vh;
            width: 100%;
        }
        .txt-area2{
            min-height: 50px;
            width: 100%;
        }
        .txt-area2 p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #e67e22;
            margin: 70px 40px 20px 40px;
            display: block;

        }
        .txt-area2 p b{
            color:#c0392b;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area2 p .last{
            font-family: Agency FB;
            color: #EAB543;
            font-size: 35px;
            font-style: italic;
            text-shadow: 1.5px 1px #7f8c8d;
        }

        /*====================== Section-3 ======================*/
        .section-3{
            width: 100%;
            height: 350px;
        }
        .section-3 h2{
            text-align: center;
            color:aliceblue;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 40px;
            background-color: #f9ca24;
            padding: 30px;
        }
        .section-3 .group-images{
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
        }

        .section-3 .pic-1{
            width: 25%;
            height: 190px;
            margin-left: 1%;
            margin-right: 1%;
            background-image: url('../../public/img/berger1.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }
        .section-3 .pic-2 {
            width: 25%;
            height: 190px;
            background-image: url('../../public/img/berger2.jpg');
            background-size: cover;
            margin-right: 1%;
            background-repeat: no-repeat;
        }
        .section-3 .pic-3 {
            width: 25%;
            height: 190px;
            margin-right: 1%;
            background-image: url('../../public/img/berger3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .section-3 .pic-4 {
            width: 25%;
            height: 190px;
            margin-right: 1%;
            background-image: url('../../public/img/berger4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        /*====================== Section-4 ======================*/
        .section-4{
            min-height: 60vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
            display: flex;
        }
        .area-4{
            height: 400px;
            width: 1400px;
            background: red;
            margin: 20px auto;
            background: url('../../public/img/burger-red.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 5px;
        }

        /*====================== Section-5 ======================*/
        .section-5{
            min-height: 25vh;
            width: 100%;
            background: radial-gradient(#f39c12,#27ae60);
        }
        .section-5 h1{
            text-align: center;
            font-size: 70px;
            color: #c0392b;
            font-family: Agency FB;
            letter-spacing: 4px;
            text-shadow: 1px 1px 2px #16a085, 0 0 1em #ecf0f1, 0 0 0.2em #ecf0f1;
            padding-top: 8px;
        }
        .section-5 h2{
            text-align: center;
            font-size: 40px;
            color: #c0392b;
            font-family: Agency FB;
            letter-spacing: 4px;
            text-shadow: 1px 1px 2px #16a085, 0 0 1em #ecf0f1, 0 0 0.2em #ecf0f1;
        }

        /*====================== Section-6 ======================*/
        .section-6{
            min-height: 90vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6{
            min-height: 90vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6{
            min-height: 90vh;
            width: 100%;
        }
        .img-area6 img{
            min-height: 75vh;
            width: 100%;
            margin: -70px auto;
        }
        .txt-area6{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6 p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #eccc68;
            margin: 40px;
            display: block;

        }
        .txt-area6 p b{
            color:#c0392b;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6 p .last{
            font-family: Agency FB;
            color: #EAB543;
            font-size: 35px;
            font-style: italic;
            text-shadow: 1px 1.5px #e74c3c;
        }

        /*====================== Section 6a ======================*/
        .section-6a{
            min-height: 70vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6a{
            min-height: 70vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6a{
            min-height: 80vh;
            width: 100%;
            margin-top: -20px;
        }
        .img-area6a img{
            min-height: 65vh;
            width: 100%;
        }
        .txt-area6a{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6a p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Calibri body;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #ff7f50;
            margin: 70px 40px 20px 40px;
            display: block;
        }
        .txt-area6a p b{
            color:#c0392b;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6a p .last{
            font-family: Agency FB;
            color: #ff7f50;
            text-shadow: .5px 1.6px #7bed9f;
            font-size: 35px;
            font-style: italic;
        }

        /*====================== Section 6b ======================*/
        .section-6b{
            min-height: 80vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6b{
            min-height: 80vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6b{
            min-height: 90vh;
            width: 100%;
        }
        .img-area6b img{
            min-height: 60vh;
            width: 90%;
            margin: 70px 25px;
        }
        .txt-area6b{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6b p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #e67e22;
            margin: 40px;
            display: block;
        }
        .txt-area6b p b{
            color:#c0392b;
            text-shadow: 0 2px #ffa502;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6b p .last{
            font-family: Agency FB;
            color: #ff6348;
            font-size: 35px;
            font-style: italic;
            text-shadow: 0.8px 1.64px #ffa502;
        }

        /*====================== Section 6c ======================*/
        .section-6c{
            min-height: 80vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6c{
            min-height: 80vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6c{
            min-height: 80vh;
            width: 100%;
            margin-top: 30px;
        }
        .img-area6c img{
            min-height: 50vh;
            width: 85%;
        }
        .txt-area6c{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6c p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #e67e22;
            margin: 70px 40px 20px 40px;
            display: block;
        }
        .txt-area6c p b{
            color:#c0392b;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6c p .last{
            font-family: Agency FB;
            color: #EAB543;
            font-size: 35px;
            font-style: italic;
            text-shadow: 0.6px 1.5px #7f8c8d;
        }

        /*====================== Section 6d ======================*/
        .section-6d{
            min-height: 85vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6d{
            min-height: 85vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6d{
            min-height: 90vh;
            width: 100%;
        }
        .img-area6d img{
            min-height: 60vh;
            width: 100%;
            margin: 70px auto;
        }
        .txt-area6d{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6d p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #e67e22;
            margin: 40px;
            display: block;
        }
        .txt-area6d p b{
            color:#c0392b;
            text-shadow: 2px 0px #ff7f50;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6d p .mid{
            font-family: Agency FB;
            color: #ffa502;
            font-size: 35px;
            font-style: italic;
            text-shadow: 0.6px 1.5px #fff;
        }

        /*====================== Section 6e ======================*/
        .section-6e{
            min-height: 90vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .6);
        }
        .area-6e{
            min-height: 90vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .img-area6e{
            min-height: 80vh;
            width: 60%;
            margin-top: 50px;
        }
        .img-area6e img{
            min-height: 65vh;
            width: 100%;
        }
        .txt-area6e{
            min-height: 50px;
            width: 100%;
        }
        .txt-area6e p{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            font-style: italic;
            font-family: Tahoma FB;
            color: #c0392b;
            text-align: center;
            text-shadow: 0 2px #e67e22;
            margin: 70px 40px 20px 40px;
            display: block;
        }
        .txt-area6e p b{
            color:#c0392b;
            text-shadow: 2px 0px #7f8c8d;
            font-size: 60px;
            font-style: normal;
            font-family: Agency FB;
        }
        .txt-area6e p .mid{
            font-family: Agency FB;
            color: #e67e22;
            font-size: 35px;
            font-style: italic;
            text-shadow: 0.6px 1.5px #7f8c8d;
        }

        /*====================== Section-7 ======================*/
        .section-7{
            min-height: 100vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .5);
        }
        .section-7 .logo{
            width: 100%;
            height: 300px;
            margin-bottom: 300px;
            background-image: url('../../public/img/logo.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .section-7 .describe{
            width: 100%;
            height:300px;
            margin-top: -260px;
        }
        .section-7 p{
            text-align: center;
            color: #F8EFBA;
            font-size: 35px;
            font-family: Agency FB;
            text-shadow: 2px 1px #58B19F;
        }

        /*====================== Section-8 ======================*/
        .section-8{
            width: 100%;
            height: 400px;
            background-color: rgba(127, 140, 141,.5);

        }
        .section-8 .manage-frame{
            display: flex;
            justify-content: space-between;
            margin: 0px 10%;
            align-items: center;
        }
        .map{
            margin-right: 1%;
            margin-top: 30px;
        }
        .video{
            margin-left: 1%;
            margin-top: 30px;
        }
    </style>
</head>


<body>
    <!-- ========== Section-1 ========== -->
    <section class="section-1">
        <div class="area-1">          
            <div class="txt-area1">
                <p>
                    <b>Pizza Italiano!</b> is a family owned and operated business. <br>
                    We endeavour to bring to Dhaka the type of pizza you get on any street corner in Rome. <br>
                    <span class="mid">Roman pizza has a thin, crisp crust and is bursting with flavor. It is cooked for just a few minutes in a very, very hot oven.</span> <br>
                    <span class="mid">We work with importers and leading suppliers of produce to ensure that our customers get the best pizza in town.</span> <br>
                    <span class="mid">
                    While we are a classic pizzeria catering to the Italian community, we also serve a wide range of tastes, both international and domestic. <br>
                    All our pizzas are 100% Halal and (in our humble opinion) delicious!
                    </span>
                </p>
            </div>
            <div class="img-area1">
                <img src="../../public/img/pizza.png">
            </div>          
        </div>     
    </section>

    <!-- ========== Section-2 ========== -->
    <section class="section-2">
        <div class="area-2">
            <div class="img-area2">
                <img src="../../public/img/burger.png">
            </div>          
            <div class="txt-area2">
                <p>
                    <b>Chessy Burger!</b> is also another big attraction for our shop. <br>
                        We have the majority of profit from our delicious berger. People love it, want it for the good quality of it. <br>
                    <span class="last">
                        Burger is always a favourit thing for the customers from the kid to the adult. The demand of it is high for the whole year.
                    </span> <br>
                    <span class="last">
                        We really grateful about this product depending on the customer demand and We always try to improve us by many ways.
                    </span> <br>
                    <span class="last">
                        There have so many variations of Burger. We are not able so supply all the variations but depending on the customer choice we ensure some variation always. <br>
                        Just come and taste the delicious burger or by online!
                    </span>
                </p>
            </div>          
        </div>
    </section>

    <!-- ========== Section-3 ========== -->
    <section class="section-3">
        <h2>20% Extra Offer!</h2>
        <div class="group-images">
            <div class="pic-1"></div>
            <div class="pic-2"></div>
            <div class="pic-3"></div>
            <div class="pic-4"></div>
        </div>
    </section>


    <!-- ========== Section-4 ========== -->
    <section class="section-4">
        <div class="area-4"> 
        </div>
    </section>

    <!-- ========== Section-5 ========== -->
    <section class="section-5">
        <h1>&mdash; Eid-Ul-Azha Burger Offer! &mdash;</h1>
        <h2>&mdash; Buy 1 Get 1 &mdash;</h2>
    </section>

    <!-- ========== Section-6 ========== -->
    <section class="section-6">
        <div class="area-6">          
            <div class="txt-area6">
                <p>
                    <b><i>The Spicy Ramen! </i></b>
                    <span class="last">
                        is a hot & spicy food where there is no doubt it can warm you! <br>
                        We endeavour to bring to Dhaka the type of food you get on any street corner in Bangladesh.
                    </span> <br>
                    <span class="last">
                        Ramen is a great food for snack specially for students, office workers, and so many professional people.
                    </span> <br>
                    <span class="last">
                        We work with importers and leading suppliers of produce to ensure that our customers get the best type of it in Dhaka.
                    </span> <br>
                    <span class="last">
                        We are highly concern about our food and specially some of like this famous food which demand is so high around all the time. <br>
                        Take & Feel the amazing taste of (in our humble opinion) &mdash; Spicy Ramen! &mdash;
                    </span>
                </p>
            </div>
            <div class="img-area6">
                <img src="../../public/img/pasta.png">
            </div>          
        </div>     
    </section>

    <!-- ========== Section-6a ========== -->
    <section class="section-6a">
        <div class="area-6a">
            <div class="img-area6a">
                <img src="../../public/img/Shawarma.png">
            </div>          
            <div class="txt-area6a">
                <p>
                    <b><i>Chicken Shawarma! </i></b> is also good daily food in our shop. <br>
                        We have so many customer eat the delicious tasy Shawarma. People love it & really enjoy this food iteam. <br>
                    <span class="last">
                        Shawarma is always a favourit thing for the kid. The demand of Shawarma increasing gradually now-a-days.
                    </span> <br>
                    <span class="last">
                        There are some types of Shawarma in our stock. We are not able so supply all the variations but we have limited good in stock for the current time.
                        <br>
                        Come, Order & feel the taste of our Chicken Shawarma!
                    </span>
                </p>
            </div>          
        </div>
    </section>

    <!-- ========== Section-6b ========== -->
    <section class="section-6b">
        <div class="area-6b">          
            <div class="txt-area6b">
                <p>
                    <b><i>Chicken Grill! </i></b>
                    <span class="last">
                        is a family owned and operated business. <br>
                        We endeavour to bring to Dhaka the type of pizza you get on any street corner in Rome.
                    </span> <br>
                    <span class="last">
                        Roman pizza has a thin, crisp crust and is bursting with flavor. It is cooked for just a few minutes in a very, very hot oven.
                    </span> <br>
                    <span class="last">
                        We work with importers and leading suppliers of produce to ensure that our customers get the best pizza in town.
                    </span> <br>
                    <span class="last">
                        All our pizzas are 100% Halal and (in our humble opinion) delicious!
                    </span>
                </p>
            </div>
            <div class="img-area6b">
                <img src="../../public/img/grill.png">
            </div>          
        </div>     
    </section>

    <!-- ========== Section-6c ========== -->
    <section class="section-6c">
        <div class="area-6c">
            <div class="img-area6c">
                <img src="../../public/img/sub_sandwich.png">
            </div>          
            <div class="txt-area6c">
                <p>
                    <b><i>Sub-Sandwich! </i></b><span><br>
                        This is a good selling food every time. The demand of sub-sandwich mainly inceasing for the teenage people day by day.
                    </span><br>
                    <span class="last">
                        Sub-Sandwich is always a favourit thing for the customers. We are highly concern about it's quality.
                    </span> <br>
                    <span class="last">
                        There have so many variations of Sub-Sandwich in our stock. We are not able so supply all the variations but depending on the customer choice we ensure some variation always.<br>
                        Just come and taste this tasty iteam!
                    </span>
                </p>
            </div>          
        </div>
    </section>

    <!-- ========== Section-6d ========== -->
    <section class="section-6d">
        <div class="area-6d">          
            <div class="txt-area6d">
                <p>
                    <b><i>Grilling Shish Kebab! </i></b>
                    <span class="mid"> is also a great attraction in our system. <br>
                        We endeavour to bring to Dhaka the type of food you get on any street corner in BD.
                    </span> <br>
                    <span class="mid">
                        The quality of Grilling Shish Kebab is really amazing in our shop & we are very much concern about it. The seliing rate of it around 70% up this year Which is amazing! Our Cooking Shef is well known about making this food.
                    </span> <br>
                    <span class="mid">
                        This food is in stock always.
                        <br>
                        Just come and taste this tasty iteam! We hope it'll be a great experience!
                    </span>
                </p>
            </div>
            <div class="img-area6d">
                <img src="../../public/img/Grilling_shish_kebab.png">
            </div>          
        </div>     
    </section>

    <!-- ========== Section-6e ========== -->
    <section class="section-6e">
        <div class="area-6e">
            <div class="img-area6e">
                <img src="../../public/img/french_fry.png">
            </div>          
            <div class="txt-area6e">
                <p>
                    <b><i>French Fry! </i></b><br>
                    <span class="mid">
                        From 1813 on, recipes for deep-fried cut potatoes occur in popular cookbooks. By the late 1850s, at least one cookbook refers to "French Fried Potatoes". The first commercially available chips in the UK were sold by Mrs 'Granny' Duce in one of the West Riding towns in 1854.
                    </span> <br>
                    <span class="mid">
                        After a long time, this food hold perfectly it's demand & popularity from all the age.<br> Just come or order and taste it!
                    </span>
                </p>
            </div>          
        </div>
    </section>

    <!-- ========== Section-7 ========== -->
    <section class="section-7">
        <div class="logo"> </div>
        <div class="describe">
            <p>
                Our signature burgers are always freshly made, <br> hand-smashed to order with 100% Certified Angus Beef that is grass fed and supports local farms. <br>Equipped with the freshest ingredients. <br> No two burgers are alike – from sweet-seekers, smokehouse flavor fans, heat champions, and folks just looking for a tasty classic. <br> We’ve got you covered.
            </p>
        </div>
    </section>

    <!-- ========== Section-8 ========== -->
    <section class="section-8">
        <div class="manage-frame">
            <!-- google map -->
            <div class="map">
                <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.3530674266267!2d90.40378344149165!3d23.778313044790497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77094eace8b%3A0x1cd8c2d9239b6cb7!2sMohakhali%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1677347021914!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- video -->
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0XTd7bHalm4?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
</body>

</html>