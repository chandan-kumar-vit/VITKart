<?php
//inputs
$procode=$_POST['procode'];
$product_name=$_POST['product_name'];
$price=$_POST['price'];
$mob_no=$_POST['mob_n'];
$wa_no=$_POST['wa_no'];
$category=$_POST['category'];
$desc=$_POST['comment'];

//image upload
$target_dir = "uploads/product/";
$target_file = $target_dir . basename($_FILES["item_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["item_image"]["tmp_name"]);
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
if ($_FILES["item_image"]["size"] > 500000000) {
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
        if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["item_image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


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
$sql="insert into products(code, name, price, mob_no, wa_no, category, description,img_dir)
         values ('$procode','$product_name','$price','$mob_no','$wa_no','$category','$desc','$target_file');";

if(($conn->query($sql))===TRUE)
{
    echo "New record enterted!";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
    <body>
    <img src='E:/Projects/Internet and Web Programming/product img/clrs_dsa.jpg'>
</body>
</html>