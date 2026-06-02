<?php
//header("Content-type: image/png");
 
include ("../jpgraph/src/jpgraph.php");
include ("../jpgraph/src/jpgraph_line.php");
require_once ('../jpgraph/src/jpgraph_bar.php');
 
// Some data
$datay=array(10);

// Create the graph. These two calls are always required
$graph = new Graph(420,100,'auto');
//$graph->SetScale("textlin");
$graph->SetScale("textlin",0,20);

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(50,40,40,40);
$graph->img->SetAngle(90); 
$graph->title->Set('Débit de votre connexion en MegaBites/secondes (Mb/sec)');

// set major and minor tick positions manually
//$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);

$graph->yscale->ticks->Set(5,5);
$graph->xaxis->Hide();
//$graph->SetScale('intlin',0,20,0,0);
//$graph->xaxis->scale->ticks->Set(20);
//$graph->xaxis->SetTickLabels(array('Debit'));
$graph->yaxis->SetTickLabels(array('Mb/s'));
//$graph->xaxis->SetTickSide( SIDE_DOWN )
//$graph->yaxis->SetLabelAlign('down','center');

$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.
//$graph->SetBackgroundGradient('#00CED1', '#FFFFFF', GRAD_HOR, BGRAD_PLOT);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graPH
$graph->Add($b1plot);

//$b1plot->SetWeight(0);
$b1plot->SetFillGradient("#808000","#90EE90",GRAD_HOR);
$b1plot->SetWidth(5);

$datah = array(0,5,12,17,7,1,10);

// Setup the graph
$curve = new Graph(420,220, 'auto');
$curve->SetScale("intlin",0,$aYMax=20);
$curve->SetScale("textlin",0,20);

$theme_class= new UniversalTheme;
$curve->SetTheme($theme_class);

$curve->SetMargin(40,40,50,40);

$curve->title->Set('Débit durant les 7 derniers jours');
$curve->SetBox(false);
$curve->yaxis->HideLine(false);
$curve->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.
$curve->ygrid->SetFill(true,'#FFFFFF@0.5','#FFFFFF@0.5');
$curve->SetBackgroundGradient('#FFFFFF', '#00FF7F', GRAD_HOR, BGRAD_PLOT);

$curve->xaxis->SetTickLabels(array('Mon','Thu','Wed','Thu','Fri','Sat','Sun'));
$curve->xaxis->SetLabelMargin(20);
$curve->yaxis->SetLabelMargin(20);

//$curve->SetAxisStyle(AXSTYLE_BOXOUT);
$curve->img->SetAngle(0); 

// Create the line
$p1 = new LinePlot($datah);
$curve->Add($p1);

$p1->SetFillGradient('#FFFFFF','#F0F8FF');
$p1->SetColor('#aadddd');

///////////////////////////////////////////

$handle1 =  $graph->Stroke( _IMG_HANDLER);
$handle2 =  $curve->Stroke( _IMG_HANDLER);
  
$image = imagecreatetruecolor(420,300);
imagecopy($image, $handle1,0, 0, 0, 0, 420,100);
imagecopy($image, $handle2,0,80,0,0,420,250);
 
// Stream the result back as a PNG image
header("Content-type: image/png");
imagepng ($image);
?>