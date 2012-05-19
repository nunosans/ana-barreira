<!-- Page Margins -->
<div id="topborder" class="border"></div>
<div id="leftborder" onselectstart="return false;" ondragstart="return false;"><img src="graphics/leftborder.png"></div>
<div id="bottomborder" class="border"></div>

<!-- Main Menu -->
<ul id="nav">
    <li>
    	Collections:
    </li>
    <ul>
    	<li>
    		<a href="/album/girls/" <?php if($page=="girls") {echo 'class="active"';} ?>> 	<!-- if this is the current page, change this nav item style -->
    			Girls 																		<!-- get this album name -->
    			<img src="/graphics/arrow-white.png" width="11" height="11" alt="">			<!-- arrow to display on hover -->
    		</a>
    		<?php if($page=="girls"): ?> 													<!-- if this is the current page, show it's corresponding prev/next buttons -->
    			<span id="loader"></span>
    			<span id="previous">previous</span> / <span id="next">next</span>
    		<?php endif; ?>
    	</li>	
    	<li>
    		<a href="/album/boys/" <?php if($page=="boys") {echo 'class="active"';} ?>>
    			Boys
    			<img src="/graphics/arrow-white.png" width="11" height="11" alt="">
    		</a>
    		<?php if($page=="boys"): ?>
    			<span id="loader"></span>
    			<span id="previous">previous</span> / <span id="next">next</span>
    		<?php endif; ?>
    	</li>
    	<li>
    		<a href="/album/editorial/" <?php if($page=="editorial") {echo 'class="active"';} ?>>
    			Editorial
    			<img src="/graphics/arrow-white.png" width="11" height="11" alt="">
    		</a>
    		<?php if($page=="editorial"): ?>
    			<span id="loader"></span>
    			<span id="previous">previous</span> / <span id="next">next</span>
    		<?php endif; ?>
    	</li>
    	<li>
    		<a href="/album/commissions/" <?php if($page=="commissions") {echo 'class="active"';} ?>>
    			Commissions
    			<img src="/graphics/arrow-white.png" width="11" height="11" alt="">
    		</a>
    		<?php if($page=="commissions"): ?>
    			<span id="loader"></span>
    			<span id="previous">previous</span> / <span id="next">next</span>
    		<?php endif; ?>
    	</li>
    	<li>
    		<a href="/album/personal/" <?php if($page=="personal") {echo 'class="active"';} ?>>
    			Personal
    			<img src="/graphics/arrow-white.png" width="11" height="11" alt="">
    		</a>
    		<?php if($page=="personal"): ?>
    			<span id="loader"></span>
    			<span id="previous">previous</span> / <span id="next">next</span>
    		<?php endif; ?>
    	</li>
    </ul>
    <li>
    	<a href="/about/" <?php if($page=="about") {echo 'class="active"';} ?>>
    		About &amp; Contact
    		<img src="/graphics/arrow-black.png" width="11" height="11" alt="">
    	</a>
    </li>
</ul>