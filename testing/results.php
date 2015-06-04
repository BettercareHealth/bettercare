<!doctype html>
<html>
<head>
	<title>Bettercare</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/screen.css" />

		<!--Links and meta for favicons from http://realfavicongenerator.net/-->
		<link rel="apple-touch-icon" sizes="57x57" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="http://ls.bettercare.co.za/images/icons/apple-touch-icon-180x180.png" />
		<link rel="shortcut icon" href="http://ls.bettercare.co.za/images/icons/favicon.ico" />
		<link rel="icon" type="image/png" href="http://ls.bettercare.co.za/images/icons/favicon-192x192.png" sizes="192x192" />
		<link rel="icon" type="image/png" href="http://ls.bettercare.co.za/images/icons/favicon-160x160.png" sizes="160x160" />
		<link rel="icon" type="image/png" href="http://ls.bettercare.co.za/images/icons/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="http://ls.bettercare.co.za/images/icons/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="http://ls.bettercare.co.za/images/icons/favicon-32x32.png" sizes="32x32" />
		<meta name="msapplication-TileColor" content="#2d89ef" />
		<meta name="msapplication-TileImage" content="http://ls.bettercare.co.za/images/icons/mstile-144x144.png" />
		<meta name="msapplication-config" content="http://ls.bettercare.co.za/images/icons/browserconfig.xml" />
	<!--End favicon links and meta-->

	<!-- Google Analytics-->
	<script src="../js/google-analytics.js"></script>

</head>
<body>


		<div id="nav-bar" class="non-printing">
			<div class="nav-content">
				<a href="/" class="nav-item">Library</a>
				<a href="#" class="nav-item">Test results</a>
			</div><!--.nav-content-->
		</div>

	<div id="wrapper">

		<div class="test-result-page">

			<div class="test-results-exit">
					<a alt="Back" class="button" href="/">Back</a>
			</div><!--.test-results-exit--> 
			
			<div class="test-results">
				<iframe src="http://quizform.jotform.io/submission.php?formID=<?php echo $_POST['formID'];?>&sid=<?php echo $_POST['submission_id'];?>"></iframe>
			</div><!--.test-results-->
			
		</div><!--.test-->
		
	</div><!--#wrapper-->

	<div id="footer" class="non-printing">
		<div class="footer-content">
			<p>
			<a href="/">Bettercare books</a>
			</p>
			<p>You may share this book as allowed by the <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution NoDerivatives NonCommercial 4.0 Licence</a>: unchanged in its entirety for no commercial gain. For all other uses <a href="http://bettercare.co.za/contact">contact Bettercare</a>.</p>
		</div><!--.footer-content-->
	</div><!--#footer-->

</body>
</html>
