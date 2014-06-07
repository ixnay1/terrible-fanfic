<?
	include('database.php');
	require('_drawrating.php');

	if(intval($_GET['t1']) > 0 || intval($_GET['t2']) > 0 || intval($_GET['th']) > 0)
	{
		$show1 = intval($_GET['t1']);
		$show2 = intval($_GET['t2']);
		$randNum2 = intval($_GET['th']);
	}
	else
	{
		$sourceList = array();
	
		$thing_size = sql_get_single("SELECT count(*) FROM bff_things");
		$theme_size = sql_get_single("SELECT count(*) FROM bff_themes");
	
		$show1 = 0;
		$show2 = 0;
		while($show1 == $show2) {
			$show1 = rand( 1, $thing_size);
			$show2 = rand( 1, $thing_size);
		}	
		$randNum2 = rand( 1, $theme_size);
	}
	$thing1 = trim(sql_get_single("SELECT thing_name FROM bff_things WHERE thing_id = $show1"));
	$thing2 = trim(sql_get_single("SELECT thing_name FROM bff_things WHERE thing_id = $show2"));
	$theme  = trim(sql_get_single("SELECT theme_name FROM bff_themes WHERE theme_id = $randNum2"));
	if(!$thing1) { $thing1 = "Mass Effect"; }
	if(!$thing2) { $thing2 = "Dance Central"; }
	if(!$theme){ $theme = "murder most foul"; }
	
	//facebook stuff
	$fb_string = "Your challenge is to write crossover fanfiction combining $thing1 and {$thing2}.  The story should use $theme as a plot device!";
	$fb_string_enc = urlencode($fb_string);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html itemscope itemtype="http://schema.org/">
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800|Noticia+Text' rel='stylesheet' type='text/css'>
	<title>The Terrible Crossover Fanfiction Idea Generator</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<LINK REL=stylesheet HREF="fanfic.css" TYPE="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript">

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-21493156-1', 'kaction.com');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
		  
		// trim off any trailing parameters that might still be there from searching
		history.replaceState(null, "The Terrible Crossover Fanfiction Idea Generator", "/");
	</script>

	<meta itemprop="name" content="The Terrible Crossover Fanfiction Idea Generator">
	<meta name="Description" content="Your one-stop shop for helping you come up with awful ideas that should never be put to paper.">
	</head>
<body>
	<div class="main">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=175725632530054";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<h1 class="toplogo" onClick="window.location.reload()">the <span class="highlight">TERRIBLE</span> crossover fanfiction <span class="highlight">IDEA</span> generator</h1>

		<br>
		<div class="maintext">
			<div class="storyidea">
				Your challenge is to write crossover fanfiction combining 
				<b><?=$thing1?></b> and
				<b><?=$thing2?></b>.  
				The story should use <b><?=$theme?></b> as a plot device!
			</div>
			<br><img src="/badfanfiction/images/divider.png" />
			<div class="utils">
				<div class="fb-share-button" data-href="http://kaction.com" data-type="button_count"></div>
				<div class="tumblr">
					<a href="http://www.tumblr.com/share/link?url=<?php echo urlencode('http://kaction.com') ?>&name=<?php echo urlencode('From The Terrible Fanfiction Idea Generator') ?>&description=<?php echo $fb_string_enc ?>&tags=<?php echo urlencode("terrible fanfiction generator, {$thing1}, {$thing2}") ?>" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; margin-top:2px; height:20px; background:url('http://platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;" target="_new">Share on Tumblr</a>
				</div>
			</div>
		</div>

		<div class="bannerad">
			<script type="text/javascript"><!--
			google_ad_client = "ca-pub-0110768222477357";
			/* Wide fanfic */
			google_ad_slot = "2300459931";
			google_ad_width = 728;
			google_ad_height = 90;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
		<div class="social">
			<div class="fb-follow" data-href="http://www.facebook.com/terriblefanfic" data-colorscheme="light" data-width="600px" data-layout="standard" data-show-faces="true"></div>
			<div style="float:left; width: 250px;">
				<!-- Place this tag where you want the +1 button to render -->
				<g:plusone annotation="inline" href="http://kaction.com"></g:plusone>
				<!-- Place this render call where appropriate -->
				<script type="text/javascript">
				(function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				})();
				</script>
				<br>
			</div>
		</div>
	</div>
</body>
</html>