	<div id="Dashboard">
		<div id="DashboardMain">
			<div id="ServerName" align="center">
				NOM DU SERVEUR
			</div>

		<form id="DashboardFullPart" action="" method="post">
			<div id="General">
				<div class="Subtitles">GÉNÉRAL</div><br/><br/>
				<span class="OptionDescription">PRÉFIXE</span> <span class="Description">(LE SYMBOLE DEVANT UNE COMMANDE)</span><br/>
				<input type="text" name="prefix" placeholder="5 caractères maximum !" value="" maxlength="5"/>
				<br/><br/>
				<span class="OptionDescription">LANGUE</span> <span class="Description">(LANGUE PARLÉE PAR LE BOT)</span><br/>
				<span style="padding-left: 15px;"></span><img src="<?php echo $assets_path; ?>/Fr_DashboardIcon.png" id="IconSelected" class="Languages" width="10%"/> <span style="color: white; font-size: 2em;">-</span> <img src="<?php echo $assets_path; ?>/En_DashboardIcon.png" class="Languages" width="10%"/>
				<br/><br/>
				<span class="OptionDescription">DESCRIPTION</span> <span class="Description">(TEXTE PAR DÉFAUT POUR LES PARTENARIATS)</span><br/>
				<textarea name="ServerDescription" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">MESSAGE DE BIENVENUE</span> <span class="Description">(AFFICHÉ QUAND UN UTILISATEUR REJOINT LE SERVEUR)</span> <span onclick="alert('Pour ce message, vous pouvez utiliser quelques variables :\n - {user} : Mentionne l\'utilisateur\n - {server} : Montre le nom du serveur\n - {owner} : Montre le nom du propriétaire du serveur\n - {member_count} : Montre le nombre de membres actuels\n - {type}  : Retourne \'membre\' ou \'bot\'');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<textarea name="WelcomeMessage" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">MESSAGE DE DÉPART</span> <span class="Description">(AFFICHÉ QUAND UN UTILISATEUR QUITTE LE SERVEUR)</span> <span onclick="alert('Pour ce message, vous pouvez utiliser quelques variables :\n - {user} : Mentionne l\'utilisateur\n - {server} : Montre le nom du serveur\n - {owner} : Montre le nom du propriétaire du serveur\n - {member_count} : Montre le nombre de membres actuels\n - {type}  : Retourne \'membre\' ou \'bot\'');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<textarea name="LeaveMessage" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">SALON DES MESSAGES DE BIENVENUE/DÉPART</span><br/>
				<input type="text" name="WelcomeAndLeaveChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">RÔLES DES ARRIVANTS</span> <span class="Description">(AFFICHÉ QUAND UN UTILISATEUR QUITTE LE SERVEUR)</span> <span onclick="alert('Role pour les nouveaux arrivants ; il permet de vérifier que l\'utilisateur n\'est pas un robot.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="NewUsersRoles" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">ROLE MUTÉ</span> <span onclick="alert('Role qui empêche les utilisateurs le possédant d\'écrire.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="MutedRole" placeholder="" value=""/>
				<br/><br/>
				<br/><br/><br/>
			</div>

			<div id="ModerationRoles">
				<div class="Subtitles">RÔLES DE MODÉRATION</div><br/><br/>
				<span class="OptionDescription">BAN</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'ban\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="BanRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">KICK</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'kick\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="KickRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">MUTE</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'mute\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="MuteRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">WARN</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'warn\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="WarnRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">SLOWMODE</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'slowmode\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="SlowmodeRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">CLEAR</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'clear\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="ClearRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">SAY</span> <span onclick="alert('Role autorisant l\'utilisation de la commande \'say\'. Combinez-en plusieurs en les séparant avec \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="SayRole" placeholder="" value=""/>
				<br/><br/>
			</div>

			<div id="MoreSettings">
				<div class="Subtitles">
					Encore plus de réglages !
				</div><br/>
				<div id="MoreSettings_Content">
					<table style="text-align: center;">
						<tr>
							<td>
								<span class="OptionDescription">ACTIVER L'XP</span> <span onclick="alert('Zbot propose l\'utilisation d\'XP.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableXP" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableXP" width="20%"/></span>
							</td>
							<td>
								<span class="OptionDescription">COMMANDES FUN</span> <span onclick="alert('Zbot propose l\'utilisation de commandes fun et sympas ;-)');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableFun" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableFun" width="20%"/></span>
							</td>
						</tr>
						<tr>
							<td>
								<span class="OptionDescription">AIDE EN MP</span> <span onclick="alert('Le !help renverra un message en MP.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableHelpInDM" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableHelpInDM" width="20%" class="MoreSettings_Selected"/></span>
							</td>
							<td>
								<span class="OptionDescription">ANTI CAPS-LOCK</span> <span onclick="alert('Prévient l\'utilisation du caps lock.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableAntiCapsLock" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableAntiCapsLock" width="20%"/></span>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div id="Divers">
				<div class="Subtitles">DIVERS</div><br/><br/>
				<span class="OptionDescription">SALON DES LOGS DE MODÉRATION</span><br/>
				<input type="text" name="ModerationLogsChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">SALON DU COMPTEUR DE MEMBRES</span><br/>
				<input type="text" name="MembercounterChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">PROTECTION ANTI-RAID</span> <span class="Description">(VOIR DOCUMENTATION)</span> <span onclick="alert('Les différents niveaux d\'anti-raid sont :\n0 (un) : pas de filtre\n1 (Léger): kick des membres avec des invitations dans leur noms\n2 (Précautionneux): kick des comptes créés il y a moins d\'une minute\n3 (Haute): ban des membres avec invitations dans leur nom, et kick des comptes créés moins de 5 minutes avant\n4 ((╯°□°）╯︵ ┻━┻): ban des comptes créés moins de 3 minutes avant et kick de ceux créés il y a moins de 10 minutes');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<div style="color: white; font-size: 2em;" align="center"><span style="color: #6ae268;" id="SelctedAntiRaidLevel">0</span> - <span style="color: #fdff56;">1</span> - <span style="color: #f2a241;">2</span> - <span style="color: #e86c48;">3</span> - <span style="color: #d52b2b;">4</span></div>
				<br/><br/>
				<span class="OptionDescription">SALONS DE SONDAGE(S)</span><br/>
				<input type="text" name="PollChannels" placeholder="" value=""/>
				<br/><br/>
			</div>

			<br/>
			<br/>
		</form>

		<?php
			/*if (isset($_COOKIE['ZbotDashboard_DisplayMode']) && $_COOKIE['ZbotDashboard_DisplayMode'] != 'none') {
				?>
				<div align="center" id="DiscordDisplay">
					<! - - TODO ! - - >
				</div>
				<?php
			}*/
			?>
		

		<div id="Settings">
			<! - - TODO insérer image - - >
			<span onclick="document.location.href = 'settings/?lang=fr';">Paramètres</span>
		</div>
	</div>