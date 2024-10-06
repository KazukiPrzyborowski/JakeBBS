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

    $FileInfo: versioninfo.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
$File3Name = basename($_SERVER['SCRIPT_NAME']);
if ($File3Name == "versioninfo.php" || $File3Name == "/versioninfo.php") {
    require('index.php');
    exit();
}
$rssurlon = "off";
// Version info stuff. :P
function version_info($proname, $subver, $ver, $supver, $reltype, $svnver, $showsvn)
{
    $return_var = $proname." ".$reltype." ".$subver.".".$ver.".".$supver;
    if ($showsvn === false) {
        $showsvn = null;
    }
    if ($showsvn === true) {
        $return_var .= " SVN ".$svnver;
    }
    if ($showsvn !== true && $showsvn != null) {
        $return_var .= " ".$showsvn." ".$svnver;
    }
    return $return_var;
}
// Version number and date stuff. :P
$VER1[0] = 1;
$VER1[1] = 4;
$VER1[2] = 2;
$VERFull[1] = $VER1[0].".".$VER1[1].".".$VER1[2];
$VER2[0] = "Omega";
$VER2[1] = "Omega";
$VER2[2] = "Ver";
$SubVerN = 142;
$RName = "JakeBBS";
$SFName = "JakeBBS";
$SVNDay[0] = 11;
$SVNDay[1] = 15;
$SVNDay[2] = 2009;
$SVNDay[3] = $SVNDay[0]."/".$SVNDay[1]."/".$SVNDay[2];
$VerInfo['JakeBBS_Ver'] = version_info($RName, $VER1[0], $VER1[1], $VER1[2], $VER2[1], $SubVerN, false);
$VerInfo['JakeBBS_Ver_SVN'] = version_info($RName, $VER1[0], $VER1[1], $VER1[2], $VER2[1], $SubVerN, false);
$VerInfo['JakeBBS_Full_Ver'] = version_info($RName, $VER1[0], $VER1[1], $VER1[2], $VER2[0], $SubVerN, false);
$VerInfo['JakeBBS_Full_Ver_SVN'] = version_info($RName, $VER1[0], $VER1[1], $VER1[2], $VER2[0], $SubVerN, false);
$VerInfo['JakeBBS_Ver_Show'] = $VerInfo['JakeBBS_Ver'];
$VerInfo['JakeBBS_Full_Ver_Show'] = $VerInfo['JakeBBS_Ver'];
// URLs and names and stuff. :P $KSP = "Jake Sabonis ";
$VerCheckURL = "http://google.com/search?q=JakeBBS+Inc.&amp;btnI=I%27m+Feeling+Lucky";
$CD2k = "Jake ";
$GM2k = "JakeBBS Inc.";
$JakeBBS_Author = "Jake";
$JakeBBS = "Internet Discussion Boards";
$iTB = "Internet Tag Boards";
$DF2k = "Discussion Forums 2k";
$TB2k = "Tag Boards 2k";
$JakeBBSURL1 = "<a href=\"http://google.com/search?q=JakeBBS+Inc.&amp;btnI=I%27m+Feeling+Lucky\" onclick=\"window.open(this.href);return false;\">";
$JakeBBSURL2 = $JakeBBSURL1.$JakeBBS."</a>";
$DF2kURL1 = "<a href=\"http://df2k.berlios.de/\" onclick=\"window.open(this.href);return false;\">";
$DF2kURL2 = $DF2kURL1.$DF2k."</a>";
$GM2kURL = "<a href=\"http://google.com/search?q=JakeBBS+Inc.&amp;btnI=I%27m+Feeling+Lucky\" title=\"".$GM2k."\" onclick=\"window.open(this.href);return false;\">".$GM2k."</a>";
$JakeBBSURL3 = "<a href=\"http://google.com/search?q=JakeBBS+Inc.&amp;btnI=I%27m+Feeling+Lucky\" title=\"".$JakeBBS."\" onclick=\"window.open(this.href);return false;\">".$JakeBBS."</a>";
$PHPQA = "PHP-Quick-Arcade|http://quickarcade.jcink.com/";
$TFBB = "TextFileBB|https://launchpad.net/tfbb";
$PHPQA = explode("|", $PHPQA);
$TFBB = explode("|", $TFBB);
$PHPQA = "<a href=\"".$PHPQA[1]."\" title=\"".$PHPQA[0]."\" onclick=\"window.open(this.href);return false;\">".$PHPQA[0]."</a>";
$TFBB = "<a href=\"".$TFBB[1]."\" title=\"".$TFBB[0]."\" onclick=\"window.open(this.href);return false;\">".$TFBB[0]."</a>";
$PHPV1 = @phpversion();
$PHPV2 = "PHP ".$PHPV1;
$OSType = PHP_OS; // Check OS Name
if ($OSType == "WINNT") {
    $OSType = "Windows NT";
} if ($OSType == "WIN32") {
    $OSType = "Windows 9x";
}
$OSType2 = $PHPV2." / ".$OSType;
$ZENDV1 = @zend_version();
$ZENDV2 = "Zend engine ".$ZENDV1;
// Show or hide the version number
if ($Settings['showverinfo'] == "on") {
    //@header("X-".$RName."-Powered-By: ".$VerInfo['JakeBBS_Ver_Show']);
    @header("Generator: ".$VerInfo['JakeBBS_Ver_Show']);
}
if ($Settings['showverinfo'] != "on") {
    //@header("X-".$RName."-Powered-By: ".$RName);
    //@header("X-Powered-By: PHP");
    @header("Generator: ".$RName);
}
