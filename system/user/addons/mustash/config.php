<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * Mustash configuration constants
 *
 * @package		Mustash
 * @author		Mark Croxton
 * @copyright	Copyright (c) 2014, hallmarkdesign
 * @link		http://hallmark-design.co.uk/code/mustash
 * @since		1.0
 * @filesource 	./system/user/addons/mustash/config.php
 */

if ( ! defined('MUSTASH_NAME'))
{
	define('MUSTASH_NAME',         	'Mustash');
	define('MUSTASH_CLASS_NAME',   	'Mustash');
	define('MUSTASH_VERSION',      	'2.0.0');
	define('MUSTASH_AUTHOR',  		'Mark Croxton, Hallmark Design');
	define('MUSTASH_AUTHOR_URL',  	'http://hallmark-design.co.uk');
	define('MUSTASH_DOCS_URL',     	'https://github.com/croxton/Stash/wiki');
	define('MUSTASH_DESC',  		'Manage Stash variables and cache-breaking rules.');
	define('MUSTASH_MOD_URL',  		strtolower(MUSTASH_CLASS_NAME));
}

$config['name'] = MUSTASH_NAME; 
$config['class_name'] = MUSTASH_CLASS_NAME; 
$config['ext_class_name'] = MUSTASH_CLASS_NAME . '_ext';
$config['version'] = MUSTASH_VERSION;
$config['docs_url'] = MUSTASH_DOCS_URL;
$config['description'] = MUSTASH_DESC;
$config['mod_url_name'] = MUSTASH_MOD_URL;
$config['settings_table'] = 'stash_settings'; 
$config['rules_table'] = 'stash_rules';




