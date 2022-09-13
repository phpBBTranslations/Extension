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
	'QUARANTINE_FAIL'		=> 'We were unable to create quarantine directory and set file permissions to it. Please, do it manually.<br>Create a new directory in &lt;root&gt;/files/unsafe and set CHMOD to 755 for it.',
	'CHANGE_PERMS_MANUALLY'	=> 'We were unable to set file permissions to phpMussel vault. Please, do it manually.<br>Set CHMOD to 755 for <samp>phpMussel/vault</samp> located in this extension\'s directory.',
));
