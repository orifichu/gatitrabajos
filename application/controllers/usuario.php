<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends MY_Controller {

	public function check_login()
	{
		$this->load->helper( 'form' );
		$this->load->library( 'form_validation' );

        $rules = array(
               array(
                     'field'   => 'nickname', 
                     'label'   => 'Usuario', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Contraseña', 
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
			redirect( $this->urls['panel_login_url'] );

		$this->data['nickname'] = set_value('nickname');
		$this->data['password'] = hash('ripemd160', set_value('password'), false);
		$this->data['esta_activo'] = 1;

        //MODEL
        $this->load->model('Usuario_model');

		$query = $this->Usuario_model->consulta_general( $this->data );
		$usuarios = $query->result();

		if ( $query->num_rows() == 0 )
			redirect( $this->urls['panel_login_url'] );

		//liberar memoria (buena práctica)
		$query->free_result();

		//sesión
		$usuario_data = array();
		foreach ($usuarios as $usuario)
		{
			$usuario_data['usuario_id'] = $usuario->usuario_id;
			$usuario_data['nombres'   ] = $usuario->nombres;
			$usuario_data['apellidos' ] = $usuario->apellidos;
			$usuario_data['nickname'  ] = $usuario->nickname;
			$usuario_data['rol_id'    ] = $usuario->usuario_id;
		}

		$this->session->set_userdata($usuario_data);

		//dashboard
		redirect( $this->urls['panel_dashboard_url'], 'refresh' );
	}

	public function logout()
	{
		$userdata = $this->session->all_userdata();
		foreach ($userdata as $key => $value) {
			if ($key != 'session_id') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();

		//dashboard
		redirect( $this->urls['panel_login_url'], 'refresh' );
	}
}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */