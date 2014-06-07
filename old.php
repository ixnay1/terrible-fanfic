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
	
	//facebook stuff
	$fb_string = "Your challenge is to write crossover fanfiction combining $thing1 and {$thing2}.  The story should use $theme as a plot device!";
	$fb_string_enc = urlencode($fb_string);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html itemscope itemtype="http://schema.org/Article">
<head>
<title>The Terrible Crossover Fanfiction Idea Generator</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="robots" content="noodp" />
<LINK REL=stylesheet HREF="bff.css" TYPE="text/css">
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21493156-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta itemprop="name" content="The Terrible Crossover Fanfiction Idea Generator">
<meta itemprop="description" content="Your one-stop shop for helping you come up with awful ideas that should never be put to paper.">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=265896053442104";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="toplogo"><img src="images/logo.png" alt="The Terrible Crossover Fanfiction Idea Generator" title="The Terrible Crossover Fanfiction Idea Generator"></div>

<br>
<div class="shadowbox"><div class="shadowbox-inner">Your challenge is to write crossover fanfiction combining 
<b><?=$thing1?></b> and
<b><?=$thing2?></b>.  
The story should use <b><?=$theme?></b> as a plot device!<br><div style="background: #999; height:1px; margin-top:10px; margin-bottom:10px;"></div>
<a href="javascript:history.go(0)"><img src="images/refresh.png" alt="Refresh" title="Refresh" align="middle">&nbsp;&nbsp;Show a new terrible idea</a><br>
<a href="http://www.facebook.com/dialog/feed?app_id=175725632530054&link=http://kaction.com&name=The Terrible Crossover Fanfiction Idea Generator&caption=A website full of terrible ideas&description=<?=$fb_string_enc?>&redirect_uri=http://kaction.com" target="_new"><img src="images/facebook.png" alt="Facebook" title="Facebook" align="middle">&nbsp;&nbsp;Share this idea on Facebook</a><br>
<a href=""  onClick="javascript:window.open('popup.php?t1=<?=$show1?>&t2=<?=$show2?>&th=<?=$randNum2?>', 'blog', 'width=570,height=300,scrollbars=no'); return false;"><img src="images/blog.png" alt="Blog" title="Blog" align="middle">&nbsp;&nbsp;Display this in your blog or journal</a><br>
</div></div>
<br>

<div style="margin-left: 50px">
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
<div class="fb-like-box" data-href="http://www.facebook.com/terriblefanfic" data-width="292" data-show-faces="true" data-border-color="#7A011B" data-stream="false" data-header="true" style="margin:10px 50px; float:left"></div>
<div style="float:left; width: 250px; margin-top:10px;">
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
	<div style="margin: 10px 0">
		<script type="text/javascript">
		digg_skin = 'compact';
		digg_bgcolor = '#dbd5bf';
		digg_window = 'new';
		digg_url = 'http://kaction.com/badfanfiction/';
		</script>
		<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
	</div>
</div>
</body>
</html>