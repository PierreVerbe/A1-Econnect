<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$datay1 = array(20,15,23,15);
$datay2 = array(12,9,42,8);
$datay3 = array(5,19,32,20);
$datay4 = array(23,17,40,18);
$datay5 = array(10,17,18,24);
$datay6 = array(30,22,50,14);
$datay7 = array(9,28,27,23);

// Setup the graph
$graph = new Graph(500,600);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,123);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

// Create the third line
$p3 = new LinePlot($datay3);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('Line 3');

// Create the third line
$p4 = new LinePlot($datay4);
$graph->Add($p4);
$p4->SetColor("#394495");
$p4->SetLegend('Line 4');

// Create the third line
$p5 = new LinePlot($datay5);
$graph->Add($p5);
$p5->SetColor("#3F8793");
$p5->SetLegend('Line 5');

// Create the third line
$p6 = new LinePlot($datay6);
$graph->Add($p6);
$p6->SetColor("#EE1493");
$p6->SetLegend('Line 6');

// Create the third line
$p7 = new LinePlot($datay7);
$graph->Add($p7);
$p7->SetColor("#DC8123");
$p7->SetLegend('Line 7');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>
