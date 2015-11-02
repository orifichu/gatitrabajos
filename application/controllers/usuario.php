<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends MY_Controller {

	public function check_login()
	{
		//cargar el view
		$this->load_view( __FUNCTION__ );
	}

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */