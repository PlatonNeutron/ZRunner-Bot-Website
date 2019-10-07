		<input type="text" name="Name" id="Name" placeholder="  Name*" required value="<?php echo $Name; ?>"/>

		<input type="mail" name="Mail" id="Mail" placeholder="  E-mail Adress*" required value="<?php echo $Email; ?>"/>

		<textarea name="Message" id="Message" placeholder="  Message*" required value="<?php echo $Message; ?>"></textarea>

		<div id="RequiredFields">
			* Required Fields
		</div>

		<button type="submit" id="Submit"><img src="<?php echo $assets_path; ?>/sendbuttonfr.png"/></button>