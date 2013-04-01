<?
	if (preg_match("/^[a-z]{3}/", "php3")  ){ // Este funciona.
		echo "Encaja";
	}
	else echo "No encaja";

	return;	


	if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
	    echo "A match was found.";
	} else {
	    echo "A match was not found.";
	}

	if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
	    echo "A match was found.";
	} else {
	    echo "A match was not found.";
	}
	// get host name from URL
	preg_match('@^(?:http://)?([^/]+)@i',"http://www.php.net/index.html", $matches);
	$host = $matches[1];

	echo print_r($host);

?>
