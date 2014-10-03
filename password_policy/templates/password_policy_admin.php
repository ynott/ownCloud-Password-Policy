<form id="password_policy" class="section">
	<h2><?php p($_['msg']); ?></h2>
	<ul>
		<li>Minimum Password Length <input type="number" id="password_policy_min_length" value="<?php p($_['minlength']); ?>"/></li>
		<li><input type="checkbox" id="password_policy_mixed_case" <?php p($_['mixedcase']); ?> /> Require Mixed Case</li>
		<li><input type="checkbox" id="password_policy_numbers" <?php p($_['numbers']); ?>  /> Require Numbers</li>
		<li><input type="checkbox" id="password_policy_special_characters" <?php p($_['specialcharacters']); ?> /> Require Special Characters</li>
		<li>Special Characters List <input style="width: 300px;" type="text" id="password_policy_special_chars_list" value="<?php p($_['specialcharslist']); ?>"/></li>
	</ul>
	<br/>
	<input id="save_password_policy" type="submit" value="Save"><span id="save_password_policy_status"></span>
</form>