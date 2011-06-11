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