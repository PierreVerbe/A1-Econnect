function deletePiece(ID_Piece)
{
	window.location.href = "../../Modeles/Client/deletePiece.php?ID_Piece=" + ID_Piece;
}

function deleteCapteur(ID_Capteur)
{
	window.location.href = "../../Modeles/Client/deleteCapteur.php?ID_Capteur=" + ID_Capteur;
}

function deleteActionneur(ID_Actionneur)
{
	window.location.href = "../../Modeles/Client/deleteActionneur.php?ID_Actionneur=" + ID_Actionneur;
}

function setTemp(temp, piece)
{
	if (temp < 10 || temp >30)
    {
        alert("Le température doit être comprise entre 10°C et 30°C");
    }

    else
    {
        window.location.href = "../../Modeles/Client/setTemp.php?temp=" + temp +"&piece=" + piece;
    }
}

function setLum(lum, piece)
{
	if (lum < 0 || lum > 100)
    {
        alert("La luminosité doit être comrpise entre 0 et 100");
    }

    else
    {
        window.location.href = "../../Modeles/Client/setLum.php?lum=" + lum +"&piece=" + piece;
    }
}

function setEtat(etat, actionneur)
{
	window.location.href = "../../Modeles/Client/setEtat.php?etat=" + etat +"&actionneur=" + actionneur;
}