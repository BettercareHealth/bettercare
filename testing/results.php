<!doctype html>
<html>
<head>
	<title>Bettercare</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../css/screen.css" />

	<!--Show/Hide script: http://www.cssnewbie.com/example/showhide-content/ -->
	<script language="javascript" type="text/javascript">
	function showHide(shID) {
	   if (document.getElementById(shID)) {
		  if (document.getElementById(shID+'-show').style.display != 'none') {
			 document.getElementById(shID+'-show').style.display = 'none';
			 document.getElementById(shID).style.display = 'block';
		  }
		  else {
			 document.getElementById(shID+'-show').style.display = 'inline';
			 document.getElementById(shID).style.display = 'none';
		  }
	   }
	}
	</script>

</head>
<body>


		<div id="nav-bar" class="non-printing">
			<div class="nav-content">
				<a href="/" class="nav-item">Bettercare books</a>
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
