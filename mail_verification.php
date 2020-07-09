<?php
    session_start();
    $code=rand(999,10000);
    //echo $code;
    $_SESSION["otp_sent"]=$code;
    $msg="One Time Password for Sign Up in VITKart is ".$code;
    mail($_SESSION["email"],"OTP for VITKart",$msg);
?>

<html>
    <head>
        <title>Email Verification</title>
        <link rel="stylesheet" type="text/css" href="mail_verification.css">
    </head>
    <body>
        <div class="verification">
         
        <form method="POST" action="otp_verify.php">
            <h3>OTP SENT TO YOUR E-MAIL SUCCESSFULLY!</h3>
                <label id="lb">Enter OTP</label>
                <input type="text" name="otp" id="otp"><br><br>
                <button type="submit" name="sub" id="sub">Verify</button>
                <button type="submit" name="resend" id="resend">Resend OTP</button>
         </form>
                
        </div>
    </body>
</html>

