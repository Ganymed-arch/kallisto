<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "/www/htdocs/w01a761c/4chan/vendor/autoload.php";

new \Kallisto\Controller\runController();