<?php

  /**
   * Site Activation
   *
   *
   * @package  Croogo
   * @author   Darren Moore <darren.m@firecreek.co.uk>
   * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
   * @link     http://www.firecreek.co.uk
   */
  class SiteActivation {

    /**
     * onActivate will be called if this returns true
     *
     * @param  object $controller Controller
     * @return boolean
     */
    public function beforeActivation(&$controller) {
      return true;
    }
      
      
    /**
     * Called after activating the plugin in ExtensionsPluginsController::admin_toggle()
     *
     * @param object $controller Controller
     * @return void
     */
    public function onActivation(&$controller) {
    }
    
    
    /**
     * onDeactivate will be called if this returns true
     *
     * @param  object $controller Controller
     * @return boolean
     */
    public function beforeDeactivation(&$controller) {
    }
      
      
    /**
     * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle()
     *
     * @param object $controller Controller
     * @return void
     */
    public function onDeactivation(&$controller) {
    }
      
    
    /**
     * SQL
     *
     * @access private
     * @return void
     */
    private function _sql($file)
    {
      $sql = file_get_contents(APP.'plugins'.DS.'sitemap'.DS.'config'.DS.'schema'.DS.$file.'.sql');
      if(!empty($sql)){
        App::import('Core', 'File');
        App::import('Model', 'ConnectionManager');
        $db = ConnectionManager::getDataSource('default');

        $statements = explode(';', $sql);

        foreach ($statements as $statement) {
            if (trim($statement) != '') {
                $db->query($statement);
            }
        }
      }
    }
    
  }
  
?>