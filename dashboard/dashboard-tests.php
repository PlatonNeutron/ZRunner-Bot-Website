<script>
	// Création d'une requête HTTP
	var req = new XMLHttpRequest();
	// Requête HTTP GET synchrone vers le fichier langages.txt publié localement
	var headers = {
		'Content-Type': 'application/json',
		'API-Key': 'ApOCQySvckqOkjjLIUVsNmqa9DiJ8HRr0ZW'
	};
	var params = {
		'guild': 625316773771608074
	};
	req.open("GET", "http://51.77.212.245:8080/api/guild/get");
	req.setRequestHeader('Content-Type', 'application/json');
	req.setRequestHeader('API-Key', 'ApOCQySvckqOkjjLIUVsNmqa9DiJ8HRr0ZW');
	//req.open("GET", "language.txt", false);
	// Envoi de la requête
	req.send(params.guild);
	// Affiche la réponse reçue pour la requête
	var response = req.responseText;
</script>