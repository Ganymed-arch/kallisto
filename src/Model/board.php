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
    var_dump($obj[3]);
  }

  /**
   * @param $obj
   */
  protected function setVariables($obj) :void
  {
    $boardName                            = property_exists($obj->board);
    $title                                = property_exists($obj->title);
    $isWorkSafe                           = property_exists($obj->ws_board);
    $howManyThreads                       = property_exists($obj->per_page);
    $howManyIndexPages                    = property_exists($obj->pages);
    $max_filesize                         = property_exists($obj->max_filesize);
    $max_webm_filesize                    = property_exists($obj->max_webm_filesize);
    $max_comment_chars                    = property_exists($obj->max_comment_chars);
    $max_webm_duration                    = property_exists($obj->max_webm_duration);
    $bump_limit                           = property_exists($obj->bump_limit);
    $image_limit                          = property_exists($obj->image_limit);
    $coolDowns                            = property_exists($obj->cooldowns);
    $meta_description                     = property_exists($obj->meta_description);
    $isSpoilerAllowed                     = property_exists($obj->spoilers);
    $howManySpoilersOnBoard               = property_exists($obj->custom_spoilers);
    $isArchiveEnabled                     = property_exists($obj->is_archived);
    $board_flags                          = property_exists($obj->board_flags);
    $isPostersHomeFlagEnabled             = property_exists($obj->country_flags);
    $isUserIdEnabled                      = property_exists($obj->user_ids);
    $isAllowedToSubmitUsingOekaki         = property_exists($obj->oekaki);
    $isAllowedToSubmitSjis                = property_exists($obj->sjis_tags);
    $isCodeSyntaxHighlightingSupported    = property_exists($obj->code_tags);
    $isMathTagsSupported                  = property_exists($obj->math_tags);
    $isImagePostingDisabled               = property_exists($obj->text_only);
    $isNameFieldDisabled                  = property_exists($obj->forced_anon);
    $isAudioWebmAllowed                   = property_exists($obj->webm_audio);
    $isSubjectRequired                    = property_exists($obj->require_subject);
    $min_image_width                      = property_exists($obj->min_image_width);
    $min_image_height                     = property_exists($obj->min_image_height);
  }
}