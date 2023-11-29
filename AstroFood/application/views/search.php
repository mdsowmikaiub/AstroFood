<?php
include("../../config/config.php");
$taka = "/= taka";


$myvalue = $_POST['searchValue'];
$query = "SELECT * FROM food WHERE foodname like '%$myvalue%'";

$result = mysqli_query($conn, $query);

while ($single_data_after_break=mysqli_fetch_assoc($result)) { ?>
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