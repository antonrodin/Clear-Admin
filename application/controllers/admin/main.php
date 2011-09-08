<?php
/**
 * Main controller,
 */
class Main extends CI_Controller {

    /**
     * Default contructor
     */
    public function  __construct() {
        parent::__construct();
        $this->init_config();
    }

    /**
     * Default view
     */
    public function index() {
        $this->load->view('admin/main/main-template', $this->data);
    }

    /**
     * Show licence
     */
    public function licence() {
        $this->data['title'] = 'Clear admin template licence';
        $this->data['load_view'] = 'licence';
        $this->data['suboption'] = 'sb-2';
        $this->load->view('admin/main/main-template', $this->data);
    }

    private function init_config() {
        $this->user_library->is_logged_in($this->session->userdata("is_logged_in"));
        $this->data = array(
            'option' => 'op-1',
            'suboption' => 'sb-1',
            'mainmenu' => $this->menu_model->get_mainmenu(),
            'submenu' => $this->menu_model->get_submenu(),
            'title' => 'Clear Admin',
            'description' => 'Olive Line International S.L. cosmetics website management panel',
            'header' => 'header',
            'menu' => 'menu',
            'load_view' => 'main',
            'footer' => 'footer'
        );
    }

    private $data;
    
}