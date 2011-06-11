<?php

  /**
   * Site Controller
   *
   * @category Controller
   * @package  Croogo
   * @version  1.0
   * @author   Darren Moore <darren.m@firecreek.co.uk>
   * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
   * @link     http://www.firecreek.co.uk
   */
  class SiteController extends SitemapAppController
  {
  
    /**
     * Controller name
     *
     * @var string
     * @access public
     */
    public $name = 'Site';
      
    /**
     * Models used by the Controller
     *
     * @var array
     * @access public
     */
    public $uses = array();


    /**
     * Before filter
     *
     * @access public
     * @return void
     */
    public function beforeFilter() {
      parent::beforeFilter();

      // CSRF Protection
      //if (in_array($this->params['action'], array('admin_index'))) {
      //  $this->Security->validatePost = false;
      //}
    }


    /**
     * Admin index
     *
     * List existing redirect routes
     *
     * @access public
     * @return void
     */
    public function admin_index()
    {
    }


    /**
     * Admin add
     *
     * @access public
     * @return void
     */
    public function admin_add()
    {
    }


    /**
     * Admin edit
     *
     * @access public
     * @return void
     */
    public function admin_edit($id)
    {
    }


    /**
     * Admin delete
     *
     * @access public
     * @return void
     */
    public function admin_delete($id)
    {
    }
    

  }
?>