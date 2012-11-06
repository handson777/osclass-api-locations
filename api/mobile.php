<?php


//  more info about connection methods

//   more about routing

//  more about controllers


//
$api_PHP_SELF        = $_SERVER['PHP_SELF'];

//
$api_SERVER_ADDR      = $_SERVER['SERVER_ADDR ']; //the IP address of the server

// SERVER_NAME - the name of the server
$api_SERVER_NAME      = $_SERVER['SERVER_NAME'];

// REQUEST_METHOD - which request method was used to access the page: GET, HEAD, POST, PUT
$api_REQUEST_METHOD   = $_SERVER['REQUEST_METHOD'];

// QUERY_STRING - the query string, if any, via which the page was accessed
$api_QUERY_STRING     = $_SERVER['QUERY_STRING'];

// DOCUMENT_ROOT - the document root directory under which the current script is executing
$api_DOCUMENT_ROOT    = $_SERVER['DOCUMENT_ROOT'];

// HTTP_REFERER - the address of the page (if any) which referred the user agent to the current page
$api_HTTP_REFERER     = $_SERVER['HTTP_REFERER'];

// REMOTE_ADDR - the IP address from which the user is viewing the current page
$api_REMOTE_ADDR      = $_SERVER['REMOTE_ADDR'];

// SCRIPT_FILENAME - the absolute pathname of the currently executing script
$api_SCRIPT_FILENAME  = $_SERVER['SCRIPT_FILENAME'];

// REQUEST_URI - The URI which was given in order to access this page; e.g. /index.html
$api_REQUEST_URI      = $_SERVER['REQUEST_URI'];


$api_f = $_FILES['userfile']['type'];



$sample = array(
    'api_PHP_SELF'=> $api_PHP_SELF,
    'api_SERVER_ADDR'=> $api_SERVER_ADDR,
    'api_SERVER_NAME'=> $api_SERVER_NAME,
    'api_REQUEST_METHOD'=> $api_REQUEST_METHOD,
    'api_QUERY_STRING'=> $api_QUERY_STRING,
    'api_DOCUMENT_ROOT'=> $api_DOCUMENT_ROOT,
    'api_HTTP_REFERER'=> $api_HTTP_REFERER,
    'api_REMOTE_ADDR'=> $api_REMOTE_ADDR,
    'api_SCRIPT_FILENAME'=> $api_SCRIPT_FILENAME,
    'api_REQUEST_URI'=> $api_REQUEST_URI,

    'api_f'=> $api_f,

    'name'=>'bart s',
    'email'=>'my_email@example.com',
    'avatar'=>'http://www.google.com/images/logos/logo.gif'
);

  header('Content-Type: application/json');
  echo json_encode($sample);

?>
