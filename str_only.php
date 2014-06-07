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
print("Your challenge is to write crossover fanfiction combining $thing1 and $thing2. The story should use $theme as a plot device!");