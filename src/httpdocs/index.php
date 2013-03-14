<?php

	/*
		Template Variables
	*/

	$pageTitle			= false;
	$pageId				= "home";
	$includePath		= realpath($_SERVER['DOCUMENT_ROOT'] . '/includes');

	$metaDescription	= "Page description goes here.";

	/*
		Include Template start
	*/
	require_once $includePath.'/global/template-start.php';

?>

	<h1>Site Template</h1>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

<?php

	/*
		Include Template end
	*/
	require_once $includePath.'/global/template-end.php';

?>

