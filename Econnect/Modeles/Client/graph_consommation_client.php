<?php // content="text/plain; charset=utf-8"
require_once ('../../jpgraph-4.2.5/src/jpgraph.php');
require_once ('../../jpgraph-4.2.5/src/jpgraph_bar.php');

try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$arrayMois = array('1','2','3','4','5','6','7','8','9','10','11','12');

$datay = array();

$req = $bdd->query('SELECT facture.Consommation FROM facture WHERE facture.ID_Maison = (SELECT user_maison.ID_Maison FROM utilisateur,user_maison WHERE utilisateur.ID_User = user_maison.ID_User AND utilisateur.ID_User = 1 GROUP BY user_maison.ID_Maison ASC LIMIT 1) GROUP BY MONTH(facture.Date_facture) ASC LIMIT 12');


while ($donnees = $req->fetch())
{
	$datay[] = $donnees['Consommation'];
}

//$req2 = $bdd->prepare("SELECT facture.Consommation FROM facture WHERE facture.ID_Maison = $id_maison GROUP BY facture.ID_Facture ASC LIMIT 12 ");
//$req2->bindParam(1, $_SESSION['id']);
//$req2->execute();

//$req = $bdd->query('SELECT facture.Consommation FROM facture GROUP BY MONTH(facture.Date_facture) ASC');

//while ($donnees2 = $req2->fetch())
//{
//	$datay[] = $donnees2['Consommation'];
//}

$req->closeCursor();


echo ("mes data :" . $datay[]);


//$data1y=array(900,1100,1950,2100,2200);

// Create the graph. These two calls are always required
$graph = new Graph(700,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,25,50,75,100,125,150));
$graph->yaxis->title->Set("Consommation en KWh");
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($arrayMois);
$graph->xaxis->title->Set("Mois de l'année");
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graPH
$graph->Add($b1plot);

$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$graph->title->Set("Consommation électrique des 12 derniers mois");

// Display the graph
$graph->Stroke();
?>