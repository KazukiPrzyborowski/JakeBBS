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
    JakeBBS Installer made by JakeBBS Inc. - http://jakebbs.berlios.net/

    $FileInfo: settings.php & settingsbak.php - Last Update: 07/01/1867 Ver 142 Author: Jake $
*/
/*	You Need to install JakeBBS. Run install.php	*/
$File3Name = basename($_SERVER['SCRIPT_NAME']);
if ($File3Name == "settings.php" || $File3Name == "/settings.php" ||
    $File3Name == "settingsbak.php" || $File3Name == "/settingsbak.php") {
    @header('Location: index.php');
    exit();
}
