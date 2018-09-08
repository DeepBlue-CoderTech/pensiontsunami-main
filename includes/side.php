<div id="left">

							   <h2>Search</h2>
					   <p>The <a href="search.php">search page</a> has more options.</p>
                       <!-- SiteSearch Google -->
<form method="get" action="http://www.google.com/custom" target="_top">
<table border="0" bgcolor="#ffffff">
<tr><td nowrap="nowrap" valign="top" align="left" height="32">
<a href="http://www.google.com/">
<img src="http://www.google.com/logos/Logo_25wht.gif"
border="0" alt="Google"></img></a>
</td>
<td nowrap="nowrap">
<input type="hidden" name="domains" value="PensionTsunami.com"></input>
<input type="text" name="q" size="31" maxlength="255" value=""></input>
</td></tr>
<tr>
<td>&nbsp;</td>
<td nowrap="nowrap">
<table>
<tr>
<td>
<input type="radio" name="sitesearch" value="" ></input>
<font size="-1" color="#000000">Web</font>
</td>
<td>
<input type="radio" name="sitesearch" value="PensionTsunami.com" checked="checked"></input>
<font size="-1" color="#000000">PensionTsunami.com</font>
</td>
</tr>
</table>
<input type="submit" name="sa" value="Search"></input>
<input type="hidden" name="client" value="pub-1143701649694701"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="ISO-8859-1"></input>
<input type="hidden" name="oe" value="ISO-8859-1"></input>
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;"></input>
<input type="hidden" name="hl" value="en"></input>

</td></tr></table>
</form>
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
					<p><a href="support.php">Your ad here</a>.</p>
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
			</div><!-- END LEFT -->