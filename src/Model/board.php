<?php

namespace Kallisto\Model;

class board
{
  protected string $boardName;                      #The directory the board is located in. | any string
  protected string $title;                          #The readable title at the top of the board. | any string
  protected int $isWorkSafe;                        #Is the board worksafe |	1 or 0
  protected int $howManyThreads;                    #How many threads are on a single index page | Any positive integer
  protected int $howManyIndexPages;                 #How many index pages does the board have | 	Any positive integer
  protected int $max_filesize;                      #Maximum file size allowed for non .webm attachments (in KB) |	Any positive integer
  protected int $max_webm_filesize;                 #Maximum file size allowed for .webm attachments (in KB) |	Any positive integer
  protected int $max_comment_chars;                 #Maximum number of characters allowed in a post comment 	Any positive integer
  protected int $max_webm_duration;                 #Maximum duration of a .webm attachment (in seconds) 	Any positive integer
  protected int $bump_limit;                        #Maximum number of replies allowed to a thread before the thread stops bumping | 	Any positive integer
  protected int $image_limit;                       #Maximum number of image replies per thread before image replies are discarded | Any positive integer
  protected array $coolDowns;                       #always
  protected string $meta_description;               #SEO meta description content for a board |	Any string
  protected int $isSpoilerAllowed;                  #Are spoilers enabled |	1 or 0
  protected int $howManySpoilersOnBoard;            #enabled 	How many custom spoilers does the board have | Any positive integer
  protected int $isArchiveEnabled;                  #Are archives enabled for the board |	1 or 0
  protected array $board_flags;                     #Array of flag codes mapped to flag names
  protected int $isPostersHomeFlagEnabled;          #Are flags showing the poster's country enabled on the board |	1 or 0
  protected int $isUserIdEnabled;                   #Are poster ID tags enabled on the board |	1 or 0
  protected int $isAllowedToSubmitUsingOekaki;      #Can users submit drawings via browser the Oekaki app |	1 or 0
  protected int $isAllowedToSubmitSjis;             #Can users submit sjis drawings using the [sjis] tags |	1 or 0
  protected int $isCodeSyntaxHighlightingSupported; #Board supports code syntax highlighting using the [code] tags |	1 or 0
  protected int $isMathTagsSupported;               #Board supports [math] TeX and [eqn] tags |	1 or 0
  protected int $isImagePostingDisabled;            #Is image posting disabled for the board |	1 or 0
  protected int $isNameFieldDisabled;               #Is the name field disabled on the board |	1 or 0
  protected int $isAudioWebmAllowed;                #Are webms with audio allowed? |	1 or 0
  protected int $isSubjectRequired;                 #Do OPs require a subject |	1 or 0
  protected int $min_image_width;                   #What is the minimum image width (in pixels) |	Any positive integer
  protected int $min_image_height;                  #What is the minimum image height (in pixels) 	Any positive integer

  public function __construct($obj)
  {
    if ($obj->board){
      $this->boardName = $obj->board;
    }

    if ($obj->title){
      $this->title = $obj->title;
    }

    if ($obj->ws_board){
      $this->isWorkSafe = $obj->ws_board;
    }

    if ($obj->per_page){
      $this->howManyThreads = $obj->per_page;
    }

    if ($obj->pages){
      $this->howManyIndexPages = $obj->pages;
    }

    if ($obj->max_filesize) {
      $this->max_filesize = $obj->max_filesize;
    }

    if ($obj->max_webm_filesize) {
      $this->max_webm_filesize = $obj->max_webm_filesize;
    }

    if ($obj->max_comment_chars) {
      $this->max_comment_chars = $obj->max_comment_chars;
    }

    if ($obj->max_webm_duration) {
      $this->max_webm_duration = $obj->max_webm_duration;
    }

    if ($obj->bump_limit) {
      $this->bump_limit = $obj->bump_limit;
    }

    if ($obj->image_limit) {
      $this->image_limit = $obj->image_limit;
    }

    if ($obj->cooldowns) {
      $this->coolDowns = $obj->cooldowns;
    }

    if ($obj->meta_description) {
      $this->meta_description = $obj->meta_description;
    }

    if ($obj->spoilers) {
      $this->isSpoilerAllowed = $obj->spoilers;
    }

    if ($obj->custom_spoilers) {
      $this->howManySpoilersOnBoard = $obj->custom_spoilers;
    }

    if ($obj->is_archived) {
      $this->isArchiveEnabled = $obj->is_archived;
    }

    if ($obj->board_flags) {
      $this->board_flags = $obj->board_flags;
    }

    if ($obj->country_flags) {
      $this->isPostersHomeFlagEnabled = $obj->country_flags;
    }

    if ($obj->user_ids) {
      $this->isUserIdEnabled = $obj->user_ids;
    }

    if ($obj->oekaki) {
      $this->isAllowedToSubmitUsingOekaki = $obj->oekaki;
    }

    if ($obj->sjis_tags) {
      $this->isAllowedToSubmitSjis = $obj->sjis_tags;
    }

    if ($obj->code_tags) {
      $this->isCodeSyntaxHighlightingSupported = $obj->code_tags;
    }

    if ($obj->math_tags) {
      $this->isMathTagsSupported = $obj->math_tags;
    }

    if ($obj->text_only) {
      $this->isImagePostingDisabled = $obj->text_only;
    }

    if ($obj->forced_anon) {
      $this->isNameFieldDisabled = $obj->forced_anon;
    }

    if ($obj->webm_audio) {
      $this->isAudioWebmAllowed = $obj->webm_audio;
    }

    if ($obj->require_subject) {
      $this->isSubjectRequired = $obj->require_subject;
    }

    if ($obj->min_image_width) {
      $this->min_image_width = $obj->min_image_width;
    }

    if ($obj->min_image_height) {
      $this->min_image_height = $obj->min_image_height;
    }
  }
}