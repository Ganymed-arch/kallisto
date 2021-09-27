<?php

namespace Kallisto\Model;

class jsonContent
{
  protected object $jsonData;
  protected array $packBoards;

  public function __construct($jsonData)
  {
    $this->setJsonData($jsonData);
    $this->setPackBoards($this->getJsonData()->boards);

    $this->run();
  }

  private function run(){
    $this->abstractBoards($this->getPackBoards());
  }


  private function abstractBoards($boards) :void
  {
    foreach ($boards as $board){
      var_dump($board);
      echo "<hr>";
    }
  }

  /**
   * @return array
   */
  public function getPackBoards(): array
  {
    return $this->packBoards;
  }

  /**
   * @param array $packBoards
   */
  public function setPackBoards(array $packBoards): void
  {
    $this->packBoards = $packBoards;
  }

  /**
   * @return object
   */
  public function getJsonData(): object
  {
    return $this->jsonData;
  }

  /**
   * @param object $jsonData
   */
  protected function setJsonData(object $jsonData): void
  {
    $this->jsonData = $jsonData;
  }
}