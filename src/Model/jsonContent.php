<?php

namespace Kallisto\Model;

class jsonContent
{
  protected object $jsonData;
  protected array $packBoards;
  protected object $boardObject;
  protected string $whichBoard = 'b';

  public function __construct($jsonData)
  {
    $this->setJsonData($jsonData);
    $this->setPackBoards($this->getJsonData()->boards);

    $this->run();
  }

  private function run(){
    $this->abstractBoards($this->getPackBoards());
  }

  /**
   * @param $boards
   */
  private function abstractBoards($boards) :void
  {
    foreach ($boards as $board){
      //ToDo: board-Bestimmung
      //dynamischer, vielleicht auslagern?
      if ($board->board ===$this->getWhichBoard()){
        /** @var board oBoard */
        $this->boardObject = new board($board);
      }
    }
  }

  /**
   * @return object
   */
  public function getBoardObject(): object
  {
    return $this->boardObject;
  }

  /**
   * @return string
   */
  public function getWhichBoard(): string
  {
    return $this->whichBoard;
  }

  /**
   * @param string $whichBoard
   */
  public function setWhichBoard(string $whichBoard): void
  {
    $this->whichBoard = $whichBoard;
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