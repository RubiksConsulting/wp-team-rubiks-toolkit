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
    $plugin = self::namespaceToDir($namespace[0].'-'.$namespace[1]));
    $namespace[0] = 'app';
    $namespace[1] = 'modules';
    $module = self::namespaceToDir(end($namespace));
    array_pop($namespace);
    return $plugin . '/' . self::namespaceToDir(implode('/', $namespace)) . '/' . $module;
  }

  static function namespaceToDir($part){
    return strtolower(str_replace('_', '-', $part));
  }
}
