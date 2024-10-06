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

    $FileInfo: index.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
if (@ini_get("register_globals")) {
    require_once('inc/misc/killglobals.php');
}
$checklowview = true;
require('preindex.php');
$usefileext = $Settings['file_ext'];
if ($ext == "noext" || $ext == "no ext" || $ext == "no+ext") {
    $usefileext = "";
}
$filewpath = $exfile['index'].$usefileext.$_SERVER['PATH_INFO'];
?>

<title> <?php echo $Settings['board_name'].$jakebbspowertitle; ?> </title>
</head>
<body>
<?php if ($_GET['act'] != "lowview") {
    require($SettDir['inc'].'navbar.php');
}

if ($_GET['act'] == null) {
    $_GET['act'] = "view";
}
if ($_GET['act'] == "view") {
    require($SettDir['inc'].'forums.php');
}
if ($_GET['act'] == "lowview") {
    require($SettDir['inc'].'lowforums.php');
}
if ($_GET['act'] == "view" || $_GET['act'] == "stats") {
    require($SettDir['inc'].'stats.php');
}
require($SettDir['inc'].'endpage.php');
?>
</body>
</html>
<?php fix_amp($Settings['use_gzip'], $GZipEncode['Type']); ?>
