<form id="password_policy" class="section">
	<h2><?php p($l->t('Password Policy')); ?></h2>
	<p>The following password restrictions are currently in place:</p>
	<p>All passwords are required to be at least <?php p($_['minlength']); ?> characters in length and;</p>
	<ul style="list-style: circle; margin-left: 20px;">
		<?php if(OC_Password_Policy::getMixedCase()){ ?><li> <?php
		p($_['mixedcase']);
		?></li><?php
		}?>
		<?php if(OC_Password_Policy::getNumbers()){ ?><li> <?php
		p($_['numbers']);
		?></li><?php
		}?>
		
		<?php if(OC_Password_Policy::getSpecialChars()){ ?><li> <?php
		p($_['specialcharlist']);
		?></li><?php
		}?>
		
	</ul>
	<p>
		<br/>
		An example of a compliant password would be: <?php p($_['examplepass']); ?>
	</p>
</form>