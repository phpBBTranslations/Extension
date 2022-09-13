<?php
/**
*
* Steam
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
	'AUTH_PROVIDER_OAUTH_SERVICE_STEAM'	=> 'Steam',
    
	'STEAM_OPTIONS'		        => 'Steam options',
	'STEAM_OPTIONS_CHECKBOXES'  => 'Choose which options to display in the signature banner displayed in topics',
	'STEAM_OPTIONS_TEXT_BIO'	=> 'Briefly describe your Steam profile or pheraps something catchy about recruiting players? ;)',
	'STEAM_OPTIONS_TEXT_BIO_HOL'=> 'Player Bio or Slogan...',
	// UCP preference
	'STEAM_IN_TOPIC_PROFILE'	=> 'Show Steam data in your topic profile',
	// signature
	
	'STEAM_SIG_ENABLE'		    => 'Enable steam banner',
	'STEAM_SIG_USERNAME'	    => 'Enable username in banner',
	'STEAM_SIG_AVATAR'		    => 'Enable avatar in banner',
	'STEAM_SIG_LVL'			    => 'Enable level in banner',
 	'STEAM_SIG_RPG'			    => 'Enable recently played games in banner',
    'STEAM_SIG_DESC'		    => 'Enable player summary in banner',
	'STEAM_SIG_LIGHT'		    => 'Use light color scheme banner',
	
	// viewtopic
	'STEAM_STATUS'				=> 'Steam status',
	'STEAM_USERNAME'			=> 'Steam username',
	'STEAM_AVATAR'				=> 'Steam avatar',
	'ON_STEAM'				    => 'On Steam',

	// memberlist
	'STEAM_BADGES'		    	=> 'Steam badges',
	'STEAM_PLAYER_LEVEL'		=> 'Steam level',
	'STEAM_PLAYER_NAME'		    => 'Steam name',
	
	'STEAM_PLAYER_GAMES'        => 'Steam games',
	'STEAM_PLAYER_RECENT_GAMES'	=> 'Steam recently played',
	'STEAM_PLAYER_STATUS'		=> 'Steam status',
	
	'STEAM_PLAYER_AVATAR'		=> 'Steam Avatar',
	
	'STEAM_MINUTES'		        => 'minutes',
	'STEAM_GAMES_OWNED'		    => 'Show all owned games',
	
	// player state
	'STEAM_OFFLINE'	        	=> 'Offline',
	'STEAM_ONLINE'				=> 'Online',
	'STEAM_BUSY'				=> 'Busy',
	'STEAM_AWAY'				=> 'Away',
	'STEAM_SNOOZE'				=> 'Snooze',
	'STEAM_LFT'					=> 'Looking to trade',
	'STEAM_LTP'					=> 'Looking to play',
));
