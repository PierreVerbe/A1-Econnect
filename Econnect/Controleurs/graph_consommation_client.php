<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../jpgraph-4.2.5/src/jpgraph_bar.php');

$data1y=array(575,650,720,800);



// Create the graph. These two calls are always required
$graph = new Graph(700,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,200,400,600,800), array(100,300,400,500,700));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Sep.','Oct.','Nov.','Déc.'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data1y);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$graph->title->Set("Consommation en kWh");

// Display the graph
$graph->Stroke();
?>