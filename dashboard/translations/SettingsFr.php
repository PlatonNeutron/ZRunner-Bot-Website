		<form action="../" method="post" id="SettingsMain">
			<div align="center">
				Format d'affichage Discord : <select name="DiscordDisplayMode" id="DiscordDisplayMode" onchange="DetectChange();"><option value="DisWeb" checked>DisWeb (par défaut)</option><option value="Widget" checked>Discord Widget</option><option value="None" checked>Pas d'affichage Discord</option></select>

				<div id="DiscordServerFields" align="center" style="display: block;">
					Pour avoir accès <span id="TextDiscordWidget" style="display: none;">au widget Discord</span><span id="TextDisWeb">au module DisWeb</span>, il nous faut l'ID de votre serveur et l'ID du salon.<br/>
					<input type="text" name="ServerID" placeholder="ID de Serveur"/> <input type="text" name="ChannelID" placeholder="ID du Salon"/>
				</div>
			</div>

			<script>
				var DiscordDisplayMode = document.getElementById('DiscordDisplayMode');
				var ReturnField = document.getElementById('ReturnField');

				function DetectChange() {
					if (DiscordDisplayMode.value == "None") {
						//ReturnField.innerHTML = '';
						document.getElementById('DiscordServerFields').style.display = "none";
					} else if (DiscordDisplayMode.value == "Widget") {
						//ReturnField.innerHTML = 'Il est nécéssaire d\'activer les widgets Discord !';
						alert('Attention ! Le widget Discord doit être activé !');
						document.getElementById('DiscordServerFields').style.display = "block";
						document.getElementById('TextDiscordWidget').style.display = "inline";
						document.getElementById('TextDisWeb').style.display = "none";
					} else {
						alert('Attention ! DisWeb Bot doit être sur votre serveur, et avoir la permission de gérer les messages.');
						document.getElementById('DiscordServerFields').style.display = "block";
						document.getElementById('TextDiscordWidget').style.display = "none";
						document.getElementById('TextDisWeb').style.display = "inline";


					}
				}
			</script>

			<span id="ReturnField"></span>

			<div align="center">
				<button type="submit" id="submit">Enregistrer</button>
			</div>
		</form>