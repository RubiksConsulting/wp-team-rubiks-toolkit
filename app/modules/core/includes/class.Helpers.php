<?PHP
namespace WP_Team_Rubiks\Toolkit\Core;

/**
* Setup class to initialise Toolkit
*/
class Helpers {

  static public function getModulePath($namespace){
    return WP_TEAM_RUBIKS_PLUGINS_PATH . '/' . self::getModuleDir($namespace);
  }

  static public function getModuleURI($namespace){
    return WP_TEAM_RUBIKS_PLUGINS_URI . '/' . self::getModuleDir($namespace);
  }

  static public function getModuleDir($namespace){
    $namespace = explode('\\', $namespace);
    $plugin = strtolower(str_replace('_', '-', $namespace[0].'-'.$namespace[1]));
    $namespace[0] = 'app';
    $namespace[1] = 'modules';
    $module = end($namespace);
    array_pop($namespace);
    return $plugin . '/' . strtolower(str_replace('_', '-', implode('/', $namespace))) . '/' . $module;
  }
}
