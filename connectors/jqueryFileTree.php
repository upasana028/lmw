<?php
//
// jQuery File Tree PHP Connector
//
// Version 1.01
//
// Cory S.N. LaViska
// A Beautiful Site (http://abeautifulsite.net/)
// 24 March 2008
//
// History:
//
// 1.01 - updated to work with foreign characters in directory/file names (12 April 2008)
// 1.00 - released (24 March 2008)
//
// Output a list of files for jQuery File Tree
//

$_POST['dir'] = urldecode($_POST['dir']);
$root = "";


if( file_exists($root . $_POST['dir']) ) {
	
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. */
		echo "<ul class=\"list-group\" style=\"display: none;\">";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<li class=\" list-group-item directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
			}
		}
		// All files
		foreach( $files as $file ) {

			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);

                                if($ext == "mdb" && file_exists("../lmwmap/".$file))
                                  $hiiden = "<button type='button' class='btn btn-success' onClick='window.open(\"http://ec2-52-33-117-112.us-west-2.compute.amazonaws.com:8080/etest.html?id=$file#\",\"Title\",\"width=550,height=550,resizable=no,0,no\");' >Online Test</button>";
else
$hiiden="";
				echo "<li class=\" list-group-item file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a>&nbsp;&nbsp;".$hiiden."</li>";
			}
		}
		echo "</ul>";	
	}
}

?>