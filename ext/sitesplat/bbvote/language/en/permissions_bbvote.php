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
	'ACL_U_SITESPLAT_BBVOTE_BYPASS_MIN_POINTS'	=> 'Can bypass minimum down and up votes limits (BBvote)',
	'ACL_U_SITESPLAT_BBVOTE_BEST_ANSWER_SELF'	=> 'Can mark and unmark best answer in their topics (BBvote)',
	'ACL_U_SITESPLAT_BBVOTE_BEST_ANSWER'		=> 'Can mark and unmark best answer (BBvote)',
	'ACL_F_SITESPLAT_BBVOTE_VOTING_ALLOWED'		=> 'Can use BBvote voting system',
	'ACL_U_SITESPLAT_BBVOTE_VOTING'				=> 'Can use BBvote voting system',
));
