		<input type="text" name="Name" id="Name" placeholder="  Nom*" required value="<?php echo $Name; ?>"/>

		<input type="mail" name="Mail" id="Mail" placeholder="  Adresse E-mail*" required value="<?php echo $Email; ?>"/>

		<textarea name="Message" id="Message" placeholder="  Message*" required value="<?php echo $Message; ?>"></textarea>

		<div id="RequiredFields">
			* Champs Obligatoires
		</div>

		<button type="submit" id="Submit"><img src="<?php echo $assets_path; ?>/sendbuttonfr.png"/></button>