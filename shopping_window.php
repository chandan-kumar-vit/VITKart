<html>
    <head>
        <title>VITKart</title>
        <link rel="stylesheet" type="text/css" href="shopping_window_css.css">
        <script src="shopping_window_js.js"></script>
    </head>

    <body>
    <!--
        <div>
            
            <ul class="drop">
                <li><img src="reallogo.png" id="logoimg"></li>
                
                <li><a href="home.html">Home</a></li>
                <li><a href="whyvitkart.html">Why VITKart?</a></li>
                <li><a href="#">Log Out</a></li>
                <li><a href="#">More</a></li>
                <li><a href="#">See Cart</a></li>
                <li><a href="#">About Us</a></li>
                <li id="search_label"><button id="search_button">Search</button></li>
                
                <li id="search_box"><input type="text" name="search" placeholder="Here..." onkeyup="showHint(this.value)"><br>
                </li>
                
                
            </ul>
        </div>
        <span id="txtHint" style="float:right; margin-right:11%;color:white;background-color:black;"></span>
        -->
        <?php include 'navigator.php'; ?>
        <img src="reallogo.png" id="headimg">
        
        <div class="books">
            <form method="POST" action="category.php">
           <!-- <label id="lb1">Find Items by Category :</label>
            <select name="sel_cat">
                <option value="books">books</option>
                <option value="room_accessory">room accessory</option>
                <option value="stationary">stationary</option>
                <option value="electronics">electronics</option>
                <option value="wearables">wearables</option>
                <option value="eatables">eatables</option>
                <option value="other">other</option>
            </select>  -->
            <button type="submit" id="btt">VIEW By Category</button>
            </form>



            <br><br>
            <img src="laptop.jpg">
            <img src="mobile.jpg">
            <img src="tv.jpg">
            <img src="laptop.jpg">
            <img src="mobile.jpg"><br><br>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label><br><br>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button> 
            <br><br>
            <button type="button" id="more">Show More</button>
        </div>
        <br>
        <div class="edibles">
            <img src="laptop.jpg">
            <img src="mobile.jpg">
            <img src="tv.jpg">
            <img src="laptop.jpg">
            <img src="mobile.jpg"><br><br>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label><br><br>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button> 
            <br><br>
            <button type="button" id="more">Show More</button>
        </div>
        <br>
        <div class="stationary">
            <img src="laptop.jpg">
            <img src="mobile.jpg">
            <img src="tv.jpg">
            <img src="laptop.jpg">
            <img src="mobile.jpg"><br><br>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label>
            <label>Price:$$$$$</label><br><br>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button>
            <button type="button">Add to Cart</button> 
            <br><br>
            <button type="button" id="more">Show More</button>
        </div>
        <br><br>
        <div class="advertisement">
            <h2>V_R_S </h2>
            <p>Only I and U can break this chain</p>
            <iframe src="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public"></iframe>
            <iframe src="https://www.worldometers.info/coronavirus/"></iframe>
            <iframe src="https://www.mygov.in/covid-19"></iframe>
        </div>
        <br><br><br>
    </body>
</html>
