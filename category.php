<?php
    include 'navigator.php'
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="category_css.css">
    <!--    <script src="category_js.js"></script>     -->
    </head>

    <body>
        
        <h1>VITKart</h1>

        <br><br>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label id="lb">Select Category:</label>
            <select name="sel_cate" style="padding:7px;">
                <option value="books">books</option>
                <option value="room_accessory">room accessory</option>
                <option value="stationary">stationary</option>
                <option value="electronics">electronics</option>
                <option value="wearables">wearables</option>
                <option value="eatables">eatables</option>
                <option value="other">other</option>
            </select>
            <button type="submit" name='internal_cat' style="padding:7px; background-color:greenyellow;">SHOW</button>
        </form>
        
        <?php 
        
            if(isset($_POST['internal_cat']))
            {            

                $cat=$_POST['sel_cate'];
                $n=-1;
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
                
        
                // sql commands
                $sql="SELECT * FROM products WHERE category='$cat'";
                $result = $conn->query($sql);

                //echo "<form method='POST' action='add_cart.php'>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       
                       echo "<form method='POST' action='add_cart.php'>";
                        echo "<input type='hidden' name='item_code_add' value='".$row['code']."'>" ;
                        echo "<input type='hidden' name='item_name_add' value='".$row['name']."'>" ;
                        echo "<input type='hidden' name='item_price_add' value='".$row['price']."'>" ;
                        $n=$n+1;
                        $itm_code=$row["code"];
                        echo "<div style='float:left; width:90%; background-color:black;' class='cont'>";
                        echo "<img src='".$row["img_dir"]."'>";
                        echo "<textarea rows=5 cols=40 style='float:right;margin-right:20%;background-color:transparent;color:white;border:none;'>"
                        .$row["description"]."</textarea>";
                        echo "<label style='margin-left:50px;'></label>".$row["name"]."<br>";
                        echo "<label style='margin-left:50px;'>₹</label>".$row["price"]."<br>";
                        echo "<button type='submit' style='margin-left:50px;padding:7px;background-color:orange;font-weight:bold;' name='".$itm_code."' >Add To Cart</button>";    
                        
                        echo "</form>";
                        echo "</div>";
                       
                    }
                } else {
                   // echo "0 results";
                }
                //echo "</form>";
                $conn->close();

            }
            
            else{
                $cat="books";
                $n=-1;
                //$item_code=[];
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
                
        
                // sql commands
                $sql="SELECT * FROM products WHERE category='$cat'";
                $result = $conn->query($sql);

                //echo "<form method='POST' action='add_cart.php'>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       // $item_code[]=$row["code"];
                       echo "<form method='POST' action='add_cart.php'>";
                        echo "<input type='hidden' name='item_code_add' value='".$row['code']."'>" ;
                        echo "<input type='hidden' name='item_name_add' value='".$row['name']."'>" ;
                        echo "<input type='hidden' name='item_price_add' value='".$row['price']."'>" ;
                        $n=$n+1;
                        $itm_code=$row["code"];
                        echo "<div style='float:left; width:90%; background-color:black;' class='cont'>";
                        echo "<img src='".$row["img_dir"]."'>";
                        echo "<textarea rows=5 cols=40 style='float:right;margin-right:20%;background-color:transparent;color:white;border:none;'>"
                        .$row["description"]."</textarea>";
                        echo "<label style='margin-left:50px;'></label>".$row["name"]."<br>";
                        echo "<label style='margin-left:50px;'>₹</label>".$row["price"]."<br>";
                        echo "<button type='submit' style='margin-left:50px;padding:7px;background-color:orange;font-weight:bold;' name='".$itm_code."' >Add To Cart</button>";    
                        
                       echo "</form>";
                        echo "</div>";
                       
                    }
                } else {
                   // echo "0 results";
                }
                //echo "</form>";
                $conn->close();
            }
            
            ?>



            

      
            <?php 

                /*
                $cat=$_POST['sel_cat'];
                $n=-1;
               

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
                
        
                // sql commands
                $sql="SELECT * FROM products WHERE category='$cat'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       // $item_code[]=$row["code"];
                       echo "<form method='POST' action='add_cart.php'>";
                        echo "<input type='hidden' name='item_code_add' value='".$row['code']."'>" ;
                        $n=$n+1;
                        $itm_code=$row["code"];
                        echo "<div style='float:left; width:90%; background-color:black;' class='cont'>";
                        echo "<img src='".$row["img_dir"]."'>";
                        echo "<textarea rows=5 cols=40 style='float:right;margin-right:20%;background-color:transparent;color:white;border:none;'>"
                        .$row["description"]."</textarea>";
                        echo "<label style='margin-left:50px;'></label>".$row["name"]."<br>";
                        echo "<label style='margin-left:50px;'>₹</label>".$row["price"]."<br>";
                        echo "<button type='submit' style='margin-left:50px;padding:7px;background-color:orange;font-weight:bold;' name='".$itm_code."' >Add To Cart</button>";    
                        
                        echo "</form>";
                        echo "</div>";
                       
                    }
                } else {
                   // echo "0 results";
                }
                
                $conn->close();
            */            
            ?>
            
    </body>

</html>
