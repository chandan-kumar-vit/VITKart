<?php
    session_start();
    include 'navigator.php';
    $address=$_POST["address"];
    setcookie("address",$address);
    $rno="CK".rand(9999,1000000)."AUK";
    setcookie("trans_id",$rno);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="payment.css">
    </head>
    <body>
    <h1>VITKart</h1>
        <div>
            <form method="POST" class="pay_details" action="gateway.php">
                <center><h2>Billing Script</h2></center>
                <h3> <label>Transaction Id:</label> <?php echo $rno; ?> </h3>
                <h3><label>Total Amount:</label> <?php echo "<b>".$_COOKIE["total_amt"]."</b>" ?></h3>
                <h3> <label>Billing Name:</label> <?php echo $_COOKIE["username"]; ?> </h3>
                <h3> <label>E-mail address:</label> <?php echo $_COOKIE["email"]; ?> </h3>
                <h3> <label>Address:</label> <?php echo $_COOKIE["address"]; ?> </h3>
                <label id="lb">Select Payment Method:</label>
                <select style="padding:7px;" name="paymode">
                    <option value="COD">Cash on Delivery</option>
                    <option value="Paytm">Paytm</option>
                </select><br><br>
                <button type="submit" id="confirm" name="cnf">Confirm Booking</button><button type="submit" id="back" name="back_cart"><a href="veiw_cart.php">Back to Cart</a></button>
            </form>
        </div>
    </body>
</html>