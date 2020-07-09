<?php
    session_start();
    $code=$_POST['add_kar'];
    //echo $code;
    $_SESSION['cart'][$code]['qty']=($_SESSION['cart'][$code]['qty']) + 1;
    $_SESSION['cart'][$code]['total']=$_SESSION['cart'][$code]['price']*$_SESSION['cart'][$code]['qty'];
    header('location:veiw_cart.php');
?>