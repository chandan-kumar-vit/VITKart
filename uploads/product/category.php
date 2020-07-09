<html>
<body>
<?php
    $cat=$_POST['sel_cat'];

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
            $row["img_dir"]="C:/xampp/htdocs/chaddy/".$row["img_dir"];

            echo "id: " . $row["code"]. " - Name: " . $row["name"]. " " . $row["price"]."<img src='".$row["img_dir"]."'><br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();

?>
</body>
<html>
