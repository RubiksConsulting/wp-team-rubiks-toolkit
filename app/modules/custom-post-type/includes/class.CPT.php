<?PHP
namespace WP_Team_Rubiks\Toolkit\Custom_Post_Type;
use WP_Team_Rubiks\Toolkit\Core as Core;
$dependency = Core\Helper::getModulePath(__NAMESPACE__) . '/includes/wp-custom-post-type-class/src/CPT.php';
include $dependency;
/**
* Bridge class to interact with submodule dependency
*/
class CPT extends \CPT{

  /**
  * Class constructor
  * @return void
  */
  public function __construct($post_type_names, $options = array()){
    parent::__construct($post_type_names, $options);
  }
}
