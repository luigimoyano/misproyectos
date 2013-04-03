<?php
	namespace barbarian;

	class Conan {
		var $bodyBuild = "extremely muscular";
		var $birthDate = 'before history';
		var $skill = 'fighting';
	}

	namespace obrien;
	class Conan {
		var $bodyBuild = "very skinny";
		var $birthDate = '1963';
		var $skill = 'comedy';
	}
	$conan = new \barbarian\Conan();
	assert('extremely muscular born: before history' == 
	   "$conan->bodyBuild born: $conan->birthDate");

	echo "Barbarian ".print_r($conan);

	$conan = new \obrien\Conan();
	assert('very skinny born: 1963' == "$conan->bodyBuild born: $conan->birthDate");

	echo "Obrien ".print_r($conan);

	// Funcion para el autoload.
	// function __autoload($classname) {
	// 	  $classname = ltrim($classname, '\\');
	// 	  $filename  = '';
	// 	  $namespace = '';
	// 	  if ($lastnspos = strripos($classname, '\\')) {
	// 	    $namespace = substr($classname, 0, $lastnspos);
	// 	    $classname = substr($classname, $lastnspos + 1);
	// 	    $filename  = str_replace('\\', '/', $namespace) . '/';
	// 	  }
	// 	  $filename .= str_replace('_', '/', $classname) . '.php';
	// 	  require $filename;
	// }

?>