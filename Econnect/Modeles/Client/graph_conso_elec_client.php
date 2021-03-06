<?php // content="text/plain; charset=utf-8"
	require_once ('../../jpgraph-4.2.5/src/jpgraph.php');
	require_once ('../../jpgraph-4.2.5/src/jpgraph_line.php');

	try{
		include ("../../Modeles/Requete_parametre.php");
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	$arrayMois = array('1','2','3','4','5','6','7','8','9','10','11','12');

	$datay = array();

	$req = $bdd->prepare("SELECT facture.Prix FROM facture,user_maison,utilisateur WHERE user_maison.ID_Maison = facture.ID_Maison AND utilisateur.ID_User = user_maison.ID_Maison AND utilisateur.ID_User = ? GROUP BY MONTH(facture.Date_facture) ASC");
		$req->bindParam(1, $_SESSION['id']);
		$req->execute();

	while ($donnees = $req->fetch()){
		$datay[] = $donnees['Prix'];
	}

	if (empty($datay)){
		header('Location: ../../Vues/Image/pas_de_data.png');
		exit;
	}

	else{
	$req->closeCursor();

	// Setup the graph
	$graph = new Graph(600,500);
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
	$graph->yaxis->title->Set("Prix en €");

	$graph->xgrid->Show();
	$graph->xgrid->SetLineStyle("solid");
	$graph->xaxis->SetTickLabels($arrayMois);
	$graph->xgrid->SetColor('#E3E3E3');
	$graph->xaxis->title->Set("Mois de l'année");

	// Create the first line
	$p1 = new LinePlot($datay);
	$graph->Add($p1);
	$p1->SetColor("#6495ED");
	$p1->SetLegend('2019');

	// Create the second line
	/*$p2 = new LinePlot($datay2);
	$graph->Add($p2);
	$p2->SetColor("#B22222");
	$p2->SetLegend('2017');

	// Create the third line
	$p3 = new LinePlot($datay3);
	$graph->Add($p3);
	$p3->SetColor("#FF1493");
	$p3->SetLegend('2018');*/

	$graph->legend->SetFrameWeight(1);

	// Output line
	$graph->Stroke();
	}
?>