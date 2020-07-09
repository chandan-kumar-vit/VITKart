<html>
   <head>
    <title>Order Confirmed</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
            $("#confirm").show();
         });
      </script>
      <style>
         #confirm {
            display: none;
            background-color: #F3F5F6;
            color: #000000;
            border: 1px solid #aaa;
            position: fixed;
            width: 300px;
            height: 100px;
            left: 50%;
            margin-left: -120px;
            padding: 10px 20px 10px;
            box-sizing: border-box;
            text-align: center;
            margin-top:10%;
         }
         #confirm button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
         }
      </style>
   </head>
   <body>
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div id="confirm">
         <div class="message">Your Order has been successfully placed!</div>
            <button class="yes" name="pavilion">OK</button>
         </div> 
   </form>  
   </body>
</html>

<?php
   if(isset($_POST["pavilion"]))
   {
      header('location:shopping_window.php');
   }
?>