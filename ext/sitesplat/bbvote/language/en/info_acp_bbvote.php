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
	'ACP_BBVOTE_TITLE'							=> 'BBvote',
	'ACP_BBVOTE_SETTINGS'						=> 'BBvote Settings',
	'ACP_BBVOTE_SETTINGS_EXPLAIN'				=> 'Welcome to BBvote! This is the settings page. You can fine tune the behavior to your needs at any time. <br /> Don\'t forget to set the <strong>3 main permissions</strong> for BBvote or things will NOT work as expected at your initial installation as some permissions are set to be disabled by default.<br /><strong>Group permissions</strong> (who can do what), <strong>Group forum permission</strong> (who can use BBvote system) and finally <strong>General forum settings</strong> enable/disable by forum (enable BBvote on X forum)',
	'SITESPLAT_BBVOTE_DOWNVOTE_MIN_POINTS'		=> 'Minimum points to downvote',
	'SITESPLAT_BBVOTE_DOWNVOTE_MIN_POINTS_EXPL'	=> 'Select the minimum reputation points the user should already have in order to allow the user to downvote a post.<br />This is helpful to filter out some users who might just downvote a post only for malicious intentions.',
	
	'SITESPLAT_BBVOTE_UPVOTE_MIN_POINTS'		=> 'Minimum points to upvote',
	'SITESPLAT_BBVOTE_UPVOTE_MIN_POINTS_EXPL'	=> 'Select the minimum reputation points the user should already have in order to allow the user to upvote a post.',
	
	'SITESPLAT_BBVOTE_POINTS_AWARDED'			=> 'Number of points to be awarded for post marked as best answer',
	'SITESPLAT_BBVOTE_POINTS_AWARDED_EXPL'		=> 'Set the number of points to be awarded for posts marked as best answer',
	
	'SITESPLAT_BBVOTE_UP_POINTS_AWARDED'		=> 'Number of points to be awarded for upvote',
	'SITESPLAT_BBVOTE_UP_POINTS_AWARDED_EXPL'	=> 'Awards x amount of points for the received upvote',
	
	'SITESPLAT_BBVOTE_DOWN_POINTS_AWARDED'		=> 'Number of points to be removed for downvote',
	'SITESPLAT_BBVOTE_DOWN_POINTS_AWARDED_EXPL'	=> 'Removes x amount of points for the received downvote',
	
	'SITESPLAT_BBVOTE_REMOVE_VOTE'				=> 'Allow users to remove already casted vote',
	'SITESPLAT_BBVOTE_POINTS_IN_VIEWTOPIC'		=> 'Display user points in viewtopic mini-profile',
	'SITESPLAT_BBVOTE_POINTS_IN_MEMBERLIST'		=> 'Display user points and charts in user profile',
	'SITESPLAT_BBVOTE_BOUNTY_ALLOWED'			=> 'Allow posters to set bounty for the best answer',
	'SITESPLAT_BBVOTE_BOUNTY_ALLOWED_EXPL'		=> 'Allow posters to set a topic bounty for higher chances of getting other users attentions for a possible best answer',
	
	'SITESPLAT_BBVOTE_BOUNTY_MIN'				=> 'Minimum points to be placed as a bounty',
	
	'SITESPLAT_BBVOTE_BOUNTY_VIEWFORUM'			=> 'Display bounty label in the topic list of x forum',
	'SITESPLAT_BBVOTE_BOUNTY_VIEWFORUM_EXPL'	=> 'This will enable or disable the bounty label in the topic list of x forum',
	
	'SITESPLAT_BBVOTE_CLONE_BEST_ANSWER'		=> 'Display the best answer below the first post',
	'SITESPLAT_BBVOTE_CLONE_BEST_ANSWER_EXPL'	=> 'This displays the best answer below the first post. useful for new readers who just what to see what was the recommended best answer right away without reading the whole thread.',
	
	'SITESPLAT_BBVOTE_CLONE_VOTE_BUTTONS'		=> 'Display voting buttons in cloned best answer',
	'SITESPLAT_BBVOTE_CLONE_VOTE_BUTTONS_EXPL'	=> 'Enable or disable the default voting buttons in the cloned best answer post',
	
	'SITESPLAT_BBVOTE_AJAX_INTERVAL'			=> 'Ajax refresh votes in seconds',
	'SITESPLAT_BBVOTE_AJAX_INTERVAL_EXPL'		=> 'This allow almost real time update on up/down-votes, so the user can see the interactions while it happens',
	
	'SITESPLAT_BBVOTE_NEGATIVE_NOTIFICATION'	=> 'Number of negative points to trigger moderator notification',
	'SITESPLAT_BBVOTE_NEGATIVE_NOTIFICATION_EXPL'   => 'This threshold will trigger a moderator notification telling them to check the post that received a set amount of downvotes.',
	
	'SITESPLAT_BBVOTE_NEGATIVE_OPACITY_LIMIT'	=> 'Number of negative points to decrease the opacity of the post',
	'SITESPLAT_BBVOTE_NEGATIVE_OPACITY_LIMIT_EXPL'	=> 'This will make a "ghost" post looking as it received too many downvotes and perhaps is not even worth for the users to pay attention to.',
        'SITESPLAT_BBVOTE_AUTO_BEST_ANSWER_MIN_UPVOTES'			=> 'Minimum amount of upvotes to automatically mark post as best answer',
	'SITESPLAT_BBVOTE_AUTO_BEST_ANSWER_MIN_UPVOTES_EXPL'	=> 'Set minimum number of upvotes a post should receive in order to be automatically set as the best answer. Set to 0 to disable this feature.',
	
	'ACP_BBVOTE_SETTING_SAVED'					=> 'BBvote settings has been saved.',

	'ENABLE_VOTING_SYSTEM'			=> 'Enable BBvote voting system',
	'ENABLE_VOTING_SYSTEM_EXPLAIN'	=> 'This will enable BBvote on this forum',

	// logs
	'ACP_VOTE_LOGS'					=> 'BBvote log',
	'ACP_VOTE_LOGS_EXPLAIN'			=> 'This lists all vote actions carried out by your users.',
	'LOG_VOTE_REMOVED'				=> '<strong>Removed their vote for post</strong> %s.',
	'LOG_VOTE_CHANGED_DOWN'			=> '<strong>Changed their vote to up for post</strong> %s.',
	'LOG_VOTE_CHANGED_DOWN_MARKED'	=> '<strong>Changed their vote to up for post</strong> %s. The post was also marked as best answer.',
	'LOG_VOTE_CHANGED_UP'			=> '<strong>Changed their vote to down for post</strong> %s.',
	'LOG_VOTE_DOWN'					=> '<strong>Voted down for post</strong> %s.',
	'LOG_VOTE_UP'					=> '<strong>Voted up for post</strong> %s.',
	'LOG_VOTE_UP_MARKED'			=> '<strong>Voted up for post</strong> %s. The post was also marked as best answer.',
	'LOG_CLEAR_VOTE'                => '<strong>Cleared BBvote log</strong>',
));
