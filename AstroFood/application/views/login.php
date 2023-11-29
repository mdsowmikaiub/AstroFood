<?php
    include 'header.php';
    include '../../application/controllers/loginValidate.php';

    if (isset($_COOKIE['admin'])) {
        header('location: adminProfile.php');
    }
    if (isset($_COOKIE['user'])) {
        header('location: profile.php');
    }

?>



<html>
<head>
    <title>Login</title>
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
    <head>
        <style>
            .reg-success{
                font-size: large;
                color: limegreen;
                text-shadow: 4px 4px 8px #4cd137;
                padding: 10px 0;
                display: inline-block;
                margin-left: 72px;
            }

            .error{
                color: coral;
                font-size: small;
                padding: -3px;
                text-shadow: 4px 4px 8px #FF0000;
            }
            /* This .show-password is very important class for adjusting icon/text in the input field */
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
    </head>


    <div class="form-container">
    
        <form id="login-form" method="POST">
            <span class="reg-success">
                <?php if(isset($_GET['usercreated'])) { echo "Registration Successful"; } ?>
            </span>
            
            <h2 class="login-form-title">Log In</h2>

            <fieldset>
                <div>
                    <div>
                        <label for="usernameOrEmail">Username</label>
                        <input autofocus class="form-input-box" id="usernameOrEmail" name="usernameOrEmail" placeholder="Enter your username here" type="text">
                        <span class="error"> <?php echo $admin_username_err; ?> </span>
                    </div>
                    

                    <div>
                        <label for="password">Password</label>
                        <div class="show-password">                           
                            <img id="eyeicon" src="../../public/img/eye_close.png">         
                        </div>
                        <input id="password" name="password" autocomplete="on" class="form-input-box" placeholder="Enter your password here" type="password">
                        <span class="error"> <?php echo $admin_password_err; ?> </span>
                    </div>
                    

                    <div class="remember-me">
                        <input id="remember" name="remember" type="checkbox"/>
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
            </fieldset>

            <div class="bottom">
                <div class="center-text">
                    <p id="prompt-message"></p>
                </div>
                <div class="center">
                    <input id="form-submit" type="submit" class="button" value="Login" name="login-btn">
                </div>
                <div class="center-text bottom-text">
                    New here? <a href="Register.php">Create an Account</a>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="../../public/js/password_ShowHide.js"></script>

</body>

<?php include 'footer.php'; ?>
</html>