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
	'NOTIFICATION_TYPE_UPVOTE'		=> 'Someone upvotes your post',
	'NOTIFICATION_TYPE_DOWNVOTE'	=> 'Someone downvotes your post',
	'NOTIFICATION_TYPE_BEST_ANSWER'	=> 'Someone marks your post as the best answer',
));
