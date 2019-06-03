<?php
  // Allumage de l'actionneur
  $trame = "1G02D2a01000121";
  $adresse = "http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G02D&TRAME=".$trame;
  echo $adresse;
  $ch = curl_init();
  curl_setopt(
    $ch,
    CURLOPT_URL,
    $adresse
  );
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
  curl_close($ch);

?>
