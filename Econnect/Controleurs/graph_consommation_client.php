<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../jpgraph-4.2.5/src/jpgraph_bar.php');

$data1y=array(900,1100,1950,2100,2200);

// Create the graph. These two calls are always required
$graph = new Graph(700,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,500,1000,1500,2000,2500));
$graph->yaxis->title->Set("Consommation en KWh");
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Aout','Sep.','Oct.','Nov.','Déc.'));
$graph->xaxis->title->Set("Mois de l'année");
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data1y);

// ...and add it to the graPH
$graph->Add($b1plot);

$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$graph->title->Set("Consommation électrique des 5 derniers mois");

// Display the graph
$graph->Stroke();
?>