<?php
    session_start();
    include 'navigator.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="view_cart.css">
    </head>
    <body>
        <h1>VITKart</h1>
        
        <div class="cart_table">
            <?php
            //echo $_COOKIE["username"]."<br>"; ?>
            <label id="cart_heading">Already in Cart</label><br><br>
            <table>
                <tr>
                    <th>Sl no.</th>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php

                    $sno=1;
                    foreach($_SESSION as $products){
                        
                        foreach($products as $row){
                        
                        echo "<tr>";
                            echo "<td>".($sno++)."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['qty']."</td>";
                            
                            echo "<td>₹".$row['total']."</td>";
                            
                            echo "<form method='POST' action='add_item.php'>";
                            echo "<input type='hidden' value='".$row['code']."' name='add_kar'>";
                            echo "<td><button type='submit' style='padding:7px;font-weight:bold;border-radius:5px;background-color:lime;'>Add</button></td>";
                            echo "</form>";
                            echo "<form method='POST' action='del_item.php'>";
                            echo "<input type='hidden' value='".$row['code']."' name='del_kar'>";
                            echo "<td><button type='submit' style='padding:7px;font-weight:bold;border-radius:5px;background-color:salmon;'>Delete</button></td>";
                            echo "</form>";
                        echo "</tr>";
                    }
                
                    }
                ?>
                
            </table>
            <br>
            <form method="POST" action="checkout.php">
            <button type="submit" id="payment">Proceed to Checkout</button></form>
        </div>
        <br>

        <!-- RECCOMENDATION USING MACHINE LEARNING -->

        <div class="reccomendation">
            <h2>Reccomended Items</h2>
            <?php
                foreach($_SESSION as $products)
                {
                    foreach($products as $row)
                    {
                        $num=$row['code'];
                        // Get the contents of the JSON file 
                        $json_cont = file_get_contents("recommendation/output.json");
                        // Convert to array 
                        $array = json_decode($json_cont, true);
                        foreach($array as $key=>$value)
                        {
                            if($num==$key)
                            {
                                //echo $array[$num]."<br>";
                                $servername="localhost";
                                $username="username";
                                $password="";
                                $dbname="vitkart";
                            
                                //create connection
                                $conn= new mysqli($servername,$username,$password,$dbname);
                            
                                //check connection
                                if($conn->connect_error)
                                {
                                    die("connection failed: ".$conn->connect_error);
                                }
                                $sql="SELECT * FROM products WHERE code=$num";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "<input type='hidden' name='item_code_add' value='".$row['code']."'>" ;
                                        echo "<input type='hidden' name='item_name_add' value='".$row['name']."'>" ;
                                        echo "<input type='hidden' name='item_price_add' value='".$row['price']."'>" ;
                                        
                                        $itm_code=$row["code"];
                                        echo "<img src='".$row["img_dir"]."'>";
                                        echo "<label ></label>".$row["name"];
                                        echo "<label >₹</label>".$row["price"];
                                        echo "<button type='submit' style='margin-left:10px;padding:7px;background-color:orange;font-weight:bold;' name='".$itm_code."' >Add To Cart</button>";    

                                    }
                                }

                            }
                        }
                        
                    }
                }
            ?>
        </div>

    </body>

</html>
