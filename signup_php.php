<?php
    session_start();
?>

<html>
    <head>
        <title>Registered</title>
        <style>
            body{
                margin:0;
                padding: 0;
                background: url("blue_texture.jpg");
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
                background-repeat: no-repeat;
                
            }
            .op{
                background-color: black;
                opacity: 85%;
                padding: 25px;
                color:white;
                margin-top:10%;
            }
            .op:hover{
                opacity: 95%;
            }
            #logoimg{
                width: 150px;
                height: 48px;
            }

            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                border: 2px solid black;

            }
            .drop{
                background-color: darkgray;
                
            }

            li{
                float: left;
                border-right: 2px solid black;
            }

            li a{
                display: inline-block;
                color: black;
                text-align: center;
                padding: 10px;
                text-decoration: none;
                font-weight: bold;
            }
            li:hover{
                background-color: white;
            }

        </style>
    </head>
    <body>
        <ul class="drop">
            <li><img src="reallogo.png" id="logoimg"></li>
            
            <li><a href="home.html">Home</a></li>
            <li><a href="whyvitkart.html">Why VITKart?</a></li>
            <li><a href="log_in.html">Log In</a></li>
            <li><a href="#">More</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        <div class="op">
        <?php
            //inputs

            $f_name=filter_input(INPUT_POST,'fname');
            $l_name=filter_input(INPUT_POST,'lname');
            $reg_no=filter_input(INPUT_POST,'regno');
            $contact_no=filter_input(INPUT_POST,'contact');
            $email=filter_input(INPUT_POST,'mail');
            $pname=filter_input(INPUT_POST,'procname');
            $pcontact_no=filter_input(INPUT_POST,'proccon');
            $pass=filter_input(INPUT_POST,'pass');
            $gender=filter_input(INPUT_POST,'gender');
            $block=filter_input(INPUT_POST,'hostelblock');
            $sec_quest=filter_input(INPUT_POST,'sec_que');
            $ans=filter_input(INPUT_POST,'sec_ans');
            $reg_no=strtoupper($reg_no);
            
            //image uploading code
            $target_dir = "uploads/kyc/";
            $target_file = $target_dir . basename($_FILES["kyc"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["kyc"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["kyc"]["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["kyc"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["kyc"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            /*echo "<br>dir:".$target_dir."<br>";
            echo "target_file:".$target_file."<br>";
            echo "file type: ".$imageFileType."<br>";
            */
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
            $sql="insert into signup(reg_no,f_name,l_name,c_no,email,proc_name,proc_c_no,sex,block,password,security_question,answer,img_name)
                    values ('$reg_no','$f_name','$l_name','$contact_no','$email','$pname','$pcontact_no','$gender','$block','$pass','$sec_quest','$ans','$target_file')";

            $sqll="insert into login(reg_no,email,password) values ('$reg_no','$email','$pass')";

            if(($conn->query($sql))===TRUE && ($conn->query($sqll))===TRUE)
            {
                //echo "Congrates! Your Account has been successfully created!!";
                $_SESSION["email"]=$email;
                header('location:mail_verification.php');
                //header('location:log_in.html');
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
        </div>
    </body>
</html>

