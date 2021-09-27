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
  $boardName                            = $obj->board;
  $title                                = $obj->title;
  $isWorkSafe                           = $obj->ws_board;
  $howManyThreads                       = $obj->per_page;
  $howManyIndexPages                    = $obj->pages;
  $max_filesize                         = $obj->max_filesize;
  $max_webm_filesize                    = $obj->max_webm_filesize;
  $max_comment_chars                    = $obj->max_comment_chars;
  $max_webm_duration                    = $obj->max_webm_duration;
  $bump_limit                           = $obj->bump_limit;
  $image_limit                          = $obj->image_limit;
  $coolDowns                            = $obj->cooldowns;
  $meta_description                     = $obj->meta_description;
  $isSpoilerAllowed                     = $obj->spoilers;
  $howManySpoilersOnBoard               = $obj->custom_spoilers;
  $isArchiveEnabled                     = $obj->is_archived;
  $board_flags                          = $obj->board_flags;
  $isPostersHomeFlagEnabled             = $obj->country_flags;
  $isUserIdEnabled                      = $obj->user_ids;
  $isAllowedToSubmitUsingOekaki         = $obj->oekaki;
  $isAllowedToSubmitSjis                = $obj->sjis_tags;
  $isCodeSyntaxHighlightingSupported    = $obj->code_tags;
  $isMathTagsSupported                  = $obj->math_tags;
  $isImagePostingDisabled               = $obj->text_only;
  $isNameFieldDisabled                  = $obj->forced_anon;
  $isAudioWebmAllowed                   = $obj->webm_audio;
  $isSubjectRequired                    = $obj->require_subject;
  $min_image_width                      = $obj->min_image_width;
  $min_image_height                     = $obj->min_image_height;
  }
}