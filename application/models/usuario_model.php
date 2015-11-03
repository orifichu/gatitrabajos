<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	//variables generales
	var $table = 'usuarios';

    function __construct()
    {
        parent::__construct();
    }

    //consultar uno o más usuarios según la información brindada
	public function consulta_general($data) {

		$condition = '1=1';

		if ( array_key_exists('nickname', $data) ) {
			$condition .= sprintf(" AND nickname LIKE '%s'", $data['nickname']);
		}

		if ( array_key_exists('password', $data) ) {
			$condition .= sprintf(" AND password LIKE '%s'", $data['password']);
		}

		if ( array_key_exists('esta_activo', $data) ) {
			$condition .= sprintf(" AND esta_activo = %s", $data['esta_activo']);
		}

		$this->db->select('*');
		$this->db->from( $this->table );
		$this->db->where( $condition );

		if ( array_key_exists('password', $data) ) {
			$this->db->limit(1);
		}
		
		$query = $this->db->get();

		return $query;
	}
}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */