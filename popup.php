<?
	include('database.php');

	if(intval($_GET['t1']) > 0 || intval($_GET['t2']) > 0 || intval($_GET['th']) > 0)
	{
		$show1 = intval($_GET['t1']);
		$show2 = intval($_GET['t2']);
		$randNum2 = intval($_GET['th']);
	}
	$thing1 = trim(sql_get_single("SELECT thing_name FROM bff_things WHERE thing_id = $show1"));
	$thing2 = trim(sql_get_single("SELECT thing_name FROM bff_things WHERE thing_id = $show2"));
	$theme  = trim(sql_get_single("SELECT theme_name FROM bff_themes WHERE theme_id = $randNum2"));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>The Terrible Crossover Fanfiction Idea Generator</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<LINK REL=stylesheet HREF="bff.css" TYPE="text/css">
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
</head>
<body style="padding:25px">

Copy and paste this code to display this terrible idea in your blog.<br>
<textarea cols="40" rows="5">
&lt;div style="width:450px; background: #dbd5bf; border: 2px solid #000; font-size:.8em; padding: 10px; color:#000"&gt;Your challenge is to write crossover fanfiction combining &lt;b&gt;<?=$thing1?>&lt;/b&gt; and &lt;b&gt;<?=$thing2?>&lt;/b&gt;.  
The story should use &lt;b&gt;<?=$theme?>&lt;/b&gt; as a plot device!&lt;br&gt;&lt;br&gt;Generated by the &lt;a style="font-family: Verdana, sans-serif; color: #7a011b; font-weight: bold; text-decoration: none;" href="http://kaction.com/badfanfiction"&gt;Terrible Crossover Fanfiction Idea Generator&lt;/a&gt;
&lt;/div&gt;
</textarea>
<br><br>

This will display:
<div style="width:450px; background: #dbd5bf; border: 2px solid #000; font-size:.8em; padding: 10px; color:#000">Your challenge is to write crossover fanfiction combining 
<b><?=$thing1?></b> and
<b><?=$thing2?></b>.  
The story should use <b><?=$theme?></b> as a plot device!<br><br>
Generated by the <a style="font-family: Verdana, sans-serif; color: #7a011b; font-weight: bold; text-decoration: none;" href="http://kaction.com/badfanfiction">Terrible Crossover Fanfiction Idea Generator</a>
</div>
</body>
</html>