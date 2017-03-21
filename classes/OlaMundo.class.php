<?php

namespace classes;

use classes\olaMundo\Nome;

class OlaMundo {

  public function exibir() {
    echo "Ola Mundo " . (new Nome())->exibir() . PHP_EOL;
  }

}
