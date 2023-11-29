<?php include 'header.php'; ?>

<head>
    <title>Register</title>
  <style>
    .error {
      color: coral;
      font-size: small;
      padding: -3px;
      text-shadow: 4px 4px 8px #FF0000;
    }
    .show-password {
        font-size: 14px;
        position: absolute;
        right: 0;
        margin-top: 3px;
        padding-right: 60px;
        cursor: pointer;
        color: #292828;
    }
  </style>
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

<?php include '../../application/controllers/registrationValidate.php' ?>

<div class="form-container">
        <form id="register-form" method="POST">
            <h2 class="login-form-title">Create an Account</h2>

            <fieldset>
                <div>
                    <div>
                        <label class="form-label" for="username">Username</label>
                        <input autofocus class="form-input-box" id="username"
                               name="username" placeholder="Enter your username here" type="text">
                        <span class="error"><?php echo $usernameErr; ?></span>
                    </div>
                    <div>
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input-box" id="email" name="email"
                               placeholder="Enter your email here" type="text">
                        <span class="error"><?php echo $emailErr; ?></span>
                    </div>

                    <!-- password start -->
                    <div>
                        <label class="form-label" for="password">Password</label>
                        <div class="show-password">                           
                            <img id="eyeicon" src="../../public/img/eye_close.png">         
                        </div>
                        <input autocomplete="off" class="form-input-box" id="password" name="password" placeholder="Enter your password here" type="password">
                        <span class="error"><?php echo $passwordErr; ?></span>
                    </div>
                    <!-- password end -->



                    <!-- confirm password start -->
                    <div>
                        <label class="form-label" for="cPassword">Confirm Password</label>
                        <div class="show-password">                           
                            <img id="eyeicon2" src="../../public/img/eye_close.png">         
                        </div>
                        <input autocomplete="off" class="form-input-box" id="cPassword" name="cPassword" placeholder="Re-write the password here" type="password">
                        <span class="error"><?php echo $cPasswordErr; ?></span>
                    </div>
                    <!-- confirm password end -->

                    <div>
                        <label class="form-label" for="phone">Phone Number</label>
                        <input class="form-input-box" id="phone" name="phone"
                               placeholder="Enter your phone number here" type="text">
                        <span class="error"><?php echo $phoneErr; ?></span>
                    </div>
                    <div>
                        <label>Gender</label>
                        <div class="radio-button" id="radio-button-box">
                            <input id="male" name="gender" type="radio" value="Male">
                            <label class="radio-label" for="male" style="color:black;">Male</label>
                            <!-- label for making a gap between male & female -->
                            <label style="color:white;"> no </label>
                            <input id="female" name="gender" type="radio" value="Female">
                            <label class="radio-label" for="female" style="color:black;">Female</label>
                        </div>
                        <span class="error"><?php echo $genderErr; ?></span>
                    </div>
                </div>
            </fieldset>

            <div class="bottom">
                <div class="center-text">
                    <p id="prompt-message"></p>
                </div>
                <div class="center">
                    <input id="form-submit" type="submit" class="button" value="Register" name="submit-btn">
                </div>
                <div class="center-text bottom-text">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="../../public/js/password_ShowHide.js"></script>
</body>

<?php include 'footer.php'; ?>