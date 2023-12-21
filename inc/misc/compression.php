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
    GZip and Zlib by Jean-loup Gailly (compression) and Mark Adler (decompression) http://www.zlib.net/
	BZip2 and libbzip2 by Julian Seward http://www.bzip.org/

    $FileInfo: compression.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
$File3Name = basename($_SERVER['SCRIPT_NAME']);
if ($File3Name=="compression.php"||$File3Name=="/compression.php") {
	require('index.php');
	exit(); }
//Check if zlib is loaded
if(@extension_loaded("zlib")) {
function gunzip($infile, $outfile) {
  $string = null;
  $zp = gzopen($infile, "r");
  while(!gzeof($zp))
       $string .= gzread($zp, 4096);
  gzclose($zp);
  $fp = fopen($outfile, "w");
  fwrite($fp, $string, strlen($string));
  fclose($fp);
}

function gunzip2($infile, $outfile) {
 $string = implode("", gzfile($infile));
 $fp = fopen($outfile, "w");
 fwrite($fp, $string, strlen($string));
 fclose($fp);
}
function gzip($infile, $outfile, $param = 5) {
 $fp = fopen($infile, "r");
 $data = fread ($fp, filesize($infile));
 fclose($fp);
 $zp = gzopen($outfile, "w".$param);
 gzwrite($zp, $data);
 gzclose($zp);
} }
//Check if bz2 is loaded
if(@extension_loaded("bz2")) {
function bzip($infile, $outfile) {
 $fp = fopen($infile, "r");
 $data = fread($fp, filesize($infile));
 fclose($fp);
 $zp = bzopen($outfile, "w");
 bzwrite($zp, $data);
 bzclose($zp);
}

function bunzip($infile, $outfile) {
  $string = null;
  $zp = bzopen($infile, "r");
  while(!feof($zp))
       $string .= bzread($zp, 4096);
  bzclose($zp);
  $fp = fopen($outfile, "w");
  fwrite($fp, $string, strlen($string));
  fclose($fp);
} }
//Check if zip is loaded
if(@extension_loaded("zip")) {
/* Nothing for now... :P */ }
//Check if rar is loaded
if(@extension_loaded("rar")) {
/* Nothing for now... :P */ }

?>
