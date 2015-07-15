<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $this->load->view('login/header');
        $this->load->view('login/about');
        $this->load->view('login/footer');
    }

    public function check_login() {
        $datos_login = $this->input->post('datos');

        $usuario = $datos_login[0]['value'];
        $password = $datos_login[1]['value'];
        $consulta = $this->login_model->check_login($usuario, $password)->result_array();
        if ($consulta) {
            
            var_dump($consulta);
            $usuario_data = array(
                'id' => $consulta->id,
                'nombre' => $consulta->usuario,
                'log' => TRUE
            );
            $this->session->set_userdata($usuario_data);
        } else {
            redirect('solicitud_accesos');
        }
    }

}
