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
	'BOUNTY'			=> 'Bounty for the best answer',
	'BOUNTY_EXPLAIN'	=> 'You can draw attention to your question by placing a "bounty" (extra points) on it. A bounty will be taken from your current points amount and given to the user who posted the best answer as a reward. A bounty is paid up front and is non-refundable nor editable once this topic is created.<br /> Minimum points for a bounty: <span class="badge badge-default">%d</span>. Your points: <span class="badge badge-default">%d</span>.',
	'POINTS'			=> 'points',
	'POINTS_NOT_ENOUGH'	=> 'You don\'t have enough points to place the bounty.'
));
