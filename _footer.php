<?php if($page=="home"): ?> <!-- if this is the home page, show the footer -->
	<p id="footer">
		All photos are &copy; <?php echo $client; ?> <?php date_default_timezone_set('Europe/London'); echo date("Y") ?> /
		Site by <a href="<?php echo $authorLink; ?>"><?php echo $author; ?></a> /
	    <a href="mailto:<?php echo $clientEmail; ?>"><?php echo $clientEmail; ?></a>
	</p>
<?php endif; ?>

<!-- Google Analytics -->
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35922818-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
