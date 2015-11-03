<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    var $data   = array();
    var $urls   = array();

    public function __construct()
    {
        parent::__construct();

        //urls útiles
        $this->urls['panel_base_url']      = base_url('panel');
        $this->urls['panel_login_url']     = sprintf("%s/%s", $this->urls['panel_base_url'], 'login');
        $this->urls['panel_dashboard_url'] = sprintf("%s/%s", $this->urls['panel_base_url'], 'dashboard');
    }

    protected function get_view_name( $prefix, $page_name )
    {
        return sprintf("%s%s", $prefix, $page_name);
    }

    protected function is_logged_in()
    {
        $usuario_id = $this->session->userdata('usuario_id');
        return isset($usuario_id);
    }

    protected function load_language( $filename )
    {
        $language      = $this->config->item('language');
        $language_abbr = $this->config->item('language_abbr');

        //la variable "language_abbr" servirá para el lang del html y para las rutas
        $this->data['language_abbr'] = $language_abbr;

        $this->lang->load( $filename, $language);

        $this->load->helper('language');
    }
}