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
		echo "<ul  class=\"list-group\" style=\"display: none;\"> ";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<div class=\" col-lg-3 col-md-6 list-group-item directory collapsed\" onClick=\"loadContentPMT('$file')\"> <div id=\"icon-Section\"  class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\"><div class><i class=\"fa fa-tasks fa-5x\"></i><div class=\"col-xs-12 text-right\"><div style=\"font-size:150%\">$file</div><a style=\"visibility:hidden\" href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></div></div></div></div></div></div>";
			}
		}
		// All files
		foreach( $files as $file ) {
                        
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				echo "<li class=\" col-lg-12 col-md-12 list-group-item file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities('/lmw/connectors/'.$_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
			}
		}
		echo "</ul>";	
	}
}

?>