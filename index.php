<!doctype html>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	
	<title>Drrrty Bizna$$</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<link rel="stylesheet" media="screen" href="core.css">
	
	<!-- JavaScript at the bottom, except for Modernizr -->
	<script src="js/modernizr-1.7.min.js"></script>
</head>

<body>
	
	<section id="ask">
		
		<header>

			<h1>I need some haalp...</h1>

		</header>
		
		<form id="ask-form" action="/" method="post"> 
			
			<fieldset>
				
				<label for="halp">I need some haalp...</label>
				<textarea id="halp" name="halp" tabindex="1"></textarea>
				
				<label for="time">Time</label>
				<select id="time" multiple="" data-placeholder="48 Hours" tabindex="2">
					
				<label for="tags">Tag this with</label>
				<select data-placeholder="Uncategorized" class="chzn-select" multiple tabindex="3">
		          	<option value=""></option> 
		          	<option value="United States">United States</option> 
		          	<option value="United Kingdom">United Kingdom</option>
				</select>
				
			</fieldset>
			
			<fieldset class="submit"> <!-- submit button -->
				
				<input type="submit" name="submit" value="Submit Form" />
				
			</fieldset>
			
		</form>
		
	</section>
	
	<section id="questions">
		
		<ul>
			
			<li>
				
			</li>
			
		</ul>
		
	</section>
	
	<footer>
		Footer
	</footer>
	
<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="js/chosen.jquery.min.js"></script>
<script type="text/javascript"> $(".chzn-select").chosen(); </script>

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
