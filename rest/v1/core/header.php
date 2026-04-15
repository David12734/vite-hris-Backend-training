<?php 

// error_reporting(E_ALL);
header("Content-type: application/json;charset=utf-8");
// header("WWW-AUTHENTICATE: BASIC realm='Protected zone'");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-type, Authorization");
header("Access-Control-Allow-Method: PUT, POST, GET, OPTIONS, DELETE");
// data_default_timezone_set("Asia/Manila");
date_default_timezone_set("Asia/Taipei");