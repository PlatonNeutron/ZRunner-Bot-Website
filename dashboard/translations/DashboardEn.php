	<div id="Dashboard">
		<div id="DashboardMain">
			<div id="ServerName" align="center">
				SERVER NAME
			</div>

		<form id="DashboardFullPart" action="" method="post">
			<div id="General">
				<div class="Subtitles">GENERAL</div><br/><br/>
				<span class="OptionDescription">PREFIX</span> <span class="Description">(THE SYMBOL BEFORE A COMMAND)</span><br/>
				<input type="text" name="prefix" placeholder="5 chars max !" value="" maxlength="5"/>
				<br/><br/>
				<span class="OptionDescription">LANG</span> <span class="Description">(LANG SPOKEN BY THE BOT)</span><br/>
				<span style="padding-left: 15px;"></span><img src="<?php echo $assets_path; ?>/Fr_DashboardIcon.png" id="IconSelected" class="Languages" width="10%"/> <span style="color: white; font-size: 2em;">-</span> <img src="<?php echo $assets_path; ?>/En_DashboardIcon.png" class="Languages" width="10%"/>
				<br/><br/>
				<span class="OptionDescription">DESCRIPTION</span> <span class="Description">(DEFAULT TEXT FOR PARTNERSHIPS)</span><br/>
				<textarea name="ServerDescription" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">WELCOME MESSAGE</span> <span class="Description">(DISPLAYED WHEN SOMEONE JOINS THE SERVER)</span> <span onclick="alert('For this message, you can use some variables :\n - {user} : Pings the user\n - {server} : Displays server name\n - {owner} : Displays server owner name\n - {member_count} : Displays actual members count\n - {type}  : Returns \'member\' or \'bot\'');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<textarea name="WelcomeMessage" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">LEAVE MESSAGE</span> <span class="Description">(DISPLAYED WHEN SOMEONE LEAVES THE SERVER)</span> <span onclick="alert('For this message, you can use some variables :\n - {user} : Pings the user\n - {server} : Displays server name\n - {owner} : Displays server owner name\n - {member_count} : Displays actual members count\n - {type}  : Returns \'member\' or \'bot\'');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<textarea name="LeaveMessage" maxlength="2000"></textarea>
				<br/><br/>
				<span class="OptionDescription">WELCOME/LEAVE MESSAGES CHANNEL</span><br/>
				<input type="text" name="WelcomeAndLeaveChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">NEW USERS ROLE</span> <span onclick="alert('Role for new users ; it allows to verify that the user is not a robot.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="NewUsersRoles" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">MUTED ROLE <span onclick="alert('Role that disallows user with this role to write.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span></span><br/>
				<input type="text" name="MutedRole" placeholder="" value=""/>
				<br/><br/>
				<br/><br/><br/>
			</div>

			<div id="ModerationRoles">
				<div class="Subtitles">MODERATION ROLE</div><br/><br/>
				<span class="OptionDescription">BAN</span> <span onclick="alert('Role authorising the use of the \'ban\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="BanRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">KICK</span> <span onclick="alert('Role authorising the use of the \'kick\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="KickRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">MUTE</span> <span onclick="alert('Role authorising the use of the \'mute\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="MuteRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">WARN</span> <span onclick="alert('Role authorising the use of the \'warn\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="WarnRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">SLOWMODE</span> <span onclick="alert('Role authorising the use of the \'slowmode\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="SlowmodeRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">CLEAR</span> <span onclick="alert('Role authorising the use of the \'clear\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="ClearRole" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">SAY</span> <span onclick="alert('Role authorising the use of the \'say\' command. Combine multiple roles by separating with \';\'.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
				<input type="text" name="SayRole" placeholder="" value=""/>
				<br/><br/>
			</div>

			<div id="MoreSettings">
				<div class="Subtitles">
					Much more settings !
				</div><br/>
				<div id="MoreSettings_Content">
					<table style="text-align: center;">
						<tr>
							<td>
								<span class="OptionDescription">ENABLE XP</span> <span onclick="alert('Zbot purposes XP use.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableXP" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableXP" width="20%"/></span>
							</td>
							<td>
								<span class="OptionDescription">FUN COMMANDS</span> <span onclick="alert('Zbot purposes fun commands use.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableFun" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableFun" width="20%"/></span>
							</td>
						</tr>
						<tr>
							<td>
								<span class="OptionDescription">HELP IN DM</span> <span onclick="alert('Sends the !help result message in DM.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableHelpInDM" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableHelpInDM" width="20%" class="MoreSettings_Selected"/></span>
							</td>
							<td>
								<span class="OptionDescription">ANTI CAPS-LOCK</span> <span onclick="alert('Zbot auto-warns users using caps lock.');"><img src="<?php echo $assets_path; ?>/Help.png" width="20"/></span><br/>
								<span class="MoreSettings_OptionValue"><img src="<?php echo $assets_path; ?>/greencheck.png" class="EnableAntiCapsLock" class="MoreSettings_Selected" width="20%"/> <span style="color: white; font-size: 2em;">/</span> <img src="<?php echo $assets_path; ?>/redcheck.png" class="EnableAntiCapsLock" width="20%"/></span>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div id="Divers">
				<div class="Subtitles">OTHER</div><br/><br/>
				<span class="OptionDescription">MODERATION LOGS CHANNEL</span><br/>
				<input type="text" name="ModerationLogsChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">MEMBERCOUNTER CHANNEL</span><br/>
				<input type="text" name="MembercounterChannel" placeholder="" value=""/>
				<br/><br/>
				<span class="OptionDescription">ANTI-RAID PROTECTION</span> <span class="Description">(VOIR DOCUMENTATION)</span> <span onclick="alert('0 (None): no filter\n1 (Smooth): kick members with invitations in their nickname\n2 (Careful): kick accounts created less than 1min before\n3 (High): ban members with invitations in their nickname, and kick accounts created less than 5min before\n4 ((╯°□°）╯︵ ┻━┻): ban members created less than 3min before, and kick those created less than 10min before');"><br/>
				<div style="color: white; font-size: 2em;" align="center"><span style="color: #6ae268;" id="SelctedAntiRaidLevel">0</span> - <span style="color: #fdff56;">1</span> - <span style="color: #f2a241;">2</span> - <span style="color: #e86c48;">3</span> - <span style="color: #d52b2b;">4</span></div>
				<br/><br/>
				<span class="OptionDescription">POLL CHANNEL(S)</span><br/>
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
			<span onclick="document.location.href = 'settings/?lang=fr';">Settings</span>
		</div>
	</div>