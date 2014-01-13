<?php


/** Slim Framework provides the REST API features
 API found here: http://dev.slimframework.com/phpdocs/namespaces/Slim.html
 */
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/** Instantiate a Slim application */
$app = new \Slim\Slim();

/**
 * Create = PUT if and only if you are sending the full content of the specified resource (URL).
 * Create = POST if you are sending a command to the server to create a subordinate of the specified resource, using some server-side algorithm.
 * Retrieve = GET.
 * Update = PUT if and only if you are updating the full content of the specified resource.
 * Update = POST if you are requesting the server to update one or more subordinates of the specified resource.
 * Delete = DELETE.
 *
 */

$app -> post('/newsession', 'postNewSession');


$app->run();

function postNewSession(){
    $request = \Slim\Slim::getInstance()->request();
    $body = $request->getBody();

    echo   $body;

    return;
}