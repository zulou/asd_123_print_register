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

    public function borrar() {
        $usuario = "milito";
        $password = "milito";
        $consulta = $this->login_model->check_login($usuario, $password)->result_array();
        var_dump($consulta);
        echo $consulta[0]['id'];
    }

    public function check_login() {
        $datos_login = $this->input->post('datos');

        $usuario = $datos_login[0]['value'];
        $password = $datos_login[1]['value'];
        $consulta = $this->login_model->check_login($usuario, $password)->result_array();
        if ($consulta) {

            var_dump($consulta);
            $usuario_data = array(
                'id' => $consulta[0]['id'],
                'nombre' => $consulta[0]['usuario'],
                'log' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('login/logi');
        } else {
            $this->index();
        }
    }

    public function logi() {
        var_dump($this->session->userdata('nombre'));
        if ($this->session->userdata('log')) {
            $data = $this->session->userdata('nombre');
            redirect('main/vista_test');
        } else {
            echo "logout";
        }
    }
    
    public function logout(){
        
        $usuario_data=array(
            'log'=>FALSE
        );
        $this->session->set_userdata($usuario_data);
        redirect('login');
    }

}
