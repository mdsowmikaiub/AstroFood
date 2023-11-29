<?php
include 'header.php';
if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../public/css/adminProfile.css">
    <title>Admin-Profile</title>
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
    <div class="content-area">

        <img class="topside-logo" src="../../public/img/logo.png">

        <div class="gitlink">
            <h2 style="color: #f3a683;">A D M I N</h2>
        </div>

        <br><br>

        <a href="admin_foodList.php" class="admin-access">Manage Food</a><br>
        <a href="admin_userList.php" class="admin-access">View User</a><br>
        <a href="admin_viewOrder.php" class="admin-access">View Order</a><br>
        <a href="admin_userfeedback.php" class="admin-access">View Feedback</a>
       
    </div>


<?php include 'footer.php'; ?>
</body>
</html>




