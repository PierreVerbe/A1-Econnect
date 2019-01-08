var table = document.getElementById('SAV_table_client');
				//alert(table);
				for(var i = 1; i < table.rows.length; i++){
					table.rows[i].onclick = function(){
						var id_ticket = this.cells[0].innerHTML;
						//document.getElementById('num_ticket').value = id_ticket;
						
						$.post("../../Modeles/Client/Requete_SAV_Contenu_Ticket.php", {postid: id_ticket},
							function(data){
								$('#contenu_ticket').html(data);
							});
					}
				}