<?php
    session_start();
    $trans_id=$_COOKIE["trans_id"];
    $user_id=$_COOKIE["username"];
    $trans_date=date("Y/m/d");
    $amt=$_COOKIE["total_amt"];
    $item="";
    foreach($_SESSION as $prod){
        foreach($prod as $row){
            $item=$item.$row['code']."-".$row['qty']." ";
        }
    }
    
    
?>
<html>
    <head>
        <title>Payment Successfull</title>
        <script>
            alert("Congrates! Your Order has been successfully placed!!");
        </script>
    </head>
    <body>

    </body>

</html>

<?php
        $pay_mode=$_POST["paymode"];
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
        $i;
        $n=0;
        for($i=0;$i<sizeof($_SESSION['cart']);$i++)
        {
            $n++;
        }
        $sql="INSERT INTO sales(trans_id,user_id,trans_date,item,amt) VALUES('$trans_id','$user_id','$trans_date','$item','$amt')";

        if(($conn->query($sql))===TRUE)
            {
                echo "<script>alert('Congrates! Your Order has been successfully placed!!');</script>";
            }
        else{
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        /*

                            ----------- SPACE FOR DB ENTRY FOR ML PURPOSE---------------

        */
        $conn->close();

        //email(Transaction Script)
        $to=$_COOKIE["email"];
        $sub="Your Order from VITKart";
        $content="<h3>Thanks for using VITKart!</h3>Your order no. is ".$trans_id."<br><br> Total amount to be paid is ₹".$amt."<br><br> Regards<br>Team VITKart";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        mail($to,$sub,$content,$headers);
    
        if($pay_mode=="Paytm")
        {
            header('location:php-paytm/index.php');
        }
        elseif($pay_mode="COD")
        {
            unset($_SESSION['cart']);
            header('location:order_success.php');
            
        }
?>