<?php

namespace Kallisto\Module;

class run
{
  public function __construct()
  {
    $this->run();
  }
  protected function run():void{
    $oBase = new base();
    echo $oBase->test();
  }
}