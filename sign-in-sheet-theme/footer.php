<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
    <div id="footerbreak" style="height:20pt"></div>

    <div id="bigad" class="" style="float: right; width: 336px; height:280px;">
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-0545194040495488";
        /* large rectangle for sign-in-sheet */
        google_ad_slot = "4262652733";
        google_ad_width = 336;
        google_ad_height = 280;
        //-->
        </script>
        <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>

   
    <form class="well form-search" style="width: 260px;"
    action="http://sign-in-sheet.us6.list-manage.com/subscribe/post?u=97ebf9db2f4cfb046ced39ab1&amp;id=2476d9581c" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate />
        Get notifications about this site:<br />
        <input type="email" name="EMAIL" class="input-small" placeholder="Email" required />
        <button type="submit" class="btn">Subscribe</button>
    </form>

    <div class="well" style="width:260px; height: 52px;">
        <b>Follow:</b>
        <!-- AddThis Follow BEGIN -->
        <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
        <a class="addthis_button_facebook_follow" addthis:userid="signinsheet"></a>
        </div>
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51121eea10b77670"></script>
        <!-- AddThis Follow END -->
    </div>
     
    <div class="well" style="width:260px; height: 52px;">
        <b>Share:</b>
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e67f454561d9011"></script>
        <!-- AddThis Button END -->
    </div>

    <div id="fineprint">
        <p>Copyright 2017 sign-in-sheet.com, all rights reserved.  Printers: 
            <a href="http://sign-in-sheet.com/printers/">Printers Permission</a>.</p>
        <p><a href="http://bootswatch.com/united/#">United</a> template from Bootswatch.com</p>
        <p>Ported to a WordPress theme by <a href="http://riceball.com">Riceball.com</a></p>
    </div>

</div><!-- /.container -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootswatch.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38266464-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- AddThis Welcome BEGIN -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e67f454561d9011"></script>
<script type='text/javascript'>
addthis.bar.initialize({'default':{
	"backgroundColor": "#000000",
	"buttonColor": "#098DF4",
	"textColor": "#FFFFFF",
	"buttonTextColor": "#FFFFFF"
},rules:[
	{
		"name": "Twitter",
		"match": {
			"referringService": "twitter"
		},
		"message": "If you find this page helpful:",
		"action": {
			"type": "button",
			"text": "Tweet it!",
			"verb": "share",
			"service": "twitter"
		}
	},
	{
		"name": "Facebook",
		"match": {
			"referringService": "facebook"
		},
		"message": "Tell your friends about us:",
		"action": {
			"type": "button",
			"text": "Share on Facebook",
			"verb": "share",
			"service": "facebook"
		}
	},
	{
		"name": "Google",
		"match": {
			"referrer": "google.com"
		},
		"message": "If you like this page, let Google know:",
		"action": {
			"type": "button",
			"text": "+1",
			"verb": "share",
			"service": "google_plusone_share"
		}
	}
]});
</script>
<!-- AddThis Welcome END -->

<a href="http://www.prchecker.info/" title="Google PageRank Checker" target="_blank">
<img src="http://pr.prchecker.info/getpr.php?codex=aHR0cDovL3NpZ24taW4tc2hlZXQuY29t&tag=1" alt="Google PageRank Checker" style="border:0;" /></a>
<!-- Hotjar Tracking Code for riceball.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:101918,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<?php wp_footer() ?>
</body>
</html>
