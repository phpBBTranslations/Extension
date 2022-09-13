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
	'EXPORT_EMAILS'									=> 'Export e-mails',
	'EXPORT_EMAILS_FORMAT'							=> 'Format',
	'EXPORT_EMAILS_ONLY_ALLOWED_MASS_EMAIL'	        => 'Only users who allowed mass mails',
	'EXPORT_EMAILS_SEPARATOR'						=> 'Separator',
	'EXPORT_EMAILS_SEPARATOR_EXPLAIN'				=> 'Default is break line. <br /> For example you can enter a comma "&#44;"',
    'EXPORT_EMAILS_SOURCE'							=> 'Source table',
	'EXPORT_EMAILS_USERS'							=> 'Registered users',
	'EXPORT_EMAILS_SUBSCRIBERS'						=> 'Subscribers',
	'EXPORT_EMAILS_GROUP_ID'						=> 'Group ID',
	
	'EXPORT_EMAIL_TITLE_EXPLAIN'				    => 'Easily export emails from the forum users and also subscribers',
    'EXPORT_EMAILS_SOURCE_EXPLAIN'					=> 'Select the source of the group DB table to export<br /> For example, registered user or the external subscribers table',
	'EXPORT_EMAILS_GROUP_EXPLAIN'					=> 'Enter the group ID of the user group you would like to export emails from<br /> For example the Admin group ID is "5"',
	'EXPORT_EMAILS_MASS_EXPLAIN'					=> 'Export the users who allowed board mass emails',
	'EXPORT_EMAILS_FORMAT_EXPLAIN'					=> 'Select file format',
	
));
