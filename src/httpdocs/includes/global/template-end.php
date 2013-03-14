<?php

	/*
		Quell that PHP timezone warning
	*/
	date_default_timezone_set('America/New_York');
?>

	</div>

	<div id="footer">
		<p>
			&copy;<?php echo date('Y'); ?> All Rights Reserved
		</p>
	</div>
<?php if ($_SERVER['HTTP_HOST'] == 'siteurl.com'): ?>

<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	try {
		var pageTracker = _gat._getTracker("PUT_YOUR_ANALYTICS_ID_HERE");
		pageTracker._trackPageview();
	} catch(err) {}
</script>

<?php endif; ?>

</body>
</html>
