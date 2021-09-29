<?php

namespace Kallisto\Controller;

use Kallisto\Model\base;
use Kallisto\Model\download;

class catalogController extends base
{
  protected string $boardName;
  protected string $sView = "catalog.json";
  protected string $controllerUrl;
  protected $catalogData;
  protected array $listOfCatalogThreads;

  public function __construct($boardName, $boardObject = null)
  {
    $counter = 0;
    $this->boardName = $boardName;
    $this->controllerUrl = $this->buildThreadUrl($this->boardName, $this->sView);

    $oDownloader = new download();
    $oDownloader->setCurlUrl($this->controllerUrl);
    $this->catalogData = json_decode($oDownloader->runSetUp());
    $this->fetchCatalog($this->catalogData);
  }

  protected function fetchCatalog(array $data){
    foreach ($data as $page){
      foreach ($page as $threads){
        if (is_array($threads)){
          foreach ($threads as $entry){
            var_dump($entry);
          }
        }
      }
    }
  }
}