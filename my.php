<?php
	
	$key = "eef439ab45f0ca3f62e94f2761984315";

    #include("geoiploc.php"); // Must include this

	function location($ip){
	  // ip must be of the form "192.168.1.100"
	  // you may load this from a database
	  #$ip = $_SERVER["REMOTE_ADDR"];
	  echo "Your IP Address is: " . $ip . "<br />";

	  echo "Your Country is: ";
	  // returns country code by default
	  echo getCountryFromIP($ip);
	  echo "<br />\n";

	  // optionally, you can specify the return type
	  // type can be "code" (default), "abbr", "name"

	  echo "Your Country Code is: ";
	  echo getCountryFromIP($ip, "code");
	  echo "<br />\n";

	  // print country abbreviation - case insensitive
	  echo "Your Country Abbreviation is: ";
	  echo getCountryFromIP($ip, "AbBr");
	  echo "<br />\n";

	  // full name of country - spaces are trimmed
	$location = getCountryFromIP($ip, " NamE ");
	  echo "Your Country Name is: ";
	  echo $location;
	  echo "<br />\n";
		
		return $location ;
	}

	/**
	 * Encode an email address to display on your website
	 */
	function encode_email_address( $email ) {
		 $output = '';
		 for ($i = 0; $i < strlen($email); $i++)
		 {
			  $output .= '&#'.ord($email[$i]).';';
		 }
		 return $output;
	}
	$encodedEmail = encode_email_address( 'mohamed.morchid@univ-avignon.fr' );
	
    function getLocation($ip=NULL){
        // set IP address and API access key 
        //$ip = '134.201.250.155';

        // Initialize CURL:
        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $api_result = json_decode($json, true);

        // Output the "capital" object inside "location"
        echo $api_result['location']['capital'];
        
        return $api_result['location']['capital'];
    }

    //http://api.ipstack.com/78.212.252.131?access_key=eef439ab45f0ca3f62e94f2761984315
	function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
	    $output = NULL;
	    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
		$ip = $_SERVER["REMOTE_ADDR"];
		if ($deep_detect) {
		    if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
		        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
		        $ip = $_SERVER['HTTP_CLIENT_IP'];
		}
	    }
	    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
	    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
	    $continents = array(
		"AF" => "Africa",
		"AN" => "Antarctica",
		"AS" => "Asia",
		"EU" => "Europe",
		"OC" => "Australia (Oceania)",
		"NA" => "North America",
		"SA" => "South America"
	    );
        //echo $ip;
	    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
		$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
		if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
		    switch ($purpose) {
		        case "location":
		            $output = array(
		                "city"           => @$ipdat->geoplugin_city,
		                "state"          => @$ipdat->geoplugin_regionName,
		                "country"        => @$ipdat->geoplugin_countryName,
		                "country_code"   => @$ipdat->geoplugin_countryCode,
		                "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
		                "continent_code" => @$ipdat->geoplugin_continentCode
		            );
		            break;
		        case "address":
		            $address = array($ipdat->geoplugin_countryName);
		            if (@strlen($ipdat->geoplugin_regionName) >= 1)
		                $address[] = $ipdat->geoplugin_regionName;
		            if (@strlen($ipdat->geoplugin_city) >= 1)
		                $address[] = $ipdat->geoplugin_city;
		            $output = implode(", ", array_reverse($address));
		            break;
		        case "city":
		            $output = @$ipdat->geoplugin_city;
		            break;
		        case "state":
		            $output = @$ipdat->geoplugin_regionName;
		            break;
		        case "region":
		            $output = @$ipdat->geoplugin_regionName;
		            break;
		        case "country":
		            $output = @$ipdat->geoplugin_countryName;
		            break;
		        case "countrycode":
		            $output = @$ipdat->geoplugin_countryCode;
		            break;
		    }
		}
	    }
	    return $output;
	}	


	function getNumberOfPapers($nom)
	{
	 	$nombre=0;
		$text = file_get_contents("./publications.php");
		$nombre = substr_count($text,$nom);
		return $nombre - 2 ;
	}

	require_once("mail.php");

	$jour = date("d");
	$mois = date("m");
	$annee = date("Y");
	$heure = date("H");
	$minutes = date("i");
	#$fichier = fopen("logs_connexion.txt", "a+");

	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);

	if (isset($_SERVER["HTTP_USER_AGENT"])){
		$naviguateur = $_SERVER["HTTP_USER_AGENT"];
	}

	//Page courante ...
	if (isset($_SERVER['PHP_SELF'])) {
		$teste = explode("/", $page);
		$file=$teste[count($teste)-1];
		$t=explode(".", $file);
		$page=$t[0];
	}

	//IP ...
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		$ip=$_SERVER['REMOTE_ADDR'];
	}

    ini_set('extension', 'php_curl.dll');

	//DOMAINE ...
	$domaine = "";//gethostbyaddr($ip);

	if ( 
		strstr($ip,'90.84.144') == false && 
        strstr($ip,'194.57.216.117') == false &&
        strstr($ip,'lrc16-ridu.univ-avignon.fr') == false &&
		strstr($ip,'2a01:110:10:3005') == false && 
        strstr($ip,'94.245.127.13') == false &&
		strstr($domaine,'SOL-FTTB') == false && 
        strstr($domaine,'kyivstar') == false && 
		strstr($domaine,'usernat') == false && 
        strstr($domaine,'sovam') == false &&
		strstr($domaine,'baiduspider') == false && 
        strstr($naviguateur,'spider') == false && 
		strstr($naviguateur,'craw') == false && 
        strstr($naviguateur,'Slurp') == false && 
        //strstr($ip,'194.57.216.125') == false &&
		strstr($domaine,'nomade') == false &&
        strstr($domaine,'gou') == false && 
        strstr($naviguateur,'bot') == false && 
		strstr($domaine,'bot') == false && 
        strstr($naviguateur,'(iPhone; CPU iPhone OS 9_0_2 like Mac OS X') == false && 
		strstr($page,'home') == false && 
        strstr($domaine,'localhost') == false &&
		strstr($domaine,'feelliveto.net') == false ){

        //$query = "http://api.ipstack.com/$ip?access_key=$key";
        
		$address=$domaine; //ip_info($ip, "Address"); // Menlo Park, California, United States
		
        //echo "--> ".$address;
        
        //getLocation($ip);
        //$json = file_get_contents($query);
        //$obj = json_decode($json);
        //echo $obj->access_token;
        $location="UNKNOWN"; #location($ip);
        
        //smtpmailer('mohamed.morchid@univ-avignon.fr', "[SITE] $page : $address ($location)", "Langue : $language\nDate : $jour/$mois/$annee\n Heure : $heure:$minutes\n Naviguateur : $naviguateur\n IP : $ip\n DOMAINE : $domaine ($address)\n Page: $page");
	}
?>
