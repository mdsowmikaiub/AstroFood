<?php
	include 'header.php';
	include '../../application/controllers/contactValidate.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact</title>
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
	</style>
	<style type="text/css">
		.heading{
			height: 100px;
			width: 80%;
			background: linear-gradient(rgba(231, 76, 60, 0.6), rgba(52, 73, 94, 0.7));
			margin: 0 auto;
			margin-top: 30px;
			border-radius: 4px;
		}
		.heading h1{
			padding: 20px;
			font-size: 40px;
			color: rgba(236, 240, 241,1.0);
		}

		#contact_section_area{
			min-height: 100vh;
			max-width: 100%;
			/*background: wheat;*/
			margin-top: -45px;
		}
		#contact_div_area{
			min-height: 100vh;
			max-width: 80%;
			display: flex;
			align-items: center;
			/*background: greenyellow;*/
			margin: 0 auto;
		}
		#contact_form{
			min-height: 80vh;
			width: 100%;
			/*background: red;*/
			background-color: rgba(52, 73, 94, .7);
			border-radius: 4px;
		}
		#controlling_area{
			min-height: 70vh;
			width: 60%;
			display: flex;
			flex-direction: column;
			/*background: yellow;*/
			background-color: rgba(127, 140, 141, 0.5);
			box-shadow: rgba(236, 240, 241, 0.6)  1px 1px 15px;
			border-radius: 4px;
			margin: 5% auto;
		}
		.naming_zone{
			height: 70px;
			width: 100%;
			/*background: coral;*/
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
		.naming_zone div{
			padding: 5px 10px;
			/*background: gainsboro;*/
			width: 50%;
		}
		.naming_zone div input{
			width: 100%;
			margin-top: 15px;
		}
		#contact_form input{
			padding: 10px;
			border: 0;
			outline: 0;
			border-radius: 5px;
			font-size: medium;
			font-weight: bold;
			color: #34495e;
			font-family: Tahoma FB;
		}
		.person_email{
			height: 60px;
			width: 100%;
			/*background: bisque;*/
			padding: 10px;
		}
		.person_email input{
			width: 100%;
		}
		.person_phone_number{
			height: 60px;
			width: 100%;
			/*background: beige;*/
			padding: 10px;
		}
		.person_phone_number input{
			width: 100%;
		}
		.person_message{
			height: 250px;
			width: 100%;
			/*background: aquamarine;*/
			padding: 10px;
		}
		.person_message #txt-portion{
			height: 200px;
			width: 100%;
			border: 0;
			border-radius: 5px;
			font-size: large;
			font-weight: bold;
			outline: 0;
			padding: 10px;
			resize: none;
		}
		#submission{
			width: 60%;
			margin: 15px auto 0 auto;
			border-radius: 20px;
		}
		#submission input{
			width: 100%;
			border-radius: 20px;
			background: #2ecc71;
			color: #fff;
			letter-spacing: 2px;
			text-transform: uppercase;
			font-family: sans-serif;
			font-weight: normal;
		}
		#submission input:hover{
			background: #e74c3c;
			border-radius: 20px;
			color: antiquewhite;
			transition: .5s;
			letter-spacing: 4px;
		}
		#feedback_title{
			color: rgb(236, 240, 241);
			padding: 1px;
		}
		#prompt-feedback{
			color: limegreen;
			margin-top:-15px;
			text-shadow: 4px 4px 8px #4cd137;
			font-weight: 4px;
		}
		.error {
	      color: coral;
	      font-size: small;
	      padding: -5px;
	      text-shadow: 4px 4px 8px #FF0000;
	    }
	</style>
</head>
<body>
	<?php  ?>

	<section>
		<center class="heading">
			<h1>&mdash; Contact Us &mdash;</h1>
			<h4 id="prompt-feedback"><?php if (isset($getMsg)) {echo $getMsg;} ?> </h4>
		</center>
	</section>

	<section id="contact_section_area">
		<div id="contact_div_area">
			<form action="" method="POST" id="contact_form">
				<div id="controlling_area">
					<!-- Naming Zone -->
					<div class="naming_zone">
						<div class="person_first_name">
							<input type="text" name="personFirstName" placeholder="Enter your first name">
							<span class="error"><?php echo $personFirstNameErr; ?></span>
						</div>
						<div class="person_last_name">
							<input type="text" name="personLastName" placeholder="Enter your last name">
							<span class="error"><?php echo $personLastNameErr; ?></span>
						</div>
					</div>

					<!-- E-mail Zone -->
					<div class="person_email">
						<input type="email" name="personEmail" placeholder="Enter your email address">
						<span class="error"><?php echo $personEmailErr; ?></span>
					</div>

					<!-- Phone Number Zone -->
					<div class="person_phone_number">
						<input type="number" name="personPhone" placeholder="Enter your phone number">
						<span class="error"><?php echo $personPhoneErr; ?></span>
					</div>

					<!-- Message Zone -->
					<div class="person_message">
						<label id="feedback_title">Write Your Feedback</label><br>
						<textarea id="txt-portion" dir="ltr" name="personMsg" placeholder="Write your message here..."></textarea>
						<span class="error"><?php echo $personMsgErr; ?></span>	
					</div>

					<!-- Submission -->
					<div id="submission">
						<input type="submit" name="submit_feedback" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</section>


<?php include 'footer.php'; ?>

</body>
</html>