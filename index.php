<?php
/**
 * 代理探针！检查一个http请求经过代理，到达源站还剩下哪些 headers
 * Created by PhpStorm.
 * User: shellus
 * Date: 2017-05-08
 * Time: 1:04
 */
define('EOL', "<br>" . PHP_EOL);


$headers = array();

$headers['_Method'] = $_SERVER['REQUEST_METHOD'];
$headers['_Uri'] = $_SERVER['REQUEST_URI'];
$headers['_QUERY_STRING'] = $_SERVER['QUERY_STRING'];
$headers['_Protocol'] = $_SERVER['SERVER_PROTOCOL'];
$headers['_Server-Addr'] = $_SERVER['SERVER_ADDR'];
$headers['_Remote-Addr'] = $_SERVER['REMOTE_ADDR'];
$headers['_Http-Host'] = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:"";



$headers['X-Forwarded-For'] = isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:"";
$headers['User-Agent'] = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:"";
$headers['Accept-Language'] = isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])?$_SERVER['HTTP_ACCEPT_LANGUAGE']:"";
$headers['Accept-Encoding'] = isset($_SERVER['HTTP_ACCEPT_ENCODING'])?$_SERVER['HTTP_ACCEPT_ENCODING']:"";
$headers['Accept'] = isset($_SERVER['HTTP_ACCEPT'])?$_SERVER['HTTP_ACCEPT']:"";
$headers['Cookie'] = isset($_SERVER['HTTP_COOKIE'])?$_SERVER['HTTP_COOKIE']:"";
$headers['Connection'] = isset($_SERVER['HTTP_CONNECTION'])?$_SERVER['HTTP_CONNECTION']:"";

$headers['_Request-Body'] = file_get_contents("php://input");

foreach ($headers as $k => $header){
    echo $k;
    echo ": ";
    echo $header;
    echo EOL;
}
echo EOL;