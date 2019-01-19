<?php // content="text/plain; charset=utf-8"
require_once ('../../../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../../../jpgraph-4.2.5/src/jpgraph_line.php');

$datay1 = array(2100,2150,1900,1700,1600,1400,1000,900,1100,1950,2100,2200);
$datay2 = array(2200,2100,1850,1600,1400,1550,1100,850,1150,1950,2150,2300);
$datay3 = array(2100,2150,1900,1700,1600,1550,1000,900,1100,1950,2000,2150);

// Setup the graph
$graph = new Graph(600,300);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Graphique factures');
$graph->SetBox(false);

//$graph->SetMargin(40,20,36,83);
$graph->SetMargin(50,20,36,83);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->title->Set("Consommation en kWh");

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('1','2','3','4','5','6','7','8','9','10','11','12'));
$graph->xgrid->SetColor('#E3E3E3');
$graph->xaxis->title->Set("Mois de l'année");

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('2016');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('2017');

// Create the third line
$p3 = new LinePlot($datay3);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('2018');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();
?>