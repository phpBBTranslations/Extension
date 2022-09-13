<?php
/**
*
* @package phpBB Extension - Donation extension
* @copyright (c) 2016-2018 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'DONATE'									=> 'Donate',
	'DONATE_EXPLAIN'							=> 'Support us by making a donation.',
	'DONORLIST'									=> 'Donors',
	'DONORLIST_EXPLAIN'							=> 'View the donors list.',
	'MINIMUM_DONATION_MESSAGE'					=> 'The minimum donation amount is %s %s',
	'SELECT_METHOD'								=> 'Select donation method',
	'DONATION_TO'								=> 'Donation to',
	'AMOUNT'									=> 'Amount',
	'PAYPAL'									=> 'PayPal',
	'PAYPAL_TITLE'								=> 'PayPal Donation',
	'PAYPAL_DISABLED'							=> 'PayPal donations are currently disabled. Please check back later.',
	'IPN_DISABLED'								=> 'IPN disabled.',
	'PAYZA'										=> 'Payza',
	'PAYZA_TITLE'								=> 'Payza Donation',
	'PAYZA_DISABLED'							=> 'Payza donations are currently disabled. Please check back later.',
	'MONEYBOOKERS'								=> 'Moneybookers',
	'MONEYBOOKERS_TITLE'						=> 'Moneybookers Donation',
	'MONEYBOOKERS_DISABLED'						=> 'Moneybookers donations are currently disabled. Please check back later.',
	'WEBMONEY'									=> 'WebMoney',
	'WEBMONEY_TITLE'							=> 'WebMoney Donation',
	'WEBMONEY_DISABLED'							=> 'WebMoney donations are currently disabled. Please check back later.',
	'GOAL_TITLE'								=> 'Donation goal',
	'GOAL_RECEIVED'								=> 'Donations received',
	'GOAL'										=> 'Donation goal',
	'GOAL_UNTIL'								=> 'Donations until the goal is met',
	'GOAL_REACHED'								=> 'Donation goal is reached',
	'LAST_FIVE_DONATIONS'						=> 'Last 5 donations',
	'DONORS_LIST'								=> 'Donors',
	'DONORS_TOP_FIVE'							=> 'Top 5 donors',
	'DONATED'									=> 'donated',
	'VIA'										=> 'via',
	'ON'										=> 'on',
	'DONATION'									=> 'Donation',
	'DONATION_TITLE'							=> 'Donation Extension',
	'DONATION_LICENSE' 							=> 'License invalid',
	'DONATION_VERSION'							=> 'Version',
	'DONATION_LAST'								=> 'Last donation',
	'DONATION_PRIVATE'							=> '<em>Private</em>',
	'DONATION_ADD_CHAT'							=> '[i][b]%1$s[/b] donated %2$s%3$s,- [b]%4$s[/b][/i] %5$s',
	'DONATIONS'									=> 'Donations',
	'DONOR_USERNAME'							=> 'Username',
	'DONOR_AMOUNT'								=> 'Amount',
	'DONOR_BY'									=> 'by',
	'DONOR_METHOD'								=> 'Method',
	'DONOR_DATE'								=> 'Date',
	'DONOR_DATE_MM_DD_YY'						=> 'MM/DD/YY',
	'DONOR_DATE_HH_MM'							=> 'HH/MM',
	'DONOR_LAST_DATE'							=> 'Last donation date',
	'DONOR_TOTAL_INFO'							=> '%1$sx donated	in total %2$s%3$s',
	'DONOR_TIMES_DONATED'						=> 'Times donated',
	'DONOR_AMOUNT_TOTAL'						=> 'Total amount',
	'NO_DONORS'									=> 'There are no donors yet.',
	'NO_DONATIONS'								=> 'There are no donations yet.',
	'LIST_DONOR'								=> '1 Donor',
	'LIST_DONORS'								=> '%s Donors',
	'SUCCESS_TITLE'								=> 'Donation Successful',
	'CANCEL_TITLE'								=> 'Donation Cancelled',
	'DONATION_DISABLED'							=> 'Donations are currently disabled. Please check back later.',
	'DONORS_LIST_DISABLED'						=> 'No permission to see donorlist.',
	'NO_NON_MEMBERS_DONATIONS'					=> 'You have to be a registered user to donate',
	'NO_NON_MEMBERS_DONORS'						=> 'You have to be a registered user to see the donor list',
	'NOT_INSTALLED'								=> 'Donation extension is not installed.',
	'ADMIN_NOTIFICATION_PM_SUBJECT' 			=> 'You\'ve got a donation',
	'DONATION_NOTIFICATION'		 				=> 'Donation Notification',
	'DONATION_THANKS'							=> 'Thanks To Our Donators',
	'VIEWING_DONATE'							=> 'Viewing Donation page',
	'VIEWING_DONOR'								=> 'Viewing Donors page',
	'CONTINUE_ON_PAYPAL'						=> 'Continue on PayPal',
	'CONTINUE_ON_PAYZA'							=> 'Continue on Payza',
	'CONTINUE_ON_MONEYBOOKERS'					=> 'Continue on Moneybookers',
	'CONTINUE_ON_WEBMONEY'						=> 'Continue on Webmoney',
	'CONNECTING_ON_PAYPAL'						=> 'Connecting with PayPal',
	'DONATION_STEP_1'							=> '1',
	'DONATION_STEP_2'							=> '2',
	'DONATION_STEP_1_INNER'						=> 'Select a deposit amount',
	'DONATION_STEP_2_INNER_PAYPAL'				=> 'Continue securely on PayPal',
	'DONATION_STEP_2_INNER_PAYZA'				=> 'Continue securely on Payza',
	'DONATION_STEP_2_INNER_MONEYBOOKERS'		=> 'Continue securely on Moneybookers',
	'DONATION_STEP_2_INNER_WEBMONEY'			=> 'Continue securely on Webmoney',
	'DONATION_EXPIRY_DAYS'				=> [
		0 => 'Donation expiry today',
		1 => 'Donation expiry in <strong>%1$d</strong> day on',
		2 => 'Donation expiry in <strong>%1$d</strong> days on',
	],
	'DONATION_EXPIRY_DAYS_DONORLIST'	=> [
		0 => 'Donation expiry never',
		1 => 'Donation expiry in <strong>%1$d</strong> day',
		2 => 'Donation expiry in <strong>%1$d</strong> days',
	],
	'DONATE_COLLAPSE_TITLE'				=> [
		0 => 'Hide donation info',
		1 => 'Show donation info',
	],
	'DONATION_SEPARATOR_DECIMAL'				=> '.',
	'DONATION_SEPARATOR_THOUSANDS'				=> ',',
	'DONATION_CREDITS'							=> 'Donation Credits',
	'DONATION_CREDITS_USER'						=> 'Donation credits',
	'DONATION_CREDITS_USER_EXPLAIN'				=> 'Modify member donation credits.',
	'DONATION_CREDITS_SET'						=> 'The user’s credits have been updated.<br /><br />',
	'DONATION_CREDITS_EDIT_RETURN_INDEX'		=> '%1$sClick here to return to the index.%2$s',
	'DONATION_CREDITS_EDIT_RETURN_POST'			=> '%1$sClick here to return to the previous post.%2$s',
	'DONATION_CREDITS_USER_MODIFY'				=> 'Donation credits user modify',
	'DONATION_CREDITS_USER_MODIFY_EXPLAIN'		=> 'Here you can modify the member donation credits.<br>Set New amount or Add amount or Subtract amount.',
	'DONATION_CREDITS_MODIFY'					=> '[Modify]',
	'DONATION_EDIT_SET_AMOUNT'					=> 'New Amount',
	'DONATION_EDIT_ADD_AMOUNT'					=> 'Add Amount',
	'DONATION_EDIT_SUB_AMOUNT'					=> 'Subtract Amount',
	'DONATION_NUMBER_FORMAT_EXPLAIN'			=> 'Hint: Always enter values without the thousands separator and decimals with a point, i.e. 1000.50',
	//UCP
	'UCP_DONATION_TITLE'						=> 'Donations',
	'UCP_DONATION_EXPLAIN'						=> 'Your donations to this site',
	'UCP_DONATION_SEE'							=> 'See your donations',
	'UCP_DONATION_SEE_EXPLAIN'					=> 'Other members can see your donations.<br />Set to no will hide the mount and total amount.',
));
