<?php
    session_start();
?>

<?php
    if(isset($_POST["sub"]))
    {
        $otp_recv=$_POST["otp"];
        $otp_sent=$_SESSION["otp_sent"];
        if($otp_recv==$otp_sent)
        {
            //echo "VERIFIED";
            $msg= "Dear User your VITKart account has been successfully created!";
            $msg=$msg."Enjoy Shopping with us and please give your feedbacks";
            mail($_SESSION["email"],"Account Activated",$msg);
            include 'tnc_attachment.php';
            session_destroy();
            header('location:log_in.html');
        }
        else{
            //echo "wrong OTP";
            header('location:mail_verification.php');
        }
    }

    elseif(isset($_POST["resend"]))
    {
        header('location:mail_verification.php');
    }
?>