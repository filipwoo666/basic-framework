<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 19.09.16
 * Time: 20:13
 */

require_once __DIR__ . '/init.php';

$response->setContent('Goodbye');
$response->send();