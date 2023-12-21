<?php
/*
    This program is free software; you can redistribute it and/or modify
    it under the terms of the Revised BSD License.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    Revised BSD License for more details.

    Copyright 2004-2009 JakeBBS - http://google.com/search?q=JakeBBS+Inc.&btnI=I%27m+Feeling+Lucky
    Copyright 2004-2009 JakeBBS Inc. - http://google.com/search?q=JakeBBS+Inc.&btnI=I%27m+Feeling+Lucky
	Kill Register Globals (Register Globals are very lame we dont need them anyways. :P)

    $FileInfo: killglobals.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
$File3Name = basename($_SERVER['SCRIPT_NAME']);
if ($File3Name=="killqlobals.php"||$File3Name=="/killqlobals.php") {
	require('index.php');
	exit(); }
function unregister_globals() {
   $REQUEST = $_REQUEST;
   $GET = $_GET;
   $POST = $_POST;
   $COOKIE = $_COOKIE;
   if(isset($_SESSION)) {
   $SESSION = $_SESSION; }
   $FILES = $_FILES;
   $ENV = $_ENV;
   $SERVER = $_SERVER;
   foreach($GLOBALS as $key => $value) {
   if($key!='GLOBALS') {
   unset($GLOBALS[$key]); } }
   $_REQUEST = $REQUEST;
   $_GET = $GET;
   $_POST = $POST;
   $_COOKIE = $COOKIE;
   if(isset($SESSION)) {
   $_SESSION = $SESSION; }
   $_FILES = $FILES;
   $_ENV = $ENV;
   $_SERVER = $SERVER; }
unregister_globals();
?>