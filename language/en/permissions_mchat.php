<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2015 dmzx - http://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACL_U_MCHAT_USE'						=> 'Can use mChat',
	'ACL_U_MCHAT_VIEW'						=> 'Can view mChat',
	'ACL_U_MCHAT_EDIT'						=> 'Can edit messages',
	'ACL_U_MCHAT_DELETE'					=> 'Can delete messages',
	'ACL_U_MCHAT_IP'						=> 'Can view IP addresses',
	'ACL_U_MCHAT_PM'						=> 'Can use private message',
	'ACL_U_MCHAT_LIKE'						=> 'Can like messages',
	'ACL_U_MCHAT_QUOTE'						=> 'Can quote messages',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'Can ignore flood limit',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Can view the archive',
	'ACL_U_MCHAT_BBCODE'					=> 'Can use bbcodes',
	'ACL_U_MCHAT_SMILIES'					=> 'Can use smilies',
	'ACL_U_MCHAT_URLS'						=> 'Can post URLs',

	'ACL_A_MCHAT'							=> 'Can manage mChat settings',
));
