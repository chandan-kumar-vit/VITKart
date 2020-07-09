<?php
// Array with items
$a[] = "Maggie";
$a[] = "Kettle";
$a[] = "Pen";
$a[] = "Toothpaste";
$a[] = "Soap";
$a[] = "Toothbrush";
$a[] = "Fevicol";
$a[] = "Glue";
$a[] = "Scissor";
$a[] = "Earphones";
$a[] = "Headphones";
$a[] = "Lamp";
$a[] = "Tshirts";
$a[] = "Jeans";
$a[] = "Shirts";
$a[] = "Shoes";
$a[] = "Books";
$a[] = "BS Grewal";
$a[] = "HC Verma";
$a[] = "UPSC books";
$a[] = "Fidgit Spinner";
$a[] = "Bluetooth headphones";
$a[] = "Eggs";
$a[] = "Coupons";
$a[] = "Pouch";
$a[] = "Drafter";
$a[] = "Yippie";
$a[] = "Pamplets";
$a[] = "Washing machine voucher";
$a[] = "Coke";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br><hr>$name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>