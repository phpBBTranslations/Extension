<?php
/**
*
* BBMussel. An extension for the phpBB Forum Software package.
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBMUSSEL_ERROR_NO_VAULT'		=> '[BBMussel] Vault directory not correctly set. Please, contact the admin.',
	'BBMUSSEL_ERROR_NO_FUNCTIONS'	=> '[BBMussel] Functions file missing. Please, contact the admin.',
	'BBMUSSEL_ERROR_NO_CONFIG'		=> '[BBMussel] Configuration handler missing. Please, contact the admin.',
	'BBMUSSEL_ERROR_NO_LANG'		=> '[BBMussel] Language undefined or incorrectly defined. Please, contact the admin.',
	'BBMUSSEL_ERROR_ALREADY_ACTIVE'	=> '[BBMussel] Instance already active. Please, contact the admin.',

	'BBMUSSEL_ERROR'		=> '[BBMussel] Malicious file %s<br><br><a href="%s">Back to previous page</a>',
	'BBMUSSEL_ERROR_AJAX'	=> '[BBMussel] Malicious file %s',

	'BBMUSSEL_NOTIFICATION'	=> 'The user "%s" tried to upload malicious file/s. Click on this notification to see what page they tried to upload the file/s from.',
));
