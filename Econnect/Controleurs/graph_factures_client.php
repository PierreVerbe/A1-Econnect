<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../jpgraph-4.2.5/src/jpgraph_bar.php');

$data1y=array(200,225,250,275);



// Create the graph. These two calls are always required
$graph = new Graph(700,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,100,200,300,400), array(50,150,250,350));
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
$b1plot->SetFillColor("#11cc11");

$graph->title->Set("Factures en €");

// Display the graph
$graph->Stroke();
?>