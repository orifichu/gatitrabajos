<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends MY_Controller {

	//variables generales
	var $prefix = 'back_';
	
	public function dashboard()
	{
		//check if is logged in
		if ( ! $this->is_logged_in() ) redirect( $this->urls['panel_login_url'] );


		//cargar el view
		$this->load_view( __FUNCTION__ );
	}

	public function index()
	{
		$panel_base_url = base_url('panel');

		if ( $this->is_logged_in() ) {
			//si hay usuario logueado entonces dashboard
			redirect( $this->urls['panel_dashboard_url'] );

		} else {
			//si no hay usuario logueado entonces login
			redirect( $this->urls['panel_login_url'] );
		}
		
	}

	public function login()
	{
		//cargar el view
		$this->load_view( __FUNCTION__ );
	}

	protected function load_view( $function_name )
	{
		$view_name = $this->get_view_name( $this->prefix, $function_name );

		//cargar el archivo que contiene las traducciones que le corresponden a este view
		$this->load_language( $view_name );

		//cargar el view principal
		$this->load->view( $view_name, $this->data );
	}

}

/* End of file panel.php */
/* Location: ./application/controllers/panel.php */