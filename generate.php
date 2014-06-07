<?
include('database.php');

	$sourceList = array();
	$folder = ".";
	$handle = opendir($folder); 
	$file = fopen ("list.txt", "r");
	if (!$file) {
    	echo "<p>Unable to open remote file.\n";
    	exit;
	}
	while (!feof ($file)) {
   	 $line = fgets ($file, 1024);
	$sourceList[count($sourceList)] = $line;}


	$adjList = array();
	$folder = ".";
	$handle = opendir($folder); 
	$file = fopen ("ideas.txt", "r");
	if (!$file) {
    	echo "<p>Unable to open remote file.\n";
    	exit;
	}
	while (!feof ($file)) {
   	 $line = fgets ($file, 1024);
	$adjList[count($adjList)] = $line;}

	foreach($sourceList as $thing)
	{
		$thing = addslashes($thing);
		$insert = "INSERT INTO bff_things (thing_name) VALUES ('$thing')";
		$add_member = mysql_query($insert);

		if (!$add_member) {
			die("$add_member->getMessage() <br> $insert</pre>");
		}
	}

	foreach($adjList as $theme)
	{
		$theme = addslashes($theme);
		$insert = "INSERT INTO bff_themes (theme_name) VALUES ('$theme')";
		$add_member = mysql_query($insert);

		if (!$add_member) {
			die("$add_member->getMessage() <br> $insert</pre>");
		}
	}
?>