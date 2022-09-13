<?php
/**
*
* @package BBdownloads
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
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
	// ACP Module
	'BBDOWNLOADS_EXPLAIN'		=> 'Welcome to BBdownloads. With this extension you will be able to create a fully automated download system for your board. Manage your downloads, create categories, changelogs and versions.<br /> It comes with many cool features like picture for the main categories, possibility to allow downloads with points earned via BBpoints and more...<br/>  Make sure to check the download and BBpoints permission as well. Enjoy!',
	'ACP_BBDOWNLOADS'			=> 'BBDownloads',
//	'BBDOWNLOADS_CAT_TIP'		=> '<a title="{L_BBDOWNLOADS_CAT_TIP}"><i class="fa fa-question-circle"></i></a> Select the category beside to edit it or refresh the page to enter a new category here',
	'BBDOWNLOADS_SELECT'		=> 'Select, Create, Change',
	'BBDOWNLOADS_SELECT_BOX'	=> 'Category selection',
	'BBDOWNLOADS_SELECT_EXPL'	=> 'Select a category then hit submit in order to save any changes in the "create / edit category" beside',
	'BBDOWNLOADS_CAT_ADD_EXPL'  => 'Remember to <strong>refresh the page</strong> before creating a new category. Use the submit and delete buttons accordingly',
	'BBDOWNLOADS_DOWNLOADS_EXPL'=> 'Select an item below or a category in the "category selection" in order to enter a new item',
	'BBDOWNLOADS_VERSIONS_EXPL'	=> 'Select an item above from the "downloads" in order to enter a new version',
	
	'BBDOWNLOADS_CAT_ADD'	    => 'Create / edit category',
	'ID'		            	=> 'Id',
	'BBDOWNLOADS_DESC'			=> 'Description',
	'BBDOWNLOADS_CAT'	    	=> 'Category',
	'BBDOWNLOADS_ITEM_DESC'	    => 'Item description',
	'DOWNLOADS_PER_PAGE'		=> 'Downloads / page',
	'DISPLAY'					=> 'Fancy categories',
	'PICTURESIZE'				=> 'Imagesize',
	'PICTUREX'					=> 'Max. width in pixels',
	'PICTUREY'					=> 'Max. height in pixels',
	'VERSION_SIZE'				=> 'Total Downloads size',
	'DAY'						=> 'Day: ',
	'WEEK'						=> 'Week: ',
	'MONTH'						=> 'Month: ',
	'SAVE'						=> 'Save',
	
	'DOWNLOADS'					=> 'Downloads',
	'DOWNLOAD' 					=> 'Download',
	'DEMO_URL'					=> 'Demo url',
	'OWNER'						=> 'Owner',
	'ACTIVE'					=> 'Active',
	'AD_ACTIVE'					=> 'Ad',
	'BBDOWNLOADS_SHOW'			=> 'Show downloaders',
	'LIST_DOWNLOAD'				=> 'One download',
	'LIST_DOWNLOADS'			=> '%s downloads',
	'LIST_VERSION'				=> 'One version',
	'LIST_VERSIONS'				=> '%s versions',
	'SELECT_THIS'				=> 'Select only versions from this download',
	'VERSION_ADD'				=> 'Add new version',
	'DEL'						=> 'Delete',
	
	'VERSIONS'					=> 'Versions',	
	'VERSION'					=> 'Version',
	'VERSION_PLACEHOLDER'	    => 'Use semantic versioning, IE 1.0.1',
	'CHANGELOG'					=> 'Change log',
	'FILE'						=> 'File',
	'REMOTE_URL'				=> 'Remote url',
	'SUPPORTFORUM'				=> 'Support forum',
	'HITS'						=> 'Hits',
	'THEME'						=> 'Theme',
	'PACKAGECHANGE'				=> 'Change to package',
	'THEMECHANGE'				=> 'Change to theme',
	
	'TITLE_TO_SHORT'			=> 'Title to short! (min. 3 chars)',
	'TEXT_TO_SHORT'				=> 'Text to short',
	'VERSION_TO_SHORT'			=> 'Version to short! (min. 3 chars)',
	'PARENT_ERROR'				=> 'Parent can not be a child of himself',
	'DOWNLOAD_SAVED'			=> 'Download saved successfully',
	'BBDOWNLOADS_CLOSE'			=> 'Close',
	'VERSIONCHECK_DISABLE'		=> 'Extension Versioncheck or Classifieds is still enabled!',
	'NOTICES_BBPOINTS'			=> 'The extension <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=30"><strong>BBpoints</strong></a> is not installed, you can NOT use the BBpoints type settings.',
	'NOTICES_CLASSIFIEDS'		=> 'The extension <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBclassifieds</strong></a> is not installed, you can NOT use the Admin Market features',
	'NOTICES_CLASSIFIEDSADDON'	=> 'The extension <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBclassifiedsAddons</strong></a> is not installed, you can NOT use the User Market features',
	'NOTICES_CLASSIFIEDSADS'	=> 'The extension <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBclassifiedsAds</strong></a> is not installed, you can NOT use the Advertisement Market features',


	'SS_HELPER_NOTY'	    	=> 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'BBDOWNLOADS_NOTICE'		=> '<div class="phpinfo"><p>The settings for this extension are in <strong>%1$s &#187; %2$s &#187; %3$s</strong>.</p></div>',
	
	
	'BBDOWNLOADS_ONE'		    => '1',
	'BBDOWNLOADS_TWO'		    => '2',
	'BBDOWNLOADS_THREE'		    => '3',
	'BBDOWNLOADS_ONE_DESC'		=> 'Let us start here. This section is where you add the categories (They will be automatically ordered alphabetically) add backgrounds, adjust settings and also have an overview of the download with this uber cool built-in chart!<br > You can start by editing the current demo categories and sub categories or just create a new one. Once done you will need to save it by pressing the "submit" button below. <br />For example, add a category name below and the description, then press submit. If the Fancy Category option is enabled add a background picture as well then hit the the submit button to save the new category. Now continue from the step number 2 below',
	'BBDOWNLOADS_TWO_DESC'		=> 'Now that you added your new category (and/or sub category) click on the "Add new download" button below to enter the main download information and then hit save on the next page<br /> At this point after you enter your download information like the title, description and even a download image you can continue from the step number 3 below.',
	'BBDOWNLOADS_THREE_DESC'    => 'After you successfully entered the information above it\'s now time to add the file version and attach your zip file (you can also use a remote URL, like for example a direct Github raw download link)<br/> Select a download file from above (if you do not see a certain file you might need to select from the main category above and then enter the file) then click on "Add new version" button below. <br /> From there you will be able to add the version number, file, description for the changelog etc etc. You can add all the versions you need and the versioning system will take care of the file naming convention and the storing system.',
	'BBDOWNLOADS_DOWN'          => 'File name',
	'BBDOWNLOADS_DEMO_URL'		=> 'URL demo if available',
	'BBDOWNLOADS_PICTURE_UP'    => 'Select and upload your picture/logo here. PNG or JPG only',
	'BBCLASSIFIEDS_PICTURE_UP'  => 'Select and upload your slider pictures (max 4) here. PNG or JPG only',
	'BBDOWNLOADS_REMOTE_URL'    => 'Enter a remote url, IE a Github, Amazon link etc .zip ',
	'BBDOWNLOADS_PAGE_EXPLAIN'  => 'The maximum files per page',
	'BBDOWNLOADS_FANCY_EXPLAIN'	=> 'Enable the Fancy category mode that allows a grid layout with background pictures',
	'BBDOWNLOADS_SIZE_EXPLAIN'	=> 'This is the size of the background picture. Leave default if in doubt',
	'BBDOWNLOADS_CHART'	        => 'Stats overview',
	'BBDOWNLOADS_CHART_EXPLAIN'	=> 'A quick and handy overview trend of the downloads. The stats will build overtime, daily, weekly and monthly depending on the downloads.',
	'SITESPLAT_COM'		        => 'http://sitesplat.com',
	'SITESPLAT_COPY'		    => '&#169; SiteSplat',
	'LICENSE_INFO'		        => 'Proprietary - SiteSplat All rights reserved',
	'EXTENSION_DEVELOPER'	    => 'Developer',
	'ACP_NOTICE_CLOSE'			=> 'Close',
	'ACP_BBDOWNLOADS_VERSION'   => '1.0.5',
	'ACP_LOADING'		        => 'Loading... Hold on',
	'FORUM_CONTENT'		        => 'forum content',
	'EXT_BBD_DESCRIPTION_PAGE'	=> 'Full download system for your phpBB board',
	'EXT_BBD_TASKS_1'			=> 'Special Group permissions',
	'EXT_BBD_TASKS_2'			=> 'Pictures enabled categories',
	'EXT_BBD_TASKS_3'			=> 'Checkout the other premium addons on <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'EXT_BBD_TASKS_4'			=> 'File version control',
	'EXT_BBD_TASKS_5'			=> 'BBpoints enabled. Get BBpoints here: <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'EXT_BBD_TASKS_6'			=> 'phpBB 3.2 ready',
	'FILE_BBPOINTS'				=> 'BBpoints',
	'ADD_DOWNLOAD'				=> 'Add new download',
	'ACP_CATEGORIES'			=> 'Categories',
	'ACP_BBDOWNLOADS_LOGS'		=> 'BBdownload logs',
	
));

// Description of Donations extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Downloadmanagement',
			'DESCRIPTION_2'		=> 'Versioncontrol',
			'DESCRIPTION_3'		=> 'Logo\'s',
			'DESCRIPTION_4'		=> 'Downloadstatistics',
		),
		'note' => array(
			'NOTICE_1'			=> 'phpBB 3.2 ready',
		)
	)
));
