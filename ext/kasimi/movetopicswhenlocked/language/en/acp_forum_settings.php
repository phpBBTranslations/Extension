<?php

/**
 *
 * @package phpBB Extension - Move Topics When Locked
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, [
	'MOVE_TOPICS_WHEN_LOCKED'					=> 'Move Topics When Locked',
	'MOVE_TOPICS'								=> 'Move locked topics automatically',

	'MOVE_TOPICS_SOLVED'						=> 'Move solved & locked topics automatically',
	'MOVE_TOPICS_SOLVED_EXTENSION'				=> '<a href="https://www.phpbb.com/customise/db/extension/topic_solved/">Topic Solved</a>',

	'MOVE_AUTO_LOCK'							=> 'Move auto-locked topics automatically',
	'MOVE_AUTO_LOCK_EXTENSION'					=> '<a href="https://www.phpbb.com/customise/db/extension/auto_lock_topics/">Auto-lock Topics</a>',

	'MOVE_EXTENSION_VERSION'					=> 'You need at least version <strong>%1$s</strong> of the <strong>%2$s</strong> extension.',
	'MOVE_EXTENSION_ENABLED'					=> 'The extension <strong>%s</strong> is enabled.',

	'MOVE_TOPICS_TO'							=> 'Move locked topics to',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS'			=> 'Apply these options to all sub-forums now',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS_EXPLAIN'	=> 'If set to “Yes”, the above preferences are applied to this forum and all sub-forums (and their sub-forums).',
]);
