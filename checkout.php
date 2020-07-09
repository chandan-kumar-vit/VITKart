<?php
    session_start();
    include 'navigator.php';
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="checkout.css">
    </head>
    <body>
        <h1>VITKart</h1>
        <?php
            $total=0;
            $pcode=array();
            foreach($_SESSION as $product)
            {
                foreach($product as $row)
                {
                    array_push($pcode,$row['code']);
                }
            }
            //print_r($pcode);
            //connection
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

            if(sizeof($pcode)==0)
            {
                echo "<div class='cont'>";
                echo "NO ITEM FOUND IN CART !!<br><br>";
                echo "First add Item";
                echo "</div>";
            }
            else{
                
            $i;
            echo "<div style='float:left; width:90%; background-color:black;' class='cont'>";
            echo "<h3>PLease Check the details Carefully!</h3>";
            for($i=0;$i<sizeof($pcode);$i++)
            {
                $sql="SELECT * FROM products WHERE code='$pcode[$i]'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       
                       
                        echo "<input type='hidden' name='item_code_add' value='".$row['code']."'>" ;
                        $a=$row['code'];
                        echo "<input type='hidden' name='item_name_add' value='".$row['name']."'>" ;
                        $row['price']=$_SESSION['cart'][$a]['total'];
                        echo "<input type='hidden' name='item_price_add' value='".$row['price']."'>" ;
                        $total=$total+$row['price'];
                        $itm_code=$row["code"];
                        
                        echo "<img src='".$row["img_dir"]."'>";
                        echo "<textarea rows=5 cols=40 style='float:right;margin-right:20%;background-color:transparent;color:white;border:none;'>"
                        .$row["description"]."</textarea>";
                        echo "<label style='margin-left:50px;'></label>".$row["name"]."<br>";
                        echo "<label style='margin-left:50px;'>₹</label>".$row["price"]."<br>";
                        
                       
                    }
                } else {
                   // echo "0 results";
                }
            }
            echo "<form method='POST' action='payment.php'><br><br>";
            echo "<label>Enter address to deliver:</label><input type='text' name='address' style='padding:7px;margin-left:30px;'><br><br>";
            echo "<label><h3>Total amount to be paid=₹</label>".$total."</h3><br><br>";
            echo "<button type='submit' id='pay_gate'>Proceed to Payment</button>";
            setcookie("total_amt",$total);
            echo "</form>";
            echo "</div>";
        }
            $conn->close();
        ?>
        
    </body>
</html>
