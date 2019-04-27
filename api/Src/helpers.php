<?php

/**
 * A wrapper class to standard the response data.
 */
class Respond extends \Slim\Http\Response
{
    private $response;
    const DEBUG = 100;  //Detailed debug information
    const INFO = 200;  //Interesting events
    const NOTICE = 250;  //Uncommon events
    const WARNING = 300; //Exceptional occurrences that are not errors
    const ERROR = 400;  //Runtime errors
    const CRITICAL = 500;  // Critical conditions
    const ALERT = 550; //Action must be taken immediately
    const EMERGENCY = 600;  //Urgent alert.
    const API = 1;

    function __construct(\Slim\Http\Response $response)
    {
        $this->response = $response;
    }

    function ok($data = null)
    {
        return $this->response->withJson([
            'success' => true,
            'data' => $data
        ]);
    }

    function error($message = '', $status = 500)
    {
        return $this->response->withJson([
            'success' => false,
            'message' => $message
        ])->withStatus($status);
    }
}

if (!function_exists('respond')) {
    function respond($response)
    {
        return new Respond($response);
    }
}
