<?php

namespace Pr01;

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Pr01\User\User;

echo 'step into the entry' . PHP_EOL;

$oUser = new User();

var_dump($oUser);
