<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery Yahoo! Weather Demo</title>
		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<style>
        body { background-color:333; }
        .container { margin:150px auto;}
        h1 { margin-bottom:30px; font-size:24px;}
        </style>
		
	</head>
	<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<!--<ul>
<li><a href="http://www.jqueryscript.net/other/HTML5-Geolocation-Based-jQuery-Yahoo-Weather-Widget.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>-->
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
		<div class="container"><h1>jQuery Yahoo! Weather Demo</h1></div>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="yahoo-weather-jquery-plugin.js"></script>
		<script type="text/javascript">
			const main = () => {
				$('.container').yahooWeather();
			}
			$(document).ready(main);
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>