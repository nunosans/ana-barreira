<?php if($page=="home"): ?> <!-- if this is the home page, show the footer -->
	<p id="footer">
		All photos are &copy; <?php echo $client; ?> <?php date_default_timezone_set('Europe/London'); echo date("Y") ?> /
		Site by <a href="<?php echo $authorLink; ?>"><?php echo $author; ?></a> /
	    <a href="mailto:<?php echo $clientEmail; ?>"><?php echo $clientEmail; ?></a>
	</p>
<?php endif; ?>

</body>
</html>