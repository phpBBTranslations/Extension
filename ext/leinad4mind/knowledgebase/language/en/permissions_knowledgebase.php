<?php

/**
 *
 * Knowledge Base Special Edition extension for the phpBB Forum Software package
 *
 * @copyright (c) 2017, kinerity, https://www.layer-3.org
 * @copyright (c) 2017, Leinad4Mind, https://leinad4mind.top/forum
 * @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACL_CAT_KNOWLEDGEBASE'	=> 'Knowledge Base',

	'ACL_U_KB_READ'			=> 'Can view Knowledge Base',
	'ACL_U_KB_POST'			=> 'Can create new articles',
	'ACL_U_KB_EDIT'			=> 'Can edit own articles',
	'ACL_U_KB_DELETE'		=> 'Can delete own articles',
	'ACL_U_KB_NOAPPROVE'	=> 'Can post articles without approval',

	'ACL_M_KB_EDIT'			=> 'Can edit articles',
	'ACL_M_KB_DELETE'		=> 'Can delete articles',
	'ACL_M_KB_APPROVE'		=> 'Can approve articles<br /><em>This permission includes disapproving and denying!</em>',
	'ACL_M_KB_CHGPOSTER'	=> 'Can change article author',

	'ACL_A_KB_MANAGE'		=> 'Can manage Knowledge Base',
));
