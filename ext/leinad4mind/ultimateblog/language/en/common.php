<?php

/**
 *
 * Ultimate Blog. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Mr. Goldy / Leinad4Mind
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
// Merge the following language entries into the lang array

$lang = array_merge($lang, array(
	'BLOG'					=> 'Blog',
	'BLOG_ADD'				=> 'Add blog',
	'BLOG_ADDED'			=> 'Your blog has been successfully added',
	'BLOG_ARCHIVE'			=> 'Archive',
	'BLOG_ARCHIVE_COUNT'	=> array(
		1 => '%d archive',
		2 => '%d archives',
	),
	'BLOG_ARCHIVE_NO_BLOGS'	=> 'There are no blogs for this period',
	'BLOG_AUTHOR'			=> 'Author',
	'BLOG_BY'				=> 'By',
	'BLOG_BACK'				=> 'Back to the blog page',
	'BLOG_BACK_COMMENT'		=> 'Back to the blog comment',
	'BLOG_BLOG_COUNT'	=> array(
		1 => '%d blog',
		2 => '%d blogs',
	),
	'BLOG_CATS'				=> 'Blog Categories',
	'BLOG_CATS_COUNT'	=> array(
		1 => '%d category',
		2 => '%d categories',
	),
	'BLOG_CHOOSE_CAT'		=> 'Choose a category..',
	'BLOG_COMMENT'			=> 'Comment',
	'BLOG_COMMENTS'			=> 'Comments',
	'BLOG_COMMENTS_COUNT'	=> array(
		1 => '%d comment',
		2 => '%d comments',
	),
	'BLOG_COMMENT_DELETE'		=> 'Delete blog comment',
	'BLOG_COMMENT_DELETED'		=> 'The blog comment has been successfully deleted.',
	'BLOG_COMMENT_DEL_CONFIRM'	=> 'Are you sure you wish to delete this blog comment?',
	'BLOG_COMMENT_EDIT'			=> 'Edit blog comment',
	'BLOG_COMMENT_EDITED'		=> 'The blog comment has been successfully edited.',
	'BLOG_COMMENT_EMPTY'		=> 'The entered comment is too short.',
	'BLOG_COMMENT_NOT_EXIST' 	=> 'The requested blog comment does not exist..',
	'BLOG_COMMENT_REPORT'		=> 'Report blog comment',
	'BLOG_COMMENT_REPORTED'		=> 'This blog comment has been reported.',
	'BLOG_COMMENT_REPORT_VIEW'	=> 'Click to view report',
	'BLOG_COMMENT_VIEW'			=> 'View your blog comment',
	'BLOG_COMMENTS_FURTHER'		=> 'Further comments',
	'BLOG_COMMENTS_NONE'		=> 'No comments have been made for this blog thus far!',
	'BLOG_COMMENTS_DISABLED' 	=> 'have been disabled for this blog!',
	'BLOG_DELETE'				=> 'Delete blog',
	'BLOG_DELETED'				=> 'The blog has been successfully deleted',
	'BLOG_DELETE_CONFIRM'		=> 'Are you sure you wish to delete this blog?',
	'BLOG_DESCRIPTION'			=> 'Blog Description',
	'BLOG_DESCRIPTION_FIELD'	=> 'Enter your blog description here. It must be between and 10 and 160 characters.',
	'BLOG_EDIT'					=> 'Edit blog',
	'BLOG_EDITED'				=> 'The blog has been successfully edited',
	'BLOG_EDIT_COUNT'			=> array(
		1	=> 'This blog has been edited %1$s time in total', // singular
		2	=> 'This blog has been edited %1$s times in total', // plural
	),
	'BLOG_EDIT_LAST'	=> 'This blog was last edited by %1$s on %2$s', // 1 = user | 2 = date
	'BLOG_EDIT_LOCKED'	=> 'This blog has been locked from any further editing and you\'re not authorized to edit it anymore!',
	'BLOG_EDIT_REASON'	=> 'Reason for editing',
	'BLOG_FOR_CAT'		=> 'Blogs for category',
	'BLOG_IN'			=> 'in', // example: Posted by Someone “in” My Awesome Category “on” Dec 12th, 2015
	'BLOG_ON'			=> 'on', // See example above
	'BLOG_NEW'			=> 'New blog entry',
	'BLOG_NOT_EXIST'	=> 'The requested blog does not exist..',
	'BLOG_POSTED_BY'	=> 'Posted by',
	'BLOG_POSTED_ON'	=> 'Posted on',
	'BLOG_POSTS'		=> 'Blog Posts',
	'BLOG_RATE'			=> 'Rate this blog',
	'BLOG_RATE_NONE'	=> 'This blog hasn\'t been rated yet!',
	'BLOG_RATE_USERS'		=> array(
		1	=> 'Based on <span itemprop="ratingCount">%1$s</span> rating',
		2	=> 'Based on <span itemprop="ratingCount">%1$s</span> ratings',
	),
	'BLOG_RATED_OLD'			=> array(
		1	=> 'Thank you for rating this blog with %1$s star',
		2	=> 'Thank you for rating this blog with %1$s stars',
	),
	'BLOG_RATED_ALREADY_OLD'	=> array(
		1	=> 'You\'ve already rated this blog with %1$s star!',
		2	=> 'You\'ve already rated this blog with %1$s stars!',
	),
	'BLOG_RATED'			=> array(
		1	=> 'Thank you for rating this blog as good',
		2	=> 'Thank you for rating this blog as bad',
	),
	'BLOG_RATED_ALREADY'	=> array(
		1	=> 'You\'ve already rated this blog as good!',
		2	=> 'You\'ve already rated this blog as bad!',
	),
	'BLOG_RATING'				=> 'Blog rating',
	'AVG_BLOG_RATING'			=> 'Average Blog rating',
	'BLOG_RE'					=> 'Re',
	'BLOG_READ_FULL'			=> 'Read the full blog',
	'BLOG_RSS'					=> 'Blog RSS Feed',
	'BLOG_RSS_FEED_DISALBED'	=> 'The blog RSS feed has been disabled.',
	'BLOG_VIEW'					=> 'View your blog',

	'BLOG_JUMPTO_BLOG'			=> 'Jump to blog',
	'BLOG_JUMPTO_COMMENT'		=> 'Jump to comment',

	'BLOG_SEARCH'					=> 'Blog search',
	'BLOG_SEARCH_ALL'				=> 'Titles, contents and comments',
	'BLOG_SEARCH_BLOGS'				=> 'Titles and contents only',
	'BLOG_SEARCH_CATEGORIES'		=> 'Search in blog categories',
	'BLOG_SEARCH_CATEGORIES_EXPLAIN' => 'Select the category or categories you want to search in.',
	'BLOG_SEARCH_COMMENTS'			=> 'Comments only',
	'BLOG_SEARCH_EMPTY'				=> 'You have to at least fill in either keywords or author, you can not leave both empty.',
	'BLOG_SEARCH_RESULTS'			=> 'Blog search results',
	'BLOG_SEARCH_RESULTS_COUNT'		=> 'Blog search found %1$s matches',
	'BLOG_SEARCH_TITLE'				=> 'Blog title',
	'BLOG_SEARCH_TITLES'			=> 'Titles only',
	'BLOG_SEARCH_TOO_COMMON'		=> 'The entered search query is too short. Your keywords have to be at least four (4) characters long.',
	'BLOG_SEARCH_USER_POSTS'		=> '<strong>Search user\'s blog posts</strong>',
	'BLOG_SEARCH_USER_COMMENTS'		=> '<strong>Search user\'s blog comments</strong>',

	'BLOG_SUBSCRIBE_TO_ALL'		=> 'Subscribe all blogs',
	'BLOG_SUBSCRIBE_TO_BLOG'	=> 'Subscribe blog',
	'BLOG_SUBSCRIBE_TO_CAT'		=> 'Subscribe blog category',
	'BLOG_UNSUBSCRIBE_TO_ALL'	=> 'Unsubscribe all blogs',
	'BLOG_UNSUBSCRIBE_TO_BLOG'	=> 'Unsubscribe blog',
	'BLOG_UNSUBSCRIBE_TO_CAT'	=> 'Unsubscribe blog category',
	'BLOG_SUBSCRIBED_TO_ALL'	=> 'You have subscribed to be notified of any new blog posts.',
	'BLOG_SUBSCRIBED_TO_BLOG'	=> 'You have subscribed to be notified of new comments for this blog.',
	'BLOG_SUBSCRIBED_TO_CAT'	=> 'You have subscribed to be notified of new blog posts in this category.',
	'BLOG_UNSUBSCRIBED_TO_ALL'	=> 'You are no longer subscribed to be notified of any new blog posts.',
	'BLOG_UNSUBSCRIBED_TO_BLOG'	=> 'You are no longer subscribed to be notified of new comments for this blog.',
	'BLOG_UNSUBSCRIBED_TO_CAT'	=> 'You are no longer subscribed to be notified of new blogs in this category.',
	'BLOG_SUBSCRIBED_ALRDY_BLOG'	=> 'You are already subscribed to be notified of new comments for this blog.',
	'BLOG_SUBSCRIBED_ALRDY_CAT'		=> 'You are already subscribed to be notified of new blog posts in this category.',
	'BLOG_SUBSCRIBED_NOT_BLOG'		=> 'Unable to unsubscribe from this blog, as you are not subscribed in the first place.',
	'BLOG_SUBSCRIBED_NOT_CAT'		=> 'Unable to unsubscribe from this category, as you are not subscribed in the first place.',

	'AUTH_BLOG_ADD'			=> 'You are not authorized to add a new blog.',
	'AUTH_BLOG_COMMENT_ADD'	=> 'You are not authorized to add a comment to this blog.',
	'AUTH_BLOG_DELETE'		=> 'You are not authorized to delete this blog.',
	'AUTH_BLOG_EDIT'		=> 'You are not authorized to edit this blog.',
	'AUTH_BLOG_EDIT_ELSE'	=> 'You are not authorized to edit someone else\'s blog.',
	'AUTH_BLOG_VIEW'		=> 'You are not authorized to view a blog.',
	'AUTH_COMMENT_DELETE'	=> 'You are not authorized to delete a comment.',
	'AUTH_COMMENT_EDIT'		=> 'You are not authorized to edit a blog comment.',
	'AUTH_COMMENT_EDIT_ELSE' => 'You are not authorized to edit someone else\'s blog comment.',
	'AUTH_COMMENT_REPORT'	=> 'You are not authorized to report a blog comment.',

	'CAT_NO_BLOGS'		=> 'This category does not have any blogs yet',
	'CATEGORY'			=> 'Category',
	'CATEGORIES'		=> 'Categories',
	'CAT_INVALID'		=> 'You\'ve not selected a category in which this blog should be posted.',

	'ENABLE_COMMENTS'	=> 'Enable Comments',

	'LOCK_EDIT'			=> 'Lock editing',

	'LOG_BLOG_ADDED'	=> 'New blog entry: %1$s',
	'LOG_BLOG_EDITED'	=> 'Blog has been edited: %1$s',
	'LOG_BLOG_DELETED'	=> 'Blog has been deleted: %1$s',
	'LOG_COMMENT_EDITED'	=> 'Blog comment has been edited, comment id: %1$s',

	'NOTIFICATION_TYPE_BLOG_SUBSCRIPTION'	=> 'Someone creates a blog/comment in a category/blog to which you are subscribed',
	'NOTIFICATION_GROUP_BLOG_POSTING'		=> 'Blog Notifications',
	'NOTIFICATION_NEW_BLOG'					=> 'New blog entry: “%1$s”',
	'NOTIFICATION_NEW_COMMENT'				=> 'New comment for blog: “%1$s”',

	'PARSE_BBCODE'		=> 'Parse BBCode',
	'PARSE_SMILIES'		=> 'Parse Smilies',
	'PARSE_URLS'		=> 'Parse URL\'s',

	'VIEWONLINE_BLOG'				=> 'Reading blog: %1$s',
	'VIEWONLINE_BLOGS'				=> 'Reading blogs',
	'VIEWONLINE_BLOG_ARCHIVE'		=> 'Viewing blog archive: %1$s',
	'VIEWONLINE_BLOG_COMMENT_EDIT'	=> 'Editing a blog comment for: %1$s',
	'VIEWONLINE_BLOG_CATEGORIES'	=> 'Viewing blog categories',
	'VIEWONLINE_BLOG_CATEGORY'		=> 'Viewing blog category: %1$s',

	'ALL_CAT_NO_BLOGS'		=> 'There are no blogs yet',
	'RATED'								=> 'rated',
	'BAD'								=> 'bad',
	'GOOD'								=> 'good'
));
