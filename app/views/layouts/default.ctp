<!doctype html>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	
	<title>Haalp - <?php echo $title_for_layout; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<link rel="stylesheet" href="<?php print Router::url('/css/chosen.css') ?>">
	<link rel="stylesheet" media="screen" href="<?php print Router::url('/css/core.css') ?>">
	
	<!-- JavaScript at the bottom, except for Modernizr -->
	<script src="<?php print Router::url('/js/modernizr-1.7.min.js') ?>"></script>
	
	<script type="text/javascript" src="http://use.typekit.com/fin3lxm.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body id="home">
			
	<?php $session->flash(); ?>
	<?php echo $content_for_layout; ?>
	
	<footer>
		<div class="subcontainer">
			<h2>Wait so whaaat???</h2>
			<article>
				<p>Haalp is a service that crowd-sources anonymous advice for those moments in life when you don't know what to do and need advice quickly.</p>
			</article>
			<article>
				<p>Write out your question, choose a category and tell us how urgent the problem is and let the Haalp community tell you what to do.</p>
			</article>
			<article class="last">
				<p>Because let's be honest, sometimes you just can't trust your own brain to have your best interests at heart...we're here to haalp.</p>
			</article>
		</div>
	</footer>
	
<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script>window.jQuery || document.write("<script src='<?php print Router::url('/js/jquery-1.5.1.min.js') ?>'>\x3C/script>")</script>

<script src="<?php print Router::url('/js/jquery-timeago/jquery.timeago.js') ?>"></script>

<script src="js/chosen.jquery.min.js"></script>
<script type="text/javascript"> $(".chzn-select").chosen(); </script>

<!-- this is where we put our custom functions -->
<script src="<?php print Router::url('/js/functions.js') ?>"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
</body>

</html>
