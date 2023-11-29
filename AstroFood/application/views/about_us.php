<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About_us</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/about_us.css">
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
        /*============== First Area ==============*/
        #this-body{
            background-color: rgba(52, 73, 94, .5);
        }
        .content-area{
            min-height: 500px;
            max-width: 700px;
            background: #2f3640;
            opacity: 0.7;
            margin: 30px 2% 30px 45%;
            border-radius: 10px;
            box-shadow: rgba(83, 92, 104, 1.0)  1px 1px 15px;
            display: flex;
            flex-direction: column;
        }
        .topside-logo{
            height: 120px;
            width: 120px;
            margin: 0 auto;
        }
        .gitlink{
            margin: 0 auto;
            padding: 10px;
            color: #3498db;
            font-size: large;
        }
        .mission{
            margin-top: 30px;
        }
        .mission h2, hr{
            color: #f5f6fa;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .mission p{
            margin: 4px 5% 2px 5%;
            color: #c7ecee;
            text-align: justify;
            font-family: Tahoma;
            font-size: large;
            font-style: italic;
        }
        .vission{
            margin-top: 40px;
        }
        .vission h2, hr{
            color: #f5f6fa;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .vission p{
            margin: 4px 5% 2px 5%;
            color: #c7ecee;
            text-align: justify;
            font-family: Tahoma;
            font-size: large;
            font-style: italic;
        }
        .vission .naming li{
            margin-top: 2px;
            margin-left: 10%;
            color: #c7ecee;
            font-family: Tahoma;
            font-size: large;
            font-style: italic;
        }
        .vission .naming{
            margin-top: 5px;
        }
        .vission .end-statement{
            margin: 5px 5% 30px 5%;
        }

        /*============== Second Area ==============*/
        .stuff-div{
            min-height: 400px;
            max-width: 1000px;
            background: #2f3640;
            opacity: 0.9;
            margin: 40px 10% 30px 20%;
            border-radius: 10px;
            box-shadow: rgba(83, 92, 104,1.0)  1px 1px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .stuff-1{
            height: 380px;
            width: 300px;
            background: #95afc0;
            margin-left: 2%;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }
        .stuff1-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff1-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff1-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }
        .stuff-2{
            height: 380px;
            width: 300px;
            background: #95afc0;
            border-radius: 4px;
            display: flex;
            flex-direction: column; 
        }
        .stuff2-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff2-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff2-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }
        .stuff-3{
            height: 380px;
            width: 300px;
            background: #95afc0;
            margin-right: 2%;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }
        .stuff3-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff3-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff3-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }

        /*============== Third Area ==============*/
        .ending{
            min-height: 400px;
            max-width: 1000px;
            background: #2f3640;
            opacity: 0.9;
            margin: 40px 0% 30px 30%;
            border-radius: 10px;
            box-shadow: rgba(83, 92, 104,1.0)  1px 1px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .stuff-4{
            height: 380px;
            width: 300px;
            background: #95afc0;
            margin-left: 2%;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }
        .stuff4-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff4-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff4-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }
        .stuff-5{
            height: 380px;
            width: 300px;
            background: #95afc0;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }
        .stuff5-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff5-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff5-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }
        .stuff-6{
            height: 380px;
            width: 300px;
            background: #95afc0;
            margin-right: 2%;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }
        .stuff6-img{
            height: 150px;
            width: 150px;
            margin: 10px auto 10px auto;
            border-radius: 50%;
        }
        .stuff6-info h3{
            color: #130f40;
            font-family: sans-serif;
            margin: 0 5%;
        }
        .stuff6-info p{
            margin: 4px 5% 2px 5%;
            color: #130f40;
            text-align: justify;
            font-family: Tahoma;
            font-size: medium;
            font-style: italic;
        }

        /*============== Fourth Area ==============*/
        .section4{
            min-height: 60vh;
            width: 100%;
            background-color: rgba(127, 140, 141, .3);
            margin:40px 0;
        }
        .area4{
            min-height: 60vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .area4>div{
            margin: 20px auto;
        }
        .port1{
            min-height: 60vh;
            width: 600px;
            margin-top: 2px;
        }
        .port1 img{
            min-height: 30vh;
            width: 100%;
            border-radius: 4px;
        }
        .portleft{
            min-height: 60vh;
            width: 400px;
            background-color: rgba(127, 140, 141, .55);
            display: flex;
            flex-direction: column;
            border-radius: 4px;
        }
        .portleft div{
            margin: 20px 20px;
            border-radius: 40%;
            background-color: rgba(127, 140, 141, .3);
        }
        .portleft div:hover{
            margin: 20px 10px;
            border-radius: 4px;
            transition: .5s;
        }
        .portright div{
            margin: 20px 20px;
            border-radius: 40%;
            background-color: rgba(127, 140, 141, .3);
        }
        .portright div:hover{
            margin: 20px 10px;
            border-radius: 4px;
            transition: .5s;
        }
        .portleftup{
            min-height: 38vh;
            max-width: 100%;
            background: url('../../public/img/ab_003.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .portleftdown{
            min-height: 38vh;
            max-width: 100%;
            background: url('../../public/img/ab_001.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .portright{
            min-height: 60vh;
            width: 400px;
            background-color: rgba(127, 140, 141, .55);
            display: flex;
            flex-direction: column;
            border-radius: 4px;
        }
        .portrightup{
            min-height: 38vh;
            max-width: 100%;
            background: url('../../public/img/ab_004.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .portrightdown{
            min-height: 38vh;
            max-width: 100%;
            background: url('../../public/img/ab_002.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*============== Fifth Area ==============*/
        .section5{
            min-height: 60vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .3);
        }
        .area5{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .area5 div{
            min-height: 40vh;
            width: 400px;
            background-color: rgba(127, 140, 141, .6);
            margin: 60px 50px;
            border-radius: 4px;
        }
        .area5 div:hover{
            background: rgba(231, 76, 60, 0.5);
        }
        .node1 center{
            margin: 30px 0;
            color: #ecf0f1;
        }
        .node1 center h1{
            letter-spacing: 3px;
            text-transform: uppercase;
        }
        .node2 center{
            margin: 30px 0;
            color: #ecf0f1;
        }
        .node2 center h1{
            letter-spacing: 3px;
            text-transform: uppercase;
        }
        .node3 center{
            margin: 30px 0;
            color: #ecf0f1;
        }
        .node3 center h1{
            letter-spacing: 3px;
            text-transform: uppercase;
        }
    </style>
</head>


<body class="welcome-body" id="this-body">

<!-- 1st Div Area -->
<div class="content-area">

    <img class="topside-logo" src="../../public/img/logo.png">
    <div class="gitlink">
        &mdash; Good Food, Good Life &mdash;
    </div>
    <div class="mission">
        <h2>Mission</h2>
        <hr>
        <p>
            The journey of Astro Food started since 2021. First thing of focuse was to make sure the good food quality & deliver it to the customer in a correct time. we achived a lot of popularity very soon. we have a lot of plan about this system we gradually we will hardly try to add some great feature & great advantages. <br><br>
            We always ensures that the food quality will be amazing which also will be budget friendly.
        </p>
    </div>
    <div class="vission">
        <h2>Vission</h2>
        <hr>
        <p>
            we always focus about out management system and some other issues.
        </p>
        
        <ul class="naming">
                <li>Hygienic & Salubrious Method.</li>
                <li>Available Food Stock.</li>
                <li>Customer Friendly Budget.</li>
                <li>Customer Demand.</li>
                <li>Delivery Management on time.</li>
                <li>Popularity Rating.</li>
                <li>Food Review</li>
        </ul>
        <p class="end-statement">
            we are highly concern all the time about out managemane system.
        </p>
    </div>
        
</div>

<!-- 2nd Div Area -->
<div class="stuff-div">
    <div class="stuff-1">
        <img class="stuff1-img" src="../../public/img/sir.jpg">
        <div class="stuff1-info">
            <h3>Md. Ismail Hossen</h3>
            <p><b>CEO, Astro Food</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">He is the Leader of this platform. He instructs in a amazing way & always suggests great business policy which is one of the main reason for successing rate expanding gradually. </p>
        </div>
    </div>

    <div class="stuff-2">
        <img class="stuff2-img" src="../../public/img/sowmik.jpg">
        <div class="stuff2-info">
            <h3>Md. Sowmik</h3>
            <p><b>System Admin</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">The main work is to handle this system by improving.<br>Md. Sowmik is a PHP developer who developed a big portion of this site & continuously trying to upgrade this site.</p>
        </div>
        
    </div>

    <div class="stuff-3">
        <img class="stuff3-img" src="../../public/img/farbin.jpg">
        <div class="stuff3-info">
            <h3>Farbin Aziz</h3>
            <p><b>System Admin</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">He plays important role to handle this system by gradually improving.<br>Farbin Aziz is a JS developer who developed many important features & upgrading this site.</p>
        </div>
        
    </div>
    
</div>

<!-- 3rd Div Area -->
<div class="ending">
    <div class="stuff-4">
        <img class="stuff4-img" src="../../public/img/Jahid.jpg">
        <div class="stuff4-info">
            <h3>Jahid Hasan</h3>
            <p><b>System Admin</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">Jahid Hasan basically works as UI/UX Designer in his professional life. He is a great designer & hold a good skill about graphic desiging field. His contribution is really admireable.</p>
        </div>
    </div>

    <div class="stuff-5">
        <img class="stuff5-img" src="../../public/img/sajeeb.jpg">
        <div class="stuff5-info">
            <h3>Shifuzzaman Sajeeb</h3>
            <p><b>System Admin</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">Shifuzzaman Sajeeb is an SQA Engineer in his professioanl life. He has a well contribution about this site from the begining. He helps by giving many important suggestions.</p>
        </div>      
    </div>

    <div class="stuff-6">
        <img class="stuff6-img" src="../../public/img/rashed.jpg">
        <div class="stuff6-info">
            <h3>Mr. Rashed Khan</h3>
            <p><b>Manager</b></p>
            <p style="font-family: Tahoma FB; font-size:20px;">Mr. Rashed Khan is the manager of the system who mainly manages the offline shops of  Astro Food in the Dhaka region. He is a good person & works his job as good as possible.</p>
        </div>      
    </div>
</div>

<!-- 4th Div Area -->
<section class="section4">
    <div class="area4">
        <div class="portleft">
            <div class="portleftup">
                
            </div>
            <div class="portleftdown">
                
            </div>
        </div>
        <div class="port1">
            <img src="../../public/img/grp.jpg">
        </div>
        <div class="portright">
            <div class="portrightup">
                
            </div>
            <div class="portrightdown">
                
            </div>
        </div>
    </div>
</section>

<!-- 5th Div Area -->
<section class="section5">
    <div class="area5">
        <div class="node1">
            <center>
                <h1>&mdash; Gulshan Branch &mdash;</h1>
                <hr><br>
                <h2>Visit our offline shop</h2>
                <h3>Come & See about us</h3>
                <h4>Gulshan offline Shop Branch</h4>
                <h4>Gulshan-2, Road-1, House No. - 1, GL Bhaban, Dhaka-1212</h4>
                <h4>Phone: 01789117165</h4>
                <h4>Availabe Offline Hours: 10am-10pm</h4>
            </center>
        </div>
        <div class="node2">
            <center>
                <h1>&mdash; Banasree Branch &mdash;</h1>
                <hr><br>
                <h2>Visit our offline shop</h2>
                <h3>Come & See about us</h3>
                <h4>Banasree offline Shop Branch</h4>
                <h4>Block-E, Road-3 (Beside Block-E Big Mouque), Dhaka-1212</h4>
                <h4>Phone: 01783826440</h4>
                <h4>Availabe Offline Hours: 10am-10pm</h4>
            </center>
        </div>
        <div class="node3">
            <center>
                <h1>&mdash; Uttara Branch &mdash;</h1>
                <hr><br>
                <h2>Visit our offline shop</h2>
                <h3>Come & See about us</h3>
                <h4>Uttara offline Shop Branch</h4>
                <h4>Sector-1, Road-5, House No. - 1 (beside the amusement park),  Dhaka-1212</h4>
                <h4>Phone: 01789117165</h4>
                <h4>Availabe Offline Hours: 10am-10pm</h4>
            </center>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>

    
</body>
</html>

