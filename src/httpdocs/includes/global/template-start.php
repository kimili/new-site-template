<?php

	/*
		GLOBAL CONFIGURATION
	*/
	date_default_timezone_set('America/New_York');

	/*
		Dev Mode?
	*/
	function isDev() {
		return (isset($_GET['dev'])) ? true : false;
	}

	/*
		Auto Versioning for static assets
	*/
	function autoVersion($url){
		$filePath = $_SERVER['DOCUMENT_ROOT'].$url;
		if (file_exists($filePath)) {
			echo $url.'?'.filemtime($filePath);
		} else {
			echo $url;
		}
	}
?>

<!doctype html>
<html>
<head>

	<meta charset="UTF-8">

	<meta name="description" content="<?php echo $metaDescription; ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="imagetoolbar" content="no" />

	<title><?php echo (isset($pageTitle) && !empty($pageTitle)) ? "$pageTitle | " : ""; ?>Site Name</title>

	<script type="text/javascript" charset="utf-8">
		// <![CDATA[
		try {
			document.getElementsByTagName('html')[0].className = "js";
		} catch (e) {}
		// ]]>
	</script>

	<link rel="stylesheet" href="<?php autoVersion('/css/global.css'); ?>" type="text/css" media="all" charset="utf-8" />

	<!--[if IE 8]>
		<link rel="stylesheet" href="<?php autoVersion('/css/ie.css'); ?>" type="text/css" media="all" charset="utf-8" />
	<![endif]-->

	<link rel="stylesheet" href="<?php autoVersion('/css/print.css'); ?>" type="text/css" media="print" charset="utf-8" />

</head>

<body id="<?php echo (isset($pageId) && !empty($pageId)) ? $pageId : ""; ?>">
	<div id="header">
		<h1>Site Title</h1>
		<div id="nav">
			<ul>
				<li id="navHome"><a href="/">Home</a></li>
			</ul>
		</div>
	</div>

	<div id="content" class="group">
