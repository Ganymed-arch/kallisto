<?php

namespace Kallisto\Model\Thread;

use Kallisto\Model\download;

class thread
{
  protected object $boardObject;

  public function __construct($boardObject)
  {
    $this->boardObject = $boardObject;
  }
}