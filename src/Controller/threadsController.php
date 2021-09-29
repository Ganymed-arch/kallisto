<?php

namespace Kallisto\Controller;

use Kallisto\Model\download;

class threadsController
{
  public string $baseUrl = 'https://a.4cdn.org/REPLACE/threads.json';
  public string $threadUrl;
  protected string $boardName;

  public function __construct($boardName)
  {
    $this->boardName = $boardName;
    $this->buildThreadUrl();

    $this->run();
  }

  protected function run(){
    echo $this->fetchThreads();
  }

  protected function buildThreadUrl() :void
  {
    $this->threadUrl = str_replace("REPLACE", $this->boardName, $this->baseUrl);
  }

  /**
   * @return object
   */
  protected function fetchThreads() :string
  {
    $oDownloader = new download();
    $oDownloader->setCurlUrl($this->threadUrl);

    return $oDownloader->runSetUp();
  }
}