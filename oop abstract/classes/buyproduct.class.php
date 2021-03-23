<?php
class Buyproduct extends visa{
    public function getpayment(){
    return $this->visapayment();
}
}