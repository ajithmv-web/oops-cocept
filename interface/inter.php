<?php

interface bank {
  public function transfer();
}

class cash implements bank {
  public function transfer() {
    echo " A ";
  }
}

class check implements bank {
  public function transfer() {
    echo " B ";
  }
}

class onlinepay implements bank {
  public function transfer() {
    echo " C ";
  }
}


$cash = new cash();
$check = new check();
$onlinepay = new onlinepay();
$bank = array($cash,$check,$onlinepay);

foreach($bank as $paymentType) {
  $paymentType->transfer();
}
?>