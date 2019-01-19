var table = document.getElementById('SAV_table');

	for(var i = 1; i < table.rows.length; i++)
	{
		table.rows[i].onclick = function()
		{
			var id_ticket = this.cells[2].innerHTML;

			document.getElementById('num_ticket').value = id_ticket;

			$.post("../../Modeles/Administrateur/bdd_message-tickets-sav_admin.php", {postid: id_ticket},
				function(data){
				$('#contenu_ticket').html(data);
				});
		}
	}

function closeTicket(){
	id_ticket = document.getElementById('num_ticket').value;

	if (id_ticket == 0)
	{
		alert("Pas de ticket sélectionné");
		return 0;
	}

	$.post("../../Modeles/Administrateur/bdd_fermeture-ticket-admin.php", {numticket: id_ticket},
	function(data){
		alert("Le ticket a bien été fermé");
		javascript:document.location.href='http://localhost/Econnect/A1-Econnect/Econnect/Vues/Administrateur/chat_sav.php';
		id_ticket = 0;
	});
}