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

    $FileInfo: rss.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
if(@ini_get("register_globals")) {
require_once('inc/misc/killglobals.php'); }
$pretime = explode(" ", microtime());
$utime = $pretime[0];
$time = $pretime[1];
$starttime = $utime + $time;
require_once('mysql.php');
/*if($Settings['enable_search']=="off"||$GroupInfo['CanSearch']=="no") {
@header("Content-Type: text/plain; charset=".$Settings['charset']); 
ob_clean(); echo "Sorry you can not search on this board."; 
gzip_page($Settings['use_gzip'],$GZipEncode['Type']); @session_write_close(); die(); }*/
if($Settings['enable_rss']=="off") {
@header("Content-Type: text/plain; charset=".$Settings['charset']); 
ob_clean(); echo "Sorry RSS Feeds are not enabled for this board."; 
gzip_page($Settings['use_gzip'],$GZipEncode['Type']); @session_write_close(); die(); }
if($_GET['act']==null) { $_GET['act'] = "rss"; }
if($_GET['act']=="rss"||$_GET['act']=="oldrss"||$_GET['act']=="atom"||$_GET['act']=="opensearch") {
	$_GET['feedtype'] = $_GET['act']; $Feed['Feed']="Done";
	require($SettDir['inc'].'rssfeed.php'); }
?>
