<?php

namespace Kallisto\Model;

class board
{
  protected string $boardName;    #The directory the board is located in. | any string
  protected string $title;        #The readable title at the top of the board. | any string
  protected int $isWorkSafe;      #Is the board worksafe |	1 or 0
  protected int $howManyThreads;  #How many threads are on a single index page | Any positive integer
  protected int $howManyIndexPages; #How many index pages does the board have | 	Any positive integer
  protected int $max_filesize;       #Maximum file size allowed for non .webm attachments (in KB) |	Any positive integer
  protected int $max_webm_filesize;  #Maximum file size allowed for .webm attachments (in KB) |	Any positive integer
  protected int $max_comment_chars; #Maximum number of characters allowed in a post comment 	Any positive integer
  protected int $max_webm_duration; #Maximum duration of a .webm attachment (in seconds) 	Any positive integer
  protected int $bump_limit;
}