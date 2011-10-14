<?php

  /**
   * Site Component
   *
   * @category Component
   * @package  Croogo
   * @version  1.0
   * @author   Darren Moore <darren.m@firecreek.co.uk>
   * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
   * @link     http://www.firecreek.co.uk
   */
  class SiteComponent extends Object
  {
    /**
     * Controller
     */
    public $controller = null;
    
    /**
     * Components
     */
    public $components = array('Croogo');
  
  
    /**
     * Startup
     *
     * @access public
     * @return void
     */
    public function startup(&$controller)
    {
      $this->controller =& $controller;
    }
  
  
    /**
     * Before render
     *
     * @access public
     * @return void
     */
    public function beforeRender(&$controller)
    {
      //Theme view directory, forced
      App::build(array(
        'views' => array(APP . 'views' . DS . 'themed' . DS . Configure::read('Site.theme') . DS)
      ));
      
      //Helper directory, forced
      //Fixes custom helper
      App::build(array(
        'helpers' => array(APP . 'views' . DS . 'themed' . DS . Configure::read('Site.theme') . DS . 'helpers'. DS)
      ));
      
      //Node title
      if(isset($controller->viewVars['node']))
      {
        $this->_meta($controller);
      }
    }
  
  
    /**
     * Meta
     *
     * @access private
     * @return void
     */
    private function _meta(&$controller)
    {
      if(isset($controller->viewVars['node']['CustomFields']['title']))
      {
        $controller->set('title_for_layout',$controller->viewVars['node']['CustomFields']['title']);
      }
    }
    
  
  
    /**
     * Shutdown
     *
     * @access public
     * @return void
     */
    public function shutdown(&$controller)
    {
    }
    
  }
  
?>