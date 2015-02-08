<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2006 by Robert LeBlanc <rjl@renaissoft.com>
     *                   David Morton   <mortonda@dgrmm.net>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    require_once ("core.php");
    require_once ("maia_db.php");
    require_once ("authcheck.php");

    require_once ("display.php");
    $display_language = get_display_language($euid);
    require_once ("./locale/$display_language/db.php");
    require_once ("./locale/$display_language/display.php");
    require_once ("./locale/$display_language/adminthemes.php");

    require_once ("smarty.php");

	// Only the superadministrator should be here.
    if (!is_superadmin($uid)) {
       header("Location: index.php" . $sid);
       exit();
    }

    // Cancel any impersonations currently in effect
    // by resetting EUID = UID and forcing a reload
    // of this page.
    if ($uid != $euid) {
       $euid = $uid;
       $_SESSION["euid"] = $uid;
       header("Location: adminlanguages.php" . $sid);
       exit();
    }

    $default_theme=get_default_theme();
    $smarty->assign("default_theme",$default_theme);

    //get list of possible themes on disk
	$theme_dir = "themes";
    $d = dir($theme_dir);
    $dirlist = array();
//    $phlist = array();
    $atleastone = false;
    while (($f = $d->read()) !== false) {
    	if (is_dir($theme_dir . "/" . $f) && $f != "." && $f != ".." && $f != ".svn") {
            if(file_exists($theme_dir . "/" . $f . "/name")) {
                $name = file_get_contents($theme_dir . "/" . $f . "/name");
            } else {
                $name = "N/A";
            }
            $dirlist[$f] = array(
                'theme_path' => $f,
                'theme_name' => $name
            );
//            $phlist[] = '?';
        }
    }
    $d->close();
	

    $installed_themes=array();
    //get list of themes listed in database
	$select = "SELECT id,name,path from maia_themes";
    $sth = $dbh->prepare($select);
    $res = $sth->execute();
    if (PEAR::isError($sth)) {
        die($sth->getMessage());
    }
	$smarty->assign('rowcount', $sth->numrows());
	while ($row = $res->fetchrow()) {
        $installed_themes[] = array('name' => $row['name'], 'path'=>$row['path'], 'id'=>$row['id']);
        unset ($dirlist[$row['path']]);
    }

  	$atleastone = count($dirlist);
	$smarty->assign("themes_available", $dirlist);
	$smarty->assign("themes_installed", $installed_themes);
    $smarty->assign("atleastone", $atleastone);

    $smarty->display('adminthemes.tpl');




?>