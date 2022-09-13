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
	'ALLOW_SITESPLAT_MINECRAFTAVATARMCAPI_AVATAR_DRIVER_MINECRAFTMCAPI'	=> 'Enable Minecraft avatars via MCAPI API',
	'AVATAR_MCAPI_ON_REGISTRATION'										=> 'Enable Minecraft avatars via MCAPI API on registration',
	'AVATAR_MCAPI_FORCE_OPTION'											=> 'Force MCAPI option',
	'AVATAR_MCAPI_FORCE_OPTION_EXPLAIN'									=> 'Force one option globally. This will force the option on registration page as well as the forum. Select blank option to disable this feature.',

	'SITESPLAT_MINECRAFTAVATARMCAPI_MINECRAFTMCAPI_TITLE'	=> 'Minecraft via MCAPI API',
	'SITESPLAT_MINECRAFTAVATARMCAPI_MINECRAFTMCAPI_EXPLAIN'	=> '',

	'MCAPI_AVATAR_NAME'				=> 'Minecraft Username',
	'MCAPI_OPTIONS'					=> 'Type',
	'AVATAR_MCAPI_NAME_EXPLAIN'		=> 'Enter you Minecraft username',
	'AVATAR_MCAPI_OPTIONS_EXPLAIN'	=> 'Select the type of avatar',

	'MCAPI_OPTION_AVATAR'			=> 'Avatar',
	'MCAPI_OPTION_SKIN'				=> 'Body',
	'MCAPI_OPTION_AVATAR_HELM'		=> 'Avatar with helm',
	'MCAPI_OPTION_SKIN_HELM'		=> 'Body with helm',
));
