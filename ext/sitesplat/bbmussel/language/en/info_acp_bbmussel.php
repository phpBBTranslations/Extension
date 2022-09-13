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
	'ACP_BBMUSSEL_TITLE'	=> 'BBMussel',
	'ACP_TOTAL_BLOCKED'		=> array(
		0	=> 'BBMussel didn\'t block any file, yet. This is good news!',
		1	=> 'BBMussel already blocked <strong>1</strong> malicious file.',
		2	=> 'BBMussel already blocked <strong>%d</strong> malicious files.',
	),
    'ACP_BBMUSSEL_INFO'	        => 'Visit the official Anti virus engine page for more information: <a href="https://github.com/phpMussel/phpMussel" target="_blank">phpMussel</a>',
	'BBMUSSEL_SETTING_SAVED'	=> 'BBMussel settings have been saved.',

	'BBMUSSEL_ADMINISTER'					=> 'Administer phpMussel',
	'BBMUSSEL_ADMINISTER_EXPLAIN'			=> 'You can administer phpMussel itself if you wish. Note, that BBmussel already sets everything important by default. This administration is only for advanced users. Here you will also be able to update virus signatures.',
	'BBMUSSEL_VT_PUBLIC_API_KEY'			=> 'VirusTotal public API key',
	'BBMUSSEL_VT_PUBLIC_API_KEY_EXPLAIN'	=> 'Optionally, we are able to scan files using the Virus Total API as a way to provide a greatly enhanced level of protection against viruses, trojans, malware and other threats. You can get your API key just by registering at <a target="blank" href="https://www.virustotal.com/#/join-us">virustotal.com</a>.',
	'BBMUSSEL_GOOGLE_API_KEY'				=> 'Google Safe Browsing API key',
	'BBMUSSEL_GOOGLE_API_KEY_EXPLAIN'		=> 'Optionally, we are able to lookup the Google Safe Browsing API for URLs included in the attachments. To get your API key, follow <a target="blank" href="https://developers.google.com/safe-browsing/v4/get-started">the official instructions</a>.',
));
