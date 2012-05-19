<?php $page='commissions'; include_once($_SERVER['DOCUMENT_ROOT']."/_head.php"); ?>
		
<a href="/"><img class="title" src="/graphics/logo.png" onselectstart="return false;" ondragstart="return false;"></a>
		
<div id="gallery" onselectstart="return false;" ondragstart="return false;">

    <?php 
    
    	$files = glob("images/*.jpg"); 
    	for ($i=0; $i<count($files); $i++) { 
    		$num = $files[$i];
    		$size = getimagesize($num);
    		echo '<img src="'.$num.'" alt="'.$num.'" width="'.$size[0].'" height="'.$size[1].'">'; 
    	}
    	
    ?>
    
</div>

<!-- <div id="credits"></div> -->
	
<?php include_once($_SERVER['DOCUMENT_ROOT']."/_footer.php"); ?>
