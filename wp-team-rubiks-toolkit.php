<?php
/**
 * Plugin Name: WP Team Rubiks Toolkit
 * Plugin URI: https://github.com/TeamRubiks/WP-Team-Rubiks-Toolkit
 * Description: Contains helper classes used throughout Team Rubiks Wordpress plugins.
 * Version: 1.0.0
 * Author: Team Rubiks
 * Author URI: https://teamrubiks.com
 * Requires at least: 4.8
 * Tested up to: 4.8
 *
 * Text Domain: WP-Team-Rubiks-Toolkit
 *
 * @package WP Team Rubiks Toolkit
 * @category Core
 * @author Team Rubiks
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define('WP_TEAM_RUBIKS_PLUGINS_PATH', dirname(dirname(__FILE__)));
define('WP_TEAM_RUBIKS_PLUGINS_URI', plugins_url());
define('WP_TEAM_RUBIKS_TOOLKIT_VERSION', '1.0.0');

/**
* Autoloader for classes within the \TeamRubiks namespace
* @param string $class string containing the class to include
* @return void
*/
function wp_team_rubiks_autoloader($class){
  $parts = explode('\\', $class);
  if($parts[0] != 'WP_TEAM_RUBIKS'){
    return;
  }
  $plugin = strtolower(str_replace('_', '-', $parts[0].'-'.$parts[1]));
	$parts[0] = 'app';
	$parts[1] = 'modules';
  $file = 'class.' . end($parts) . '.php';
  array_pop($parts);
  $path = $plugin.'/'.strtolower(str_replace('_', '-', implode('/', $parts)));
	$filepath = WP_TEAM_RUBIKS_PLUGINS_PATH . '/' . $path . '/'. $file;
	print_r($filepath);
  //require_once($filepath);
}
$WP_TEAM_RUBIKS = new WP_Team_Rubiks\Toolkit\Core\Setup();
