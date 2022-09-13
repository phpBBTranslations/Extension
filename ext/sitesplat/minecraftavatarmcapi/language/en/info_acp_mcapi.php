<?php
/**
*
* Minecraft Avatar Extension - mcapi.net API
*
* @copyright (c) 2015 SiteSplat <info@sitesplat.com> All rights reserved
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
	'ACP_MCAPI'					=> 'MCAPI Avatars',
	'SS_HELPER_NOTY'	        => 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'MCAPI_NOTICE'	            => '<div class="phpinfo"><p>The settings for this extension are in <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
));
