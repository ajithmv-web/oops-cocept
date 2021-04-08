<?php
include "abstract/paymenttype.abstract.php";
include "classes/buyproduct.class.php";

$product=new Buyproduct();
echo $product->getpayment();
?>
