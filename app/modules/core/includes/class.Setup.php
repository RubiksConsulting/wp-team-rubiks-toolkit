<?PHP
namespace WP_Team_Rubiks\Toolkit\Core;

/**
* Setup class to initialise Toolkit
*/
class Setup{

  /**
  * Class constructor
  * @return void
  */
  public function __construct(){
    $this->wordpress_action_hooks();
  }

  /**
  * Wrapper for all WordPress action hooks
  * @return void
  */
  private function wordpress_action_hooks(){
    add_action('admin_enqueue_scripts', array($this, 'admin_resources'));
  }

  /**
  * Enqueues scripts and styles to be used in the dashboard area (/wp-admin)
  * @return void
  */
  public function admin_resources(){
    $this->modulePath = Helpers::getModulePath(__NAMESPACE__);
    wp_enqueue_script('wp-team-rubiks-toolkit-admin', $this->modulePath . '/scripts/admin.js', array(), WP_TEAM_RUBIKS_TOOLKIT_VERSION, true);
  }
}
