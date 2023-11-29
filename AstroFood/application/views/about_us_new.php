<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About_us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/about_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,600&family=Lato:ital,wght@1,300;1,400;1,700&family=Pangolin&family=Playfair+Display:ital,wght@1,500&family=Poppins:wght@300&family=Raleway:ital,wght@1,500;1,600;1,700&family=Roboto+Mono:ital,wght@1,300;1,600&family=Roboto+Slab:wght@100;200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        /*============== Main Area ==============*/
        #this-body{
            background-color: rgba(52, 73, 94, .5);
        }

        /*============== 1st Area ==============*/
        .section1{
            height: 70vh;
            width: 100%;
            background-color: cadetblue;
            background-image: url('../../public/img/aboutus_background_sec_1.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            opacity: 0.8;
        }
        .section1-div{
            height: 70vh;
            width: 100%;
            display: flex;
        }
        .section1-div .section1-text{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            font-family: agency FB;
            color: rgba(245, 246, 250,1.0);
            font-size: 80px;
            font-weight: bold;
        }

        /*============== 2nd Area ==============*/
        .section2{
            height: 100vh;
            width: 100%;
            background-color: rgba(236, 240, 241, 1.0);
        }
        .section2-div{
            height: 100vh;
            width: 80%;
            margin: 0 10%;
            display: flex;
            flex-direction: column;
        }
        .section2-heading{
            height: 10vh;
            width: 60%;
            margin: 0 auto;
            margin-top: 10vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            font-family: 'Roboto Slab', serif;
            font-size: 27px;
        }
        .section2-text{
            height: 50vh;
            width: 70%;
            margin: 0 auto;
            margin-top: 2vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: start;
            text-align: center;
            font-family: 'Lato', sans-serif;
            font-size: 22px;
        }
        
        /*============== 3rd Area ==============*/
        .section3{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/aboutus_background_sec_3.jpg');
            background-attachment: fixed;
            background-size: cover;
        }
        .section3-div{
            height: 70vh;
            width: 100%;
            display: flex;
        }
        /*--- --- mission --- ---*/
        .section3-mission{
            height: 60vh;
            width: 50%;
            display: flex;
            flex-direction: column;
            margin: auto 0;
        }
        .section3-mission h1{
            padding: 10px 0;
            text-align: center;
            color: #333;
            font-family: 'Playfair Display', serif;
            font-size: 30px;
        }
        .section3-mission p{
            padding: 15px;
            margin: 0 12%;
            font-family: 'Lato', sans-serif;
            color: #333;
            font-size: 20px;
        }
        /*--- --- Vision --- ---*/
        .section3-vision{
            height: 60vh;
            width: 50%;
            display: flex;
            flex-direction: column;
            margin: auto 0;
        }
        .section3-vision h1{
            padding: 10px 0;
            text-align: center;
            color: #333;
            font-family: 'Playfair Display', serif;
            font-size: 30px;
        }
        .section3-vision p{
            padding: 15px;
            margin: 0 12%;
            font-family: 'Lato', sans-serif;
            color: #333;
            font-size: 20px;
        }
        .section3-vision ul li{
            text-align: center;
            color: #333;
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            overflow: hidden;
        }

        /*============== 4th Area ==============*/
       .section4{
            height: 100vh;
            width: 100%;
            background-image: url('../../public/img/aboutus_background_sec_4.jpg');
            background-attachment: fixed;
            background-size: cover;
        }
        .section4-div{
            height: 100vh;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: center;
        }
        .management_section_heading{
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 35px;
            padding: 15px 0;
            background-color: rgba(0, 210, 211, .4);
        }

        /*Admin*/
        .section4-div .admin{
            height: 85vh;
            width: 30%;
            background-color: rgba(0, 210, 211, .4);
            box-shadow: 3px 4px 4px rgba(242, 243, 244, 0.6);
            margin-top: -40px;
        }
        .admin_photo{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/Admin.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border: 6px solid white;
            border-radius: 2px;
        }
        .admin_description{
            width: 100%;
            height: auto;
            padding: 10px 0;
        }
        .admin_description h1, h3{
            text-align: center;
            font-family: 'Lato', sans-serif;
        }
        .admin-social-links{
            display: flex;
            justify-content: center;          
        }
        .admin-social-links a{
            text-decoration: none;
            font-size: 30px;
            padding: 5px;
            color: #1e272e;
        }
        .admin-social-links a:hover{
            color: #ffffff;
            transition: .3s ease-in-out;
        }

        /*System Manager*/
        .section4-div .manager{
            height: 85vh;
            width: 30%;
            background-color: rgba(0, 210, 211, .4);
            box-shadow: 3px 4px 4px rgba(242, 243, 244, 0.6);
            margin-top: -40px;
        }
        .manager_photo{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/Manager.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border: 6px solid white;
            border-radius: 2px;
        }
        .manager_description{
            width: 100%;
            height: auto;
            padding: 10px 0;
        }
        .manager_description h1, h3{
            text-align: center;
            font-family: 'Lato', sans-serif;
        }
        .manager-social-links{
            display: flex;
            justify-content: center;          
        }
        .manager-social-links a{
            text-decoration: none;
            font-size: 30px;
            padding: 5px;
            color: #1e272e;
        }
        .manager-social-links a:hover{
            color: #ffffff;
            transition: .3s ease-in-out;
        }

        /*HOD of Marketing*/
        .section4-div .hod_mkt{
            height: 85vh;
            width: 30%;
            background-color: rgba(0, 210, 211, .4);
            box-shadow: 3px 4px 4px rgba(242, 243, 244, 0.6);
            margin-top: -40px;
        }
        .hod_mkt_photo{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/HOD_MKT.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border: 6px solid white;
            border-radius: 2px;
        }
        .hod_mkt_description{
            width: 100%;
            height: auto;
            padding: 10px 0;
        }
        .hod_mkt_description h1, h3{
            text-align: center;
            font-family: 'Lato', sans-serif;
        }
        .hod_mkt-social-links{
            display: flex;
            justify-content: center;          
        }
        .hod_mkt-social-links a{
            text-decoration: none;
            font-size: 30px;
            padding: 5px;
            color: #1e272e;
        }
        .hod_mkt-social-links a:hover{
            color: #ffffff;
            transition: .3s ease-in-out;
        }

        /*============== 4th Extend Area ==============*/
        .section4_extend{
            height: 100vh;
            width: 100%;
            background-image: url('../../public/img/aboutus_background_sec_4.jpg');
            background-attachment: fixed;
            background-size: cover;
        }
        .section4_extend_div{
            height: 100vh;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-content: center;
        }

        /*Brand Designer*/
        .section4_extend_div .designer{
            height: 85vh;
            width: 30%;
            background-color: rgba(0, 210, 211, .4);
            box-shadow: 3px 4px 4px rgba(242, 243, 244, 0.6);
            margin-top: -40px;
        }
        .designer_photo{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/Designer.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border: 6px solid white;
            border-radius: 2px;
        }
        .designer_description{
            width: 100%;
            height: auto;
            padding: 10px 0;
        }
        .designer_description h1, h3{
            text-align: center;
            font-family: 'Lato', sans-serif;
        }
        .designer-social-links{
            display: flex;
            justify-content: center;          
        }
        .designer-social-links a{
            text-decoration: none;
            font-size: 30px;
            padding: 5px;
            color: #1e272e;
        }
        .designer-social-links a:hover{
            color: #ffffff;
            transition: .3s ease-in-out;
        }

        /*Brand Ambassador*/
        .section4_extend_div .brandAmbsdr{
            height: 85vh;
            width: 30%;
            background-color: rgba(0, 210, 211, .4);
            box-shadow: 3px 4px 4px rgba(242, 243, 244, 0.6);
            margin-top: -40px;
        }
        .brandAmbsdr_photo{
            height: 70vh;
            width: 100%;
            background-image: url('../../public/img/Brand_Ambassador.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            border: 6px solid white;
            border-radius: 2px;
        }
        .brandAmbsdr_description{
            width: 100%;
            height: auto;
            padding: 10px 0;
        }
        .brandAmbsdr_description h1, h3{
            text-align: center;
            font-family: 'Lato', sans-serif;
        }
        .brandAmbsdr-social-links{
            display: flex;
            justify-content: center;          
        }
        .brandAmbsdr-social-links a{
            text-decoration: none;
            font-size: 30px;
            padding: 5px;
            color: #1e272e;
        }
        .brandAmbsdr-social-links a:hover{
            color: #ffffff;
            transition: .3s ease-in-out;
        }


        /*============== 5th Area ==============*/
        .section5{
            min-height: 60vh;
            width: 100%;
            background-color: rgba(52, 73, 94, .3);
        }
        hr{
            margin-top: 2px;
            padding: 2px;
            background-color: #95afc0;
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

<!-- 1st Section -->
<section class="section1">
    <div class="section1-div">
        <div class="section1-text">Our Restaurant</div>     
    </div>
</section>

<!-- 2nd Section -->
<section class="section2">
    <div class="section2-div">
        <div class="section2-heading">
            <h1>Our Story</h1>
        </div>
        <div class="section2-text">
            <p>It was in 2021, when the time of Covid-19 so that it was really challenging for me to open the full management system by doing a proper plan & policy. There was so much risk but with this simple amount of risk I hardly decided to open it. Then, finally it has been launched by the main branch located in Uttara. It was really an successful start-up. Then, the experience of the system inspired me to open other two of our branches in Banasree and Gulshan. Our plan, policy, food quality, quantity of employee, management team and everything is stabling gradually in a good way.</p><br>
            <p>The overall journey was not easy but similarly it was much more interesting. And obviously the management team's support was a great thing behind the success. If the work is honest and the plan is good so the success is just the matter of time which I greatly realize after doing this successful management system. Our annual growth rate increasing day by day because this system is able to reach the target customers already & they has a positive review AstroFood. Currently, In total 30 employee works in each brach which means In total 90 employees are woriking with AstroFood. Hope Soon it Will be 100++
            </p>
        </div>
    </div>
</section>

<!-- 3rd Section -->
<section class="section3">
    <div class="section3-div">
        <div class="section3-mission">
            <h1>Our Mission</h1>
            <p>
                The journey of Astro Food started since 2021. First thing of focuse was to make sure the good food quality & deliver it to the customer in a correct time. we achived a lot of popularity very soon. we have a lot of plan about this system we gradually we will hardly try to add some great feature & great advantages.
            </p>
            <p>
                We always ensures that the food quality will be amazing which also will be budget friendly. we are highly concern all the time about out managemane system.
            </p>
        </div>
        <div class="section3-vision">
            <h1>Our Vision</h1>
            <p>Always focus out the management system and some of visionary issues to upgrading the overall problems - </p>
            <ul>
                <li>Hygienic & Salubrious Method.</li>
                <li>Available Food Stock.</li>
                <li>Customer Friendly Budget.</li>
                <li>Customer Demand.</li>
                <li>Delivery Management on time.</li>
                <li>Popularity Rating.</li>
            </ul>
        </div>
    </div>
</section>

<!-- 4th Section -->
<section class="section4">
    <h1 class="management_section_heading">Management Profiles</h1>
    <div class="section4-div">
        <div class="admin">
            <div class="admin_photo"></div>
            <div class="admin_description">
                <h1>&mdash; Sowmik Ahmed &mdash;</h1>
                <h3>Admin, AstroFood</h3>
                <div class="admin-social-links">
                    <a href="https://www.facebook.com/sowmik.ahmed.aiub/" target="_blank">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/sowmik-ahmed-aiub/" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="manager">
            <div class="manager_photo"></div>
            <div class="manager_description">
                <h1>&mdash; James Watson &mdash;</h1>
                <h3>System Manager, AstroFood</h3>
                <div class="manager-social-links">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="hod_mkt">
            <div class="hod_mkt_photo"></div>
            <div class="hod_mkt_description">
                <h1>&mdash; Emily Embrose &mdash;</h1>
                <h3>HOD-Marketing, AstroFood</h3>
                <div class="hod_mkt-social-links">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div> 
    </div>
</section>

<!-- 4th extend section -->
<section class="section4_extend">
    <div class="section4_extend_div">
        <div class="designer">
            <div class="designer_photo"></div>
            <div class="designer_description">
                <h1>&mdash; Scarlett Isabella &mdash;</h1>
                <h3>Designer & Coordinator, AstroFood</h3>
                <div class="designer-social-links">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="brandAmbsdr">
            <div class="brandAmbsdr_photo"></div>
            <div class="brandAmbsdr_description">
                <h1>&mdash; Jason Kenwel &mdash;</h1>
                <h3>Brand Ambassador, AstroFood</h3>
                <div class="brandAmbsdr-social-links">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5th Section -->
<section class="section5">
    <div class="area5">
        <div class="node1">
            <center>
                <h1 class="shop_heading">&mdash; Gulshan Branch &mdash;</h1>
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
                <h1 class="shop_heading">&mdash; Banasree Branch &mdash;</h1>
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
                <h1 class="shop_heading">&mdash; Uttara Branch &mdash;</h1>
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

