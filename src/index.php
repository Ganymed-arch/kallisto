<?php

use Kallisto\Controller\runController;
use Kallisto\Model\defineJsonContent;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "/www/htdocs/w01a761c/4chan/vendor/autoload.php";

$oRun = new runController("https://a.4cdn.org/boards.json");