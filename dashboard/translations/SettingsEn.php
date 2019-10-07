		<form action="../" method="post" id="SettingsMain">
			<div align="center">
				Discord displaying format : <select name="DiscordDisplayMode" id="DiscordDisplayMode" onchange="DetectChange();"><option value="DisWeb" checked>DisWeb (default)</option><option value="Widget" checked>Discord Widget</option><option value="None" checked>Not any Discord display</option></select>

				<div id="DiscordServerFields" align="center" style="display: block;">
					To see the <span id="TextDiscordWidget" style="display: none;">Discord Widget</span><span id="TextDisWeb">DisWeb module</span>, we need your server ID and channel ID.<br/>
					<input type="text" name="ServerID" placeholder="Server ID"/> <input type="text" name="ChannelID" placeholder="Channel ID"/>
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
						alert('Warning ! Discord Widget needs to be enabled !');
						document.getElementById('DiscordServerFields').style.display = "block";
						document.getElementById('TextDiscordWidget').style.display = "inline";
						document.getElementById('TextDisWeb').style.display = "none";
					} else {
						alert('Warning ! DisWeb Bot needs to be on your server, and have the permission to moderate messages.'); // Demander traduction de 'Gérer les messages'.
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