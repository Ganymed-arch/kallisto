<?php

namespace Kallisto\Controller;

use Kallisto\Model\download;

class runController
{
  protected object $raw_Content;
  protected array $jsonDecodedContent;
  public string $urlToJson;

  public function __construct()
  {
    $this->run();
  }

  private function run(){
    $this->setUrlToJson("https://a.4cdn.org/boards.json");

    $oDownload = new download();
    $oDownload->setCurlUrl($this->getUrlToJson());

    $content = json_decode($oDownload->setUp_curl());

    $this->setRawContent($content);

    var_dump($this->getRawContent());

    $this->setDecodedJson($this->getRawContent());
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
   * @return mixed
   */
  public function setUrlToJson($url) :void
  {
    $this->urlToJson = $url;
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