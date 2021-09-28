<?php

namespace Kallisto\Controller;

use Kallisto\Model\download;
use Kallisto\Model\jsonContent;

class runController
{
  protected object $raw_Content;
  protected object $jsonDecodedContent;
  public string $urlToJson;

  public function __construct($givenUrl)
  {
    $this->setUrlToJson($givenUrl);
    $this->run();
  }

  private function run(){
    $oDownload = new download();
    $oDownload->setCurlUrl($this->getUrlToJson());

    $content = json_decode($oDownload->setUp_curl());

    $this->setRawContent($content);
    $this->setDecodedJson($this->getRawContent());

    $oJsonContent = new jsonContent($this->getJsonDecodedContent());
    $oJsonContent->setWhichBoard('b');
  }

  /**
   * @return string
   */
  public function getUrlToJson() :string
  {
    return $this->urlToJson;
  }

  /**
   * @param $url
   */
  public function setUrlToJson($url) :void
  {
    $this->urlToJson = $url;
  }

  /**
   * @return object array
   */
  public function getJsonDecodedContent(): object
  {
    return $this->jsonDecodedContent;
  }

  /**
   * @param $toDecode
   * @return mixed
   */
  protected function setDecodedJson($toDecode) :void
  {
    $this->jsonDecodedContent = $toDecode;
  }

  /**
   * @param object $raw_Content
   */
  public function setRawContent(object $raw_Content): void
  {
    $this->raw_Content = $raw_Content;
  }

  /**
   * @return object array
   */
  protected function getRawContent() :object
  {
    return $this->raw_Content;
  }
}