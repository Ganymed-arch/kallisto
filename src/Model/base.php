<?php

namespace Kallisto\Model;

class base
{
  /**
   * @param string $boardName
   * @param string $sObject name of the node you want to (thread, board, ...)
   * @param string $staticUrl
   * @return string
   */
  protected function buildThreadUrl(string $boardName, string $sObject, string $staticUrl = "https://a.4cdn.org/") :string
  {
    if (strstr($staticUrl, "http") and strstr($staticUrl, "4cdn")){
      return $staticUrl.$boardName."/".$sObject;
    }else{
      return "ERR: no vaid static URL given!";
    }
  }
}