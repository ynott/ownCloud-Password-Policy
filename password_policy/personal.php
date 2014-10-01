<?php
\OCP\Util::addScript('password_policy', 'password_policy_user');
$tpl = new OCP\Template('password_policy', 'password_policy_user');

$minlength = OC_Password_Policy::getMinLength();

if(OC_Password_Policy::getMixedCase())
{
	$tpl->assign('mixedcase',"Must contain UPPER and lower case characters");
}

if(OC_Password_Policy::getNumbers())
{
	$tpl->assign('numbers',"Must contain numbers");
}

if(OC_Password_Policy::getSpecialChars())
{
	$tpl->assign('specialcharlist',"Must contain special characters: ".OC_Password_Policy::getSpecialCharsList());
}

$tpl->assign('minlength', $minlength);
$n=0;
$limit=1000; //limit this to 1000 attempts to generate a compliant password
$examplepass = genpass();
while(!OC_Password_Policy::testPassword($examplepass) && $n < $limit)
{
	$examplepass = genpass($minlength);
	$n++;
}

$tpl->assign('examplepass',$examplepass);


return $tpl->fetchPage();

function genpass($minlength)
{
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'.OC_Password_Policy::getSpecialCharsList();
	$count = mb_strlen($chars);
	
	for ($i = 0, $result = ''; $i < $minlength; $i++) {
	    $index = rand(0, $count - 1);
	    $result .= mb_substr($chars, $index, 1);
	}
	
	return $result;
}