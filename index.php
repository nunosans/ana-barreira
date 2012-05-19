<?php $page='home'; include_once($_SERVER['DOCUMENT_ROOT']."/_head.php"); ?>
		
	<img class="title" onselectstart="return false;" ondragstart="return false;" src="/graphics/title.png" >
		
	<img id="backgroundImage" src="/graphics/bg.jpg" onload="$(this).animate({opacity: 1}, 1000, function(){});" alt="" />
	
	<script type="text/javascript">
	
		$(document).ready(function() {
			
			if($('#backgroundImage').length != 0) {
				$('#backgroundImage').resizebg();
			}
			
		});
	    	
	</script>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/_footer.php"); ?>