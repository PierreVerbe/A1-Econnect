<?php // content="text/plain; charset=utf-8"
require_once ('../../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../../jpgraph-4.2.5/src/jpgraph_line.php');

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$arrayMois = array('1','2','3','4','5','6','7','8','9','10','11','12');

$datay = array();

$req = $bdd->query('SELECT COUNT(*) AS countAbos FROM utilisateur GROUP BY MONTH(utilisateur.Debut_abo) ASC');

while ($donnees = $req->fetch())
{
	$datay[] = $donnees['countAbos'] * 30; //prix de l'abonnement
}

$req->closeCursor();

// Setup the graph
$graph = new Graph(600,300);
$graph->SetScale("intlin",0,0,0,0);
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->SetBox(false);

$graph->title->Set("Vente d'abonnements");
$graph->ygrid->Show(true);
$graph->xgrid->Show(false);
$graph->yaxis->HideZeroLabel();
$graph->ygrid->SetFill(true,'#FFFFFF@0.5','#FFFFFF@0.5');
$graph->SetBackgroundGradient('blue', '#55eeff', GRAD_HOR, BGRAD_PLOT);
$graph->xaxis->SetTickLabels($arrayMois);

// Create the line
$p1 = new LinePlot($datay);
$graph->Add($p1);

$p1->SetFillGradient('green','yellow');
$p1->SetStepStyle();
$p1->SetColor('#808000');

// Output line
$graph->Stroke();
