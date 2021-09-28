<?php

namespace Kallisto\Model\Board;

class board
{
  public string $boardName;                      #The directory the board is located in. | any string
  public string $title;                          #The readable title at the top of the board. | any string
  public int $isWorkSafe;                        #Is the board worksafe |	1 or 0
  public int $howManyThreads;                    #How many threads are on a single index page | Any positive integer
  public int $howManyIndexPages;                 #How many index pages does the board have | 	Any positive integer
  public int $max_filesize;                      #Maximum file size allowed for non .webm attachments (in KB) |	Any positive integer
  public int $max_webm_filesize;                 #Maximum file size allowed for .webm attachments (in KB) |	Any positive integer
  public int $max_comment_chars;                 #Maximum number of characters allowed in a post comment 	Any positive integer
  public int $max_webm_duration;                 #Maximum duration of a .webm attachment (in seconds) 	Any positive integer
  public int $bump_limit;                        #Maximum number of replies allowed to a thread before the thread stops bumping | 	Any positive integer
  public int $image_limit;                       #Maximum number of image replies per thread before image replies are discarded | Any positive integer
  public array $coolDowns;                       #always
  public string $meta_description;               #SEO meta description content for a board |	Any string
  public int $isSpoilerAllowed;                  #Are spoilers enabled |	1 or 0
  public int $howManySpoilersOnBoard;            #enabled 	How many custom spoilers does the board have | Any positive integer
  public int $isArchiveEnabled;                  #Are archives enabled for the board |	1 or 0
  public array $board_flags;                     #Array of flag codes mapped to flag names
  public int $isPostersHomeFlagEnabled;          #Are flags showing the poster's country enabled on the board |	1 or 0
  public int $isUserIdEnabled;                   #Are poster ID tags enabled on the board |	1 or 0
  public int $isAllowedToSubmitUsingOekaki;      #Can users submit drawings via browser the Oekaki app |	1 or 0
  public int $isAllowedToSubmitSjis;             #Can users submit sjis drawings using the [sjis] tags |	1 or 0
  public int $isCodeSyntaxHighlightingSupported; #Board supports code syntax highlighting using the [code] tags |	1 or 0
  public int $isMathTagsSupported;               #Board supports [math] TeX and [eqn] tags |	1 or 0
  public int $isImagePostingDisabled;            #Is image posting disabled for the board |	1 or 0
  public int $isNameFieldDisabled;               #Is the name field disabled on the board |	1 or 0
  public int $isAudioWebmAllowed;                #Are webms with audio allowed? |	1 or 0
  public int $isSubjectRequired;                 #Do OPs require a subject |	1 or 0
  public int $min_image_width;                   #What is the minimum image width (in pixels) |	Any positive integer
  public int $min_image_height;                  #What is the minimum image height (in pixels) 	Any positive integer

  public function __construct($obj)
  {
    if (property_exists($obj, "board")){
      $this->boardName = $obj->board;
    }

    if (property_exists($obj, "title")){
      $this->title = $obj->title;
    }

    if (property_exists($obj, "ws_board")){
      $this->isWorkSafe = $obj->ws_board;
    }

    if (property_exists($obj, "per_page")){
      $this->howManyThreads = $obj->per_page;
    }

    if (property_exists($obj, "pages")){
      $this->howManyIndexPages = $obj->pages;
    }

    if (property_exists($obj, "max_filesize")) {
      $this->max_filesize = $obj->max_filesize;
    }

    if (property_exists($obj, "max_webm_filesize")) {
      $this->max_webm_filesize = $obj->max_webm_filesize;
    }

    if (property_exists($obj, "max_comment_chars")) {
      $this->max_comment_chars = $obj->max_comment_chars;
    }

    if (property_exists($obj, "max_webm_duration")) {
      $this->max_webm_duration = $obj->max_webm_duration;
    }

    if (property_exists($obj, "bump_limit")) {
      $this->bump_limit = $obj->bump_limit;
    }

    if (property_exists($obj, "image_limit")) {
      $this->image_limit = $obj->image_limit;
    }

    if (property_exists($obj, "cooldowns")) {
      $this->coolDowns = [
        'threads' => $obj->cooldowns->threads,
        'replies' => $obj->cooldowns->replies,
        'images'  => $obj->cooldowns->images

      ];
    }

    if (property_exists($obj, "meta_description")) {
      $this->meta_description = $obj->meta_description;
    }

    if (property_exists($obj, "spoilers")) {
      $this->isSpoilerAllowed = $obj->spoilers;
    }

    if (property_exists($obj, "custom_spoilers")) {
      $this->howManySpoilersOnBoard = $obj->custom_spoilers;
    }

    if (property_exists($obj, "is_archived")) {
      $this->isArchiveEnabled = $obj->is_archived;
    }

    if (property_exists($obj, "board_flags")) {
      $this->board_flags = $obj->board_flags;
    }

    if (property_exists($obj, "country_flags")) {
      $this->isPostersHomeFlagEnabled = $obj->country_flags;
    }

    if (property_exists($obj, "user_ids")) {
      $this->isUserIdEnabled = $obj->user_ids;
    }

    if (property_exists($obj, "oekaki")) {
      $this->isAllowedToSubmitUsingOekaki = $obj->oekaki;
    }

    if (property_exists($obj, "sjis_tags")) {
      $this->isAllowedToSubmitSjis = $obj->sjis_tags;
    }

    if (property_exists($obj, "code_tags")) {
      $this->isCodeSyntaxHighlightingSupported = $obj->code_tags;
    }

    if (property_exists($obj, "math_tags")) {
      $this->isMathTagsSupported = $obj->math_tags;
    }

    if (property_exists($obj, "text_only")) {
      $this->isImagePostingDisabled = $obj->text_only;
    }

    if (property_exists($obj, "forced_anon")) {
      $this->isNameFieldDisabled = $obj->forced_anon;
    }

    if (property_exists($obj, "webm_audio")) {
      $this->isAudioWebmAllowed = $obj->webm_audio;
    }

    if (property_exists($obj, "require_subject")) {
      $this->isSubjectRequired = $obj->require_subject;
    }

    if (property_exists($obj, "min_image_width")) {
      $this->min_image_width = $obj->min_image_width;
    }

    if (property_exists($obj, "min_image_height")) {
      $this->min_image_height = $obj->min_image_height;
    }
  }
}