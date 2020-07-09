<?php
    //session_start();
?>
<html>
    <head>
        <title>VITKart</title>
        <link rel="stylesheet" type="text/css" href="navigator.css">
        <script src="category_js.js"></script>
    </head>
    <body>
    <ul class="drop">
        <li><img src="reallogo.png" id="logoimg"></li>
        <li><a href="shopping_window.php">Home</a></li>
        <li><a href="#">Why VITKart?</a></li>
        
        <li><a href="#">More</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="veiw_cart.php">Veiw Cart</a></li>
        
        <li style='float:right'><button style='padding:7px;background-color:springgreen;'>Search</button></li>
        <li style='float:right'><input type="text" name="search" placeholder="Here..." onkeyup="showHint(this.value)"><br></li>
        

        <form method="POST" action="logout.php">
        <li style='float:right;'><button type="submit" style="padding:15px;font-weight:bold;background-color:darkgrey;border:none;">Log Out</button></li></form>
        <li style='float:right; padding:4px;'><b> <?php echo $_COOKIE["username"]; ?> </b></li>
        <form method="POST" action="veiw_cart.php" onsubmit="update_cart()">
        <li style='float:right;'><input type="submit" id="cart_but"
        style="padding:10px;background-image:url(cart_img.png);background-size:cover;border-radius:50%;color:red; font-weight:bold;" value="CART"></input></li>
        </form>
         
    </ul>
    </body>
</html>
