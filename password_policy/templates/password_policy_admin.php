<form class="password_policy">
<div style="margin: 5px;padding: 5px; background-color: #eee;border: thin solid #ccc;">
<h2><b><?php p($_['msg']); ?></b></h2>
<ul>
	<li>Minimum Password Length: <input type="number" id="password_policy_min_length" value="<?php p($_['minlength']); ?>"/></li>
	<li>Require Mixed Case: <input type="checkbox" id="password_policy_mixed_case" <?php p($_['mixedcase']); ?>/></li>
	<li>Require Numbers: <input type="checkbox" id="password_policy_numbers" <?php p($_['numbers']); ?>/></li>
	<li>Require Special Characters: <input type="checkbox" id="password_policy_special_characters" <?php p($_['specialcharacters']); ?> /></li>
	<li>Special Characters List: <input style="width: 300px;" type="text" id="password_policy_special_chars_list" value="<?php p($_['specialcharslist']); ?>"/></li>
</ul>
<br/>
<input id="save_password_policy" type="submit" value="Save"><span id="save_password_policy_status"></span>
</div>
</form>