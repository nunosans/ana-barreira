$(document).ready(function() {
	
	var imageNumber = 1;

	if($("#gallery > img").size() > 1) {
		
		$("#gallery").cycle({
		
			fx: 'fade',
			
			speed: 800,
			
			timeout: 0,
			
			next: '#next',
			
			prev: '#previous',
			
			before:  onBefore,
			
			after: onAfter,
			
			nowrap: 1
		
		});
		
		// wrap our new image in jQuery, then:
	  	$("#gallery img").load(function () {
	  
	    	count++;
	    	
	    	if (count == numberOfImages) {
	    		
	    		// with the holding div #loader, apply:
	    		$("#loader")
	    		  // remove the loading class (so no background spinner), 
	    		  .remove();
	    		  
	    		$("#controls").css({"visibility" : "visible"});
	    		resize($(".currentSlide"));
	    	  
	    		// fade our image in to create a nice effect
	    		$("#gallery").fadeIn();
	    		changeCredits();
	    	
	    	}
	    
	  	})
	    
	  	// if there was an error loading the image, react accordingly
	  	.error(function () {
	  	  // notify the user that the image could not be loaded
	  	 alert("error");
	  	});
	
	} else {
		
		$("#loader").remove();
		$("#gallery img").addClass("currentSlide");
		resize($(".currentSlide"));
		$("#gallery").fadeIn();
    	changeCredits();
	
	}
	
	function onBefore(currSlideElement, nextSlideElement, options, forwardFlag) {
		$(currSlideElement).removeClass("currentSlide");
    	$(nextSlideElement).addClass("currentSlide");
    	
    	//alert(this.height);
	}
	
	function onAfter(curr, next, opts) {
		
		var index = opts.currSlide;
		
		if(index == 0) {
		    $("#previous").css({"color": "#CCCCCC", "cursor": "default"});
		    $("#next").css({"color": "black", "cursor": "pointer"});
		} else if(index == opts.slideCount-1) {
			$("#previous").css({"color": "black", "cursor": "pointer"});
		    $("#next").css({"color": "#CCCCCC", "cursor": "default"});
		} else {
		    $("#previous").css({"color": "black", "cursor": "pointer"});
		    $("#next").css({"color": "black", "cursor": "pointer"});
		}
		
	}
	
	$("#next").click(function(){
	
		if(imageNumber < $("#gallery > img").size()) {
		
			imageNumber++;
		
		}
		
		resize($(".currentSlide"));
		changeCredits();
	});
	
	$("#previous").click(function(){
	
		if(imageNumber > 1) {
		
			imageNumber--;
		
		}
		
		resize($(".currentSlide"));
		changeCredits();
	});
	
	function resize($image){
		
		var widthMargin		= 480;
		var heightMargin 	= 80;
		var windowH      = $(window).height()-heightMargin;
		var windowW      = $(window).width()-widthMargin;
		var theImage     = new Image();
		theImage.src     = $image.attr("src");
		var imgwidth     = theImage.width;
		var imgheight    = theImage.height;

		if((imgwidth > windowW)||(imgheight > windowH)){
			if(imgwidth > imgheight){
				var newwidth = windowW;
				var ratio = imgwidth / windowW;
				var newheight = imgheight / ratio;
				theImage.height = newheight;
				theImage.width= newwidth;
				if(newheight>windowH){
					var newnewheight = windowH;
					var newratio = newheight/windowH;
					var newnewwidth =newwidth/newratio;
					theImage.width = newnewwidth;
					theImage.height= newnewheight;
				}
			}
			else{
				var newheight = windowH;
				var ratio = imgheight / windowH;
				var newwidth = imgwidth / ratio;
				theImage.height = newheight;
				theImage.width= newwidth;
				if(newwidth>windowW){
					var newnewwidth = windowW;
					var newratio = newwidth/windowW;
					var newnewheight =newheight/newratio;
					theImage.height = newnewheight;
					theImage.width= newnewwidth;
				}
			}
		}
		
		var topPosition = ($(window).height()/2)-(theImage.height/2);
            
            
		$("#gallery").css({
		    //width:theImage.width,
		    width: "100%",
		    //height:theImage.height
		    height: "100%"
		});
		
		$(".currentSlide").css({
			position: "absolute",
			top: topPosition,
			left: "",
			right: 40,
			width:theImage.width,
			height:theImage.height
		});
	
	};
	
	$(window).load(function() {
	    resize($(".currentSlide"));
	    /*$("#gallery").css({
	    	opacity: 1
	    });*/
	});
			
	$(window).resize(function() {
	    resize($(".currentSlide"));
	});
	
	var numberOfImages = $("#gallery > img").length;
	var count = 0;
	
	if(numberOfImages == 0) {
		$("#loader").remove();
	}
	
	function changeCredits() {
		
		var urllocation = window.location + "metadata.xml";
		
		$.ajax({
			type: "GET",
			url: urllocation,
			dataType: "xml",
			success: function(xml) {
				$(xml).find('photo').each(function(){
					var id = $(this).attr('id');
					if(id == imageNumber) {
						
						var string = "";
						
						$(this).find('photocredits').children().each(function(){
							string += "<br />";
							//string += $(this).attr('title') + ": ";
							string += $(this).text();
						});
						//var photographer = $(this).find('photographer').text();
						//var makeup = $(this).find('makeup').text();
						$("#credits").html(string);
						
					}
				});
			}
		});
	}
	
});