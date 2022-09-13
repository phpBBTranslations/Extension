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
	'NOT_ENOUGH_POINTS'		=> 'You don\'t have enough points to vote.',
	'POST_DOESNT_EXIST'		=> 'Post doesn\'t exist.',
	'BBVOTE_NOT_ALLOWED'	=> 'Voting is not allowed in this forum',
	'ONLY_ONE_VOTE'			=> 'You can only cast one vote per post',
	'NO_SELF_POSTS'			=> 'You cannot vote on your posts',
	'NO_VOTE_DELETE'		=> 'You can\'t remove already casted vote', 
	'VOTE_CASTED'			=> 'Your vote has been casted.<br><br><a href="%s">Back to the post</a>',
));
