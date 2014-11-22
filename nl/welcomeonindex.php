<?php
/**
*
* @package phpBB Extension - Welcome on Index
* @copyright (c) 2014 Stoker
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
    'UP_LATE'             		=> 'You\'re up late %1$s, Shouldn\'t you be sleeping?',
    'UP_EARLY'             		=> 'Good Morning %1$s, You\'re up early today',
    'GOOD_MORNING'           	=> 'Good Morning %1$s, What a lovely morning it is',
	'GOOD_DAY'        			=> 'Good day %1$s, Hope you enjoy your time here',
    'GOOD_AFTERNOON'       		=> 'Good Afternoon %1$s, Finally you are here',
    'GOOD_EVENING'           	=> 'Good Evening %1$s, Nice to see you here',
   	'GOOD_NIGHT'           		=> 'Good Night %1$s, time to go to bed',
    'MEMBER_FOR'           		=> 'Member For:',
    'WELCOME_GUEST'           	=> 'Guest',
    'WELCOME_HOUR'           	=> 'Hour',
    'WELCOME_HOURS'           	=> 'Hours',
   	'WELCOME_DAY'           	=> 'Day',
    'WELCOME_DAYS'           	=> 'Days',
    'WELCOME_MONTH'           	=> 'Month',
    'WELCOME_MONTHS'       		=> 'Months',
   	'WELCOME_YEAR'           	=> 'Year',
    'WELCOME_YEARS'				=> 'Years',
	'WELCOME_TO_MOD'			=> 'Welcome to',
));
