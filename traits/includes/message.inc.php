<?php
trait message1 {
  public function msg1() {
    echo "HII USER ";
  }
}

trait message2 {
  public function msg2() {
    echo "HII ADMIN";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}
?>