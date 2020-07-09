<?php
    session_start();
    $p_code=$_POST['item_code_add'];
    $p_name=$_POST['item_name_add'];
    $p_price=$_POST['item_price_add'];
    $p_qty=1;
    
    //test start
        if(empty($_SESSION['cart']))
        {
            //$_SESSION['cart']=array();
            $_SESSION['cart'][$p_code]=array('code'=>$p_code,'name'=>$p_name,'price'=>$p_price,'qty'=>$p_qty,'total'=>$p_price);
            
        }
        else{
            //array_push($_SESSION['cart'][$p_code],array('code'=>$p_code,'name'=>$p_name,'price'=>$p_price));
            $_SESSION['cart'][$p_code]=array('code'=>$p_code,'name'=>$p_name,'price'=>$p_price,'qty'=>$p_qty,'total'=>$p_price);
        }
    header('location:category.php');
?>