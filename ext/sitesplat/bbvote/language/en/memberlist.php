<?php
/**
 *
 * @package BBvote
 * @copyright (c) 2019 SiteSplat All rights reserved
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
	'MEMBER_POINTS'				=> 'Reputation Points',
	'BBVOTE_TOP_POSTS'			=> 'Top 5 most voted posts',
	'TOTAL_BEST_ANSWERS_GIVEN'	=> 'Best answers in total: %d.',
	'TOTAL_UPVOTES_RECEIVED'	=> 'Upvotes received in total: %d.',
));
