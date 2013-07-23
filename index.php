<!DOCTYPE HTML>

<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<title>Activ</title>

	<!-- If JS is available, changes <html> class to js -->
	<script>
		var docElement = document.documentElement;
		docElement.className = docElement.className.replace(/\bno-js\b/,'') + ' js';
	</script>
	<script src="js/jquery-2.0.3.min.js"></script>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-retina.png" />

	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
</head>
<body>
	

	<form id='addLoc'>
	    <input type='text' name='name' id='inputname' placeholder="Name" />
	    <input type='text' name='postcode' id='inputlocation' placeholder="Postcode" />
	    <input type='submit' value='add'>
	</form>

	<a href="/refresh" class="refresh" id="refresh">Another one</a>

	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
