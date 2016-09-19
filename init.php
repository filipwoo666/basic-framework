<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 19.09.16
 * Time: 20:19
 */

declare(strict_types = 1);

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();