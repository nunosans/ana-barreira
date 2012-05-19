/* Vai ter de ter pelo menos duas opções: 
		- janela inteira com offset (imagem parcial); (feito)
		- com margens (imagem inteira); */

(function($){

	$.fn.resizebg = function() {
		
		var $image = this, ratio = 0;
		
		if($image.is('img')) {
		
			$image.load(function(){
			
				alert("resize");
				
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