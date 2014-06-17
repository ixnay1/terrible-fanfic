<?
	include('database.php');

	$thing1 = trim(sql_get_single("SELECT thing_name FROM bff_things ORDER BY RAND() LIMIT 1"));
	$thing2 = trim(sql_get_single("SELECT thing_name FROM bff_things WHERE thing_name != '".addslashes($thing1) ."' ORDER BY RAND() LIMIT 1"));
	$theme  = trim(sql_get_single("SELECT theme_name FROM bff_themes ORDER BY RAND() LIMIT 1"));
	
	//facebook stuff
	$fb_string = "Your challenge is to write crossover fanfiction combining $thing1 and {$thing2}.  The story should use $theme as a plot device!";
	$fb_string_enc = urlencode($fb_string);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html itemscope itemtype="http://schema.org/">
<head>
	<style>
		@font-face{font-family:'Noticia Text';font-style:normal;font-weight:400;src:local('Noticia Text'),local('NoticiaText-Regular'),url(http://themes.googleusercontent.com/static/fonts/noticiatext/v4/wdyV6x3eKpdeUPQ7BJ5uUHhCUOGz7vYGh680lGh-uXM.woff) format('woff')}@font-face{font-family:Raleway;font-style:normal;font-weight:800;src:local('Raleway ExtraBold'),local('Raleway-ExtraBold'),url(http://themes.googleusercontent.com/static/fonts/raleway/v7/1ImRNPx4870-D9a1EBUdPBsxEYwM7FgeyaSgU71cLG0.woff) format('woff')}body{background:#f2f0e8;background-image:url(images/bedge_grunge.png);background-position:left;background-repeat:repeat;padding:0;margin:auto;height:100%;width:100%;font-family:Helvetica,arial,sans-serif;font-size:.8em}html{height:100%}div.main{width:100%;text-align:center;padding-top:40px}h1.toplogo{font-family:Raleway,sans-serif;font-weight:800;font-size:56px;width:600px;text-align:left;color:#FFF;display:inline-block;margin:0}.main .toplogo:hover{-webkit-transform:scale(1.05);-moz-transform:scale(1.05);transform:scale(1.05);-webkit-animation-iteration-count:1;-moz-animation-iteration-count:1;animation-iteration-count:1;-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;transition:all .1s ease-in-out;cursor:pointer}.main .toplogo:active{-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;transition:all .1s ease-in-out;-webkit-transform:scale(1);-moz-transform:scale(1);transform:scale(1);-webkit-animation-iteration-count:1;-moz-animation-iteration-count:1;animation-iteration-count:1}span.highlight{color:#7a011b}div.maintext{height:200px;background-color:rgba(219,213,191,.6);width:100%;margin-top:40px}div.storyidea{display:inline-block;max-width:800px;font-family:'Noticia Text',serif;font-size:2em;text-align:left;padding:15px 0}.utils div{margin:5px 15px;display:inline-block}div.bannerad{margin:5px 0}div.social{position:fixed;left:0;bottom:0}
	</style>
	<title>The Terrible Crossover Fanfiction Idea Generator</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
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