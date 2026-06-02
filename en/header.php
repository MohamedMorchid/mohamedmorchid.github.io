<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?

$language = "EN" ;

require "../my.php";

$home 		= '<li><a href="index.php">Home</a></li>';
$current	= '<li><a href="currentWork.php">Current work</a></li>';
$research	= '<li><a href="research.php">Research</a></li>';
$teaching 	= '<li><a href="teaching.php">Teaching</a></li>';
$publications 	= '<li><a href="publications.php">Publications</a></li>';
$cv 		= '<li><a href="cv.php">CV</a></li>';
$demo 		= '<li><a href="demo.php">Demo</a></li>';

$title		= 'Mohamed Morchid - Associate Professor - HDR';

$pageName 	= "index";

$image= "";
if ( $page == "home" ){
	$home="<li id=\"current\"><a href=\"index.php\">Home</a></li>";
	$image="index_icon.png";
	$title		= 'Mohamed Morchid - Associate Professor - HDR';
	$pageName 	= "index";
}
else if ( $page == "current" ){
	$current="<li id=\"current\"><a href=\"current.php\">Current work</a></li>";
	$image="currentWork_icon.png";
	$title		= 'Mohamed Morchid - Current Work';
	$pageName 	= "current";
}
else if ( $page == "research" ){
	$research="<li id=\"current\"><a href=\"research.php\">Research</a></li>";
	$image="research_icon.png";
	$title		= 'Mohamed Morchid - Reseach';
	$pageName 	= "research";
}
else if ( $page == "teaching" ){
	$teaching="<li id=\"current\"><a href=\"teaching.php\">Teaching</a></li>";
	$image="teaching_icon.png";
	$title		= 'Mohamed Morchid - Teaching';
	$pageName 	= "teaching";
}
else if ( $page == "publications" ){
	$publications="<li id=\"current\"><a href=\"publications.php\">Publications</a></li>";
	$image="publications_icon.png";
	$title		= 'Mohamed Morchid - Publications';
	$pageName 	= "publications";
}
else if ( $page == "cv" ){
	$cv="<li id=\"current\"><a href=\"cv.php\">CV</a></li>";
	$image="cv_icon.png";
	$title		= 'Mohamed Morchid - CV';
	$pageName 	= "cv";
}
else if ( $page == "demo" ){
	$demo="<li id=\"current\"><a href=\"demo.php\">Demo</a></li>";
	$image="demo_icon.jpg";
	$title		= 'Mohamed Morchid - Demo';
	$pageName 	= "demo";
}


//$menu=$home." ".$current." ".$research." ".$teaching." ".$publications." ".$cv." ".$demo;
$menu=$home." ".$research." ".$teaching." ".$publications." ".$cv." ".$demo."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../fr/".$pageName.".php\"><img src=\"../images/flags/48/France.png\" width=\"15\" height=\"15\" alt=\"firefox\"/></a>";


//echo "RES $res";

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<link rel="icon" type="image/png" href="images/<? echo $image ;?>" />
<title><? echo $title ;?></title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="description" content="Mohamed Morchid - Associate Professor HDR" />
<meta name="keywords" content="Mohamed, Morchid, artificial intelligence, neural networks, quaternions, NLP, machine learning" />

<link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />

<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type="text/javascript">
	google.charts.load('current', {
	'packages': ['geochart'],
	});
	google.charts.setOnLoadCallback(drawRegionsMap);

	function drawRegionsMap() {
	var data = google.visualization.arrayToDataTable([
	['Country', 'Year'],

	['France', {v:1977, f:'Born'}],

	['Germany', {v:2000, f:'2000'}],
	['Spain', {v:2003, f:'2003'}],
	['Italy', {v:2014, f:'2014'}],

	['Slovakia', {v:2012, f:'2012'}],
	['Hungary', {v:2013, f:'2013'}],
	['Austria', {v:2013, f:'2014'}],
	['Switzerland', {v:2013, f:'2014'}],

	['United States', {v:2014, f:'2014'}],
	['Dominican Republic', {v:2008, f:'2008'}],


	['Norway', {v:2013, f:'2015'}],
	['Sweden', {v:2016, f:'2016'}],
	['Finland', {v:2022, f:'2022'}],
	['Iceland', {v:2014, f:'2014'}],
	['Denmark', {v:2021, f:'2021'}],
	['Estonia', {v:2022, f:'2022'}],


	[{v:'GB', f:'Great-Britain'}, {v:2019, f:'2019'}],
	['Ireland', {v:2012, f:'2012'}],


	['Qatar', {v:2014, f:'2014'}],

	['Morocco', {v:2015, f:'2015'}],

	[{v:'Malaysia', f:'Singapor'}, {v:2014, f:'2014'}],
	['Japan', {v:2013, f:'2013'}]
	]);

	var options = {
	//datalessRegionColor: '#f8bbd0',
	backgroundColor: '#81d4fa',
	//légende.nombreFormat: {numberFormat:'.##'},
	legend: {numberFormat:'####'},

        colorAxis: {colors: ['#e7711c', '#4374e0']} // orange to blue
      };

	var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
	chart.draw(data, options);
	}
</script>

</head>
<body>
	<!-- header starts-->
	<div id="header-wrap">
		<div id="header" class="container_16">

			<!-- navigation -->
			<div  id="nav">
				<ul>
					<? echo $menu ;?>
				</ul>
			</div>

			<h1 id="logo-text"><a href="index.php" title="">Mohamed Morchid</a></h1>

			<p id="intro">Associate Professor - HDR</p>
		<!-- header ends here -->
		</div>
