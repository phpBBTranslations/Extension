<?php declare(strict_types=1);

/**
 *
 * Guest Notification Emails. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Leinad4Mind, https://leinad4mind.top/forum
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'GUEST_NOTIFICATIONS'				=> 'I want to receive notifications for new replies in this topic.',
	'GUEST_EMAIL_USERNAME_MISMATCH'		=> 'The email address is already linked to a different guest.',
	'GUEST_UNSUBSCRIBE'					=> 'Unsubscribe',
	'GUEST_UNSUBSCRIBE_ALL'				=> 'Unsubscribe from <strong>all</strong> topics',
	'GUEST_UNSUBSCRIBE_EMPTY'			=> 'No active subscriptions found.',
	'GUEST_UNSUBSCRIBE_SUCCESS'			=> 'Successfully unsubscribed from topic %s',
	'GUEST_UNSUBSCRIBE_SUCCESS_ALL'		=> 'Successfully unsubscribed from all topics.',
	'GUEST_UNSUBSCRIBE_NOT_FOUND'		=> 'Subscription not found.',
]);
