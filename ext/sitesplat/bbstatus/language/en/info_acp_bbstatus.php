<?php
/**
*
* @package BBstatus
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
	'ACP_BBSTATUS'					=> 'BBstatus',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore does not exist!<br />Download the <a href="https://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'BBSTATUS_NOTICE'	            => '<div class="phpinfo"><p>The settings for this extensions are under: <strong>UCP &#187; Profile &#187; Edit profile</strong>. You can also change the user status on the fly from the main forum navigation bar.</p><p>NOTE: Check the permissions in: ACP &#187; Group Permissions &#187; (Select a Group) then hit "Advanced Permission *" &#187; Profile: "Can publish statuses" and "Can read statuses".</p></div>',
));

