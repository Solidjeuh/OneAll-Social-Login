<?php
/**
 *
 * Active User Birthdays. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, RTS Software
 * Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
    'OA_SOCIAL_LOGIN_ACP_AUTH_SETTTING_INFO' => 'biedt de authenticatie met een gebruikersnaam/wachtwoord (Db Authenticatie) aan, evenals de login met een sociaal netwerk account. De verificatie van sociale netwerken kan worden ingesteld in EXTENSIES \ ONEALL SOCIAL LOGIN.',
));

