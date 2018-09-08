<div id="left">
<h2>Welcome</h2>
					   <?php get_welcome('welcome') ?>

                          <div id="holder">
                             <div id="left1">
					   <h2>Spotlight</h2>
					   <ul class="spot">
       <?php get_spotlite() ?>
					   <span><a href="spotlights.php">Spotlight archives</a></span>
					   </ul>
      <?php gen_side_links() ?>

				   </div><!-- END LEFT1-->
                           <div id="left2">
				    <h2>Sponsored Links</h2>
<?php
    include("includes/sponsored_links.php");
?>
		<?php genAds(); ?>
<script type="text/javascript"><!--
google_ad_client = "pub-1143701649694701";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_type = "text";
google_ad_channel ="";
google_color_border = "CCCCCC";
google_color_bg = "FFFFFF";
google_color_link = "000000";
google_color_url = "666666";
google_color_text = "333333";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
											   </div><!-- END LEFT2 -->
				   </div> <!-- END HOLDER -->
			</div><!-- END LEFT -->