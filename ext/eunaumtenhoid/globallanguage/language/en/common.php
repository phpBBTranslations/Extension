<?php
/**
*
* global language extension for the phpBB Forum Software package.
*
* @copyright (c) 2018 eunaumtenhoid <https://github.com/phpBBTraducoes>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(


	'TYPE_UPLOAD' 			=> 'Upload Type',
	'SELECT_DESTINATION_UPLOAD' 			=> 'Upload Destination',
	'TOPIC_ICON' 			=> 'Project Status',
	'FORUM_INDEX'			=> 'Forum',
	
	
	// Groups
	'G_ADMINISTRATORS'      => 'Administrators',
    'G_BOTS'                => 'Bots',
    'G_GUESTS'              => 'Guests',
    'G_REGISTERED'          => 'Registered users',
    'G_REGISTERED_COPPA'    => 'Registered COPPA users',
    'G_GLOBAL_MODERATORS'   => 'Global moderators',
    'G_NEWLY_REGISTERED'    => 'Newly registered users', 
	
	
));
