<!DOCTYPE html>
<!-- Running on Linode Xen VPS -->
<html lang="en-UK">

<head>

	<title>ANA BARREIRA | LONDON +44 (0)7804 408 955</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="favicon.ico"/>
	<meta name="description" content="Ana Barreira, Fashion Photography Portfolio
	<?php date_default_timezone_set('Europe/London'); echo date("Y") ?>" />
	<meta name="keywords" content="ana, barreira, barera, bareira, portfolio, portefolio,
moda, fashion, photo, collection, work, photography, london, uk, lcf,
london college of fashion, student, ual, arts london, portuguese, portugal" />

	<link rel="stylesheet" type="text/css" href="/css/main-v1.css" />

	<script type="text/javascript" src="/js/jquery-1.6.2.min.js"></script>
	<!--<script type="text/javascript" src="/js/jquery.savant.resize.js"></script>-->

	<? if($page != 'home') { ?>
		<script type="text/javascript" src="/js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="/js/gallery.js"></script>
	<? } ?>

	<script type="text/javascript" src="http://use.typekit.com/jsk5xhk.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script>
		(function($){

	$.fn.resizebg = function() {

		var $image = this, ratio = 0;

		if($image.is('img')) {

			$image.load(function(){

				// Get width and height of the raw image and calculate the ratio
				var realHeight = $image.height();
				var realWidth = $image.width();
				ratio = realHeight / realWidth;

				// Call resize image
				resizeImage();

				// Bind resize image function to window resize
				$(window).bind("resize", function(){
					resizeImage();
	    		});

			});

			function resizeImage() {

	    		// Get browser size
	    		var browserwidth = $(window).width();
	    		var browserheight = $(window).height();

	    		// Resize image to proper ratio
	    		if ((browserheight/browserwidth) > ratio){
	    		    $image.height(browserheight-ratio +1);
	    		    $image.width(browserheight / ratio +1);
	    		} else {
	    		    $image.width(browserwidth-ratio +1);
	    		    $image.height(browserwidth * ratio +1);
	    		}

	    		// Position image correctly
	    		$image.css({"position" : "absolute",
	    					"z-index": -1,
	    					"left": (browserwidth - $image.width())/2,
	    					"top": (browserheight - $image.height())/2});
			}

		} else {

			// If this is not an image, throw error
			$.error("Not an image");

		}

	};

})(jQuery);
	</script>
</head>

<body id="<?php echo($page); ?>">

<?php

	$author='Savant';
	$authorLink="http://savantstudio.co.uk/";
	$authorEmail="mail@savantstudio.co.uk";

	$client='Ana Barreira';
	$clientLink="http://anabarreira.com/";
	$clientEmail="ana@anabarreira.com";

	include($_SERVER['DOCUMENT_ROOT']."/_nav.php");
?>
