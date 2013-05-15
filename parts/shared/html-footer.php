
	<?php wp_footer(); ?>
	<?php wp_enqueue_script('jquery'); ?>

	<script src="<?php bloginfo('template_url') ?>/javascripts/bits-ck.js"></script>

  <!-- end scripts -->
  <script type="text/javascript">
  	jQuery(document).ready(function($) {
	    $('.nav-header').fitText(1.5);
      $(".logo").mouseover(function() { 
            var src = jQuery(this).attr("src").replace("the-Shit-Logo.png", "the-Shit-Logo-hover.png");
            jQuery(this).attr("src", src);
        })
        .mouseout(function() {
            var src = jQuery(this).attr("src").replace("the-Shit-Logo-hover.png", "the-Shit-Logo.png");
            jQuery(this).attr("src", src);
      });
 		});
  </script>

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>	

	</body>
</html>