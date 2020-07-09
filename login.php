<?php
    session_start();
    $_SESSION['cart']=array();
?>
<?php
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $pwdcheck="slkmdslfggfbfgngijf16846";
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

    // admin or user
    $pwdsubstr=substr($uname,0,4);
    $len=strcmp($uname,$pwdsubstr);
    if($len==0)
    {   
        $sql="SELECT * FROM admin WHERE username='$uname'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            $pwdcheck=$row['password'];
            }
        } else {
        echo "0 results";
        }
        $checkhere=strcmp($pwd,$pwdcheck);
        if($checkhere==0)
        {
            //echo "password matched";
            header('location:sellform.html');
            
        }
        else{
            echo $pwdcheck;
            //header('location:log_in.html');
        }
        
    }
    else{
        $e_mail="";
        $sql="SELECT * FROM login WHERE reg_no='$uname'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            $pwdcheck=$row['password'];
            $e_mail=$row['email'];
            }
        } else {
        echo "0 results";
        }
        if($pwd==$pwdcheck)
        {
            //echo "password matched";
            header('location:shopping_window.php');
            //$_SESSION['user'][$uname]=array('uname'=>$uname,'email'=>$e_mail);
            setcookie("username",$uname);
            setcookie("email",$e_mail);
        }
        else{
            //echo $uname." ".$pwd;

            header('location:log_in.html');
        }
    }
    
    $conn->close();

?>