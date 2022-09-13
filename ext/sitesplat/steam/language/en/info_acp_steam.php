<?php
/**
*
* Steam
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
	'ACP_STEAM'				        => 'BBsteam',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'STEAM_NOTICE'	                => '<div class="phpinfo"><p><br />Register your API key from:<a href="https://steamcommunity.com/dev/apikey" target="_blank">https://steamcommunity.com/dev/apikey</a> <br />Then enter the same key code for both "Key" and "Secret" here: <strong>%1$s &#187; %2$s &#187; %3$s "oauth" Steam provider</strong>. <br />User option available under <strong>UCP &#187; Board preferences &#187; Edit Global settings: "Show Steam data in your topic profile"</strong> <br />Steam Signature option is available under <strong>UCP &#187; profile &#187; Edit Signature</strong>.<br />Also, user can link the Steam account directly via: <strong>User Control Panel	&#187; Profile &#187; Manage external account associations &#187; Steam.</strong></p></div>',
));

