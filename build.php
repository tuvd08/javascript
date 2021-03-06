<?php
	include("system.class.php");
	
	$dfocus = array(
		"module/core.js",
		"module/ajax.js",
		"module/html.js",
		"module/dragdrop.js",
		"module/canvas.js",
		"moduletransform.js",
		"plugin/debug.js"
	);
	
	$nfocus = array(
		"module/core.js",
		"module/ajax.js",
		"module/html.js",
		"module/dragdrop.js"
	);
	
	$content = "";
	
	foreach($dfocus as $file) {
		$content .= "\n\n\n\n\n\n\n\n\n";
		$content .= System::getTextContent("$file");
	}
	
	System::putContentFile("dfocus.js", $content);
	
	$content = "";
	
	foreach($nfocus as $file) {
		$content .= "\n\n\n\n\n\n\n\n\n";
		$content .= System::getTextContent("$file");
	}
	
	System::putContentFile("nfocus.js", $content);
	
	echo $content;
?>