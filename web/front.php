<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 19.09.16
 * Time: 21:01
 */

declare(strict_types = 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$map = [
    '/hello' => 'hello',
    '/bye' => 'bye'
];
$path = $request->getPathInfo();
if (isset($map[$path])) {
    ob_start();
    extract($request->query->all());
    include sprintf(__DIR__ . '/../src/pages/%s.php', $map[$path]);
    $response = new Response(ob_get_clean());
} else {
    $response = new Response('Page not found', 404);
}

$response->send();