<?php
/**
*
* Export emails and subscribers extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
*
*/

/**
* DO NOT CHANGE
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
	'ACP_EXPORT_EMAILS'			=> 'Export e-mails',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore does not exist!<br />Download the <a href="https://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'BBSSBERS_NOTICE'	            => '<div class="phpinfo"><p>The settings for this extension are under the Extensions tab.</p></div>',
));
