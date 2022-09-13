<?php
/**
 *
 * BBprospective. An extension for the phpBB Forum Software package.
 *
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
	'ACP_BBPROSPECTIVE_TITLE'			=> 'BBprospective',
	'ACP_BBPROSPECTIVE_TITLE_EXPLAIN'	=> 'BBprospective is an extension that uses Perspective API (By Google) that makes it easier to host better conversations. The API uses machine learning models to score the perceived impact a comment might have on posts.<br>Check out the permission for Admin/Moderators bypass and also BBchat (If installed) setting.<br/>Note: Posts that are submitted by users and have a toxicity level superior to the settings below, will be automatically sent to the moderator queue for review.<br /> BBprospective supports ENGLISH language only at the moment!',
	'ACP_BBPROSPECTIVE_SETTING_SAVED'	=> 'BBprospective settings has been saved.',

	'API_KEY'						=> 'API Key',
	'API_KEY_EXPLAIN'				=> 'Your API key to access Google Application. You can create an application and issue a API key from: <a href="https://console.developers.google.com" target="_blank">Google API console</a> and generate the key. You should be able to do something along this example: <a href="https://gyazo.com/02a5e8e6f482a63dd2b8ab98857fe5b8.png" target="_blank">Screenshot</a>. <br/> Perspective additional instructions: <a href="https://github.com/conversationai/perspectiveapi/blob/master/quickstart.md">Perspective API Quickstart</a>.',
	'UPDATE_INTERVAL'				=> 'Update Timeout',
	'UPDATE_INTERVAL_EXPLAIN'		=> 'The timeout for user typing until API is requested in milliseconds. Lower values mean more frequent requests to your and Google API server, but faster response to user\'s input.',
	'CACHE_LIFETIME'				=> 'Local Cache Lifetime (hours)',
	'CACHE_LIFETIME_EXPLAIN'		=> 'The local cache stores the response from Google servers in the local database to avoid duplicate API requests from the same message. Larger cache timeout means the local table may grow bigger but there is more chance to hit the cache. Set to 0 to disable the local cache.',
	'MODERATION_TRESHOLD'			=> 'Moderation Threshold (percents)',
	'MODERATION_TRESHOLD_EXPLAIN'	=> 'If set, the posts detected to have higher values of this criterion will be automatically sent for moderation. Set to 0 to disable this feature.',
	'WARNING_TRESHOLD'				=> 'Warning Threshold (percents)',
	'WARNING_TRESHOLD_EXPLAIN'		=> 'If set, users will get a warning message when their message passes this threshold. Set to 0 not to show the warning message.',
	'SHOW_CORRECTION'				=> 'Show Correction Suggestions',
	'SHOW_CORRECTION_EXPLAIN'		=> 'If checked, the system can detect which parts of the message particularly are above warning threshold and suggest user to correct them before posting.',
	'TOXICITY_FORUMS'				=> 'Forums',
	'TOXICITY_FORUMS_EXPLAIN'		=> 'The check will be active only in selected forums.',

	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'BBPROSPECTIVE_NOTICE'	        => '<div class="phpinfo"><p>The settings for this extensions are under the extension tab. <strong style="display:none;">%1$s &#187; %2$s &#187; %3$s</strong></p></div>',
	
	// BBchat
	'SITESPLAT_BBPROSPECTIVE_BBCHATPUSHER_TOXICITY'			=> 'Toxicity to disable posting (BBprospective)',
	'SITESPLAT_BBPROSPECTIVE_BBCHATPUSHER_TOXICITY_EXPLAIN'	=> 'Messages with more than defined toxicity (1-99) won\'t be allowed to be submitted. Set to 0 to disable this check.<br />Admins and Moderators are excluded.',
));
