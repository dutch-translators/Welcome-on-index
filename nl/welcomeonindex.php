<?php
/**
*
* @package phpBB Extension - Welcome on Index
* @copyright (c) 2014 Stoker
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
    'UP_LATE'             		=> 'Je bent nog laat op %1$s, moet jij nog niet naar je bed?',
    'UP_EARLY'             		=> 'Goedemorgen %1$s, je bent er vroeg bij vandaag',
    'GOOD_MORNING'           	=> 'Goedemorgen %1$s, wat is het een heerlijke ochtend',
	'GOOD_DAY'        			=> 'Goededag %1$s, ik hoop dat je geniet van je tijd hier',
    'GOOD_AFTERNOON'       		=> 'Goedemiddag %1$s, eindelijk, je bent er',
    'GOOD_EVENING'           	=> 'Goedenavond %1$s, wat leuk om je hier te zien',
   	'GOOD_NIGHT'           		=> 'Goedenacht %1$s, het is tijd om naar bed te gaan',
    'MEMBER_FOR'           		=> 'Lid voor:',
    'WELCOME_GUEST'           	=> 'Gast',
    'WELCOME_HOUR'           	=> 'Uur',
    'WELCOME_HOURS'           	=> 'Uren',
   	'WELCOME_DAY'           	=> 'Dag',
    'WELCOME_DAYS'           	=> 'Dagen',
    'WELCOME_MONTH'           	=> 'Maand',
    'WELCOME_MONTHS'       		=> 'Maanden',
   	'WELCOME_YEAR'           	=> 'Jaar',
    'WELCOME_YEARS'				=> 'Jaren',
	'WELCOME_TO_MOD'			=> 'Welkom bij',
));
