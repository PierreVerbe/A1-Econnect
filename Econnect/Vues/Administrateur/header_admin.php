
<body>
	<header>
		<div id = "Menu">
			<ul>
				<li>Liste des clients</li>
				<li>Accès maison</li>
				<li>Chat/SAV</li>
				<li>Déconnexion</li>
			</ul>
		</div>
	</header>

</body>

<style type="text/css">
	#Menu ul
	{
		display: flex;
		list-style-type: none;
		justify-content: space-around;
		border: 0px solid black;
		border-radius: 10px;
		background-color: #6FFFBF;	
	}

	#Menu li
	{
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
		padding-right: 10px;
	}

	#Menu li:hover
	{
		background: #00E67F;
		cursor: pointer;
		transition: background 1s;
	}
</style>