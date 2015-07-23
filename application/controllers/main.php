<?php

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('log')) {
            redirect('/login/login/', 'refresh');
        }
        $this->load->model('main_model');
    }

    public function solicitud_accesos() {

        $resultado_permisos = $this->main_model->main_permisos()->result_array();
        $resultado_cargos = $this->main_model->main_cargos()->result_array();
        $resultado_oficina = $this->main_model->get_datos_oficina()->result_array();
        $resultado_area = $this->main_model->get_datos_area()->result_array();
        $datos_permiso = array(
            'datos_indice' => $resultado_permisos,
            'datos_cargo' => $resultado_cargos,
            'datos_oficina' => $resultado_oficina,
            'datos_area' => $resultado_area
        );

        $this->load->view('solicitud_accesos/header');
        $this->load->view('solicitud_accesos/sifcnet_view', $datos_permiso);
        $this->load->view('solicitud_accesos/footer');
    }

    public function get_datos_permiso() {
        $resultado_permiso = $this->main_model->get_datos_permiso()->result_array();
        $array_push = array();
        foreach ($resultado_permiso as $fila) {
            $tipo_p = $fila['pk_tipo_permiso'];
            if (!array_key_exists($tipo_p, $array_push)) {

                $array_push[$tipo_p] = array();
                $array_push[$tipo_p]["permiso"] = array();
                $array_push[$tipo_p]["tipo_permiso"] = $fila['tipo_permiso'];
            }
            $array_push[$tipo_p]["permiso"][$fila['pk_permiso']] = $fila['permiso'];
        }
        echo json_encode($array_push);
    }

    public function create_profile() {
        $resultado_cargos = $this->main_model->main_cargos()->result_array();
        $resultado_permiso = $this->main_model->get_datos_permiso()->result_array();

        $array_push = array();
        foreach ($resultado_permiso as $fila) {
            $tipo_p = $fila['pk_tipo_permiso'];
            if (!array_key_exists($tipo_p, $array_push)) {

                $array_push[$tipo_p] = array();
                $array_push[$tipo_p]["permiso"] = array();
                $array_push[$tipo_p]["tipo_permiso"] = $fila['permiso'];
            }
            $array_push[$tipo_p]["permiso"][$fila['pk_permiso']] = $fila['permiso'];
        }

        $datos = array(
            'datos_cargo' => $resultado_cargos,
            'datos_permiso' => $array_push
        );

        $this->load->view('solicitud_accesos/header');
        $this->load->view('solicitud_accesos/create_profile_view', $datos);
        $this->load->view('solicitud_accesos/footer');
    }

    public function consultar_permisos_por_cargo() {

        $cargo = $this->input->post("cargo");
        $resultado = $this->main_model->consultar_permisos_cargo($cargo)->result_array();
        if (!$resultado) {

            echo json_encode(array());
        } else {
            echo json_encode($resultado);
        }
    }

    public function profile_register() {


        $datos_perfil = $this->input->post('datos');
        $limpiar = $this->main_model->clean_profile($datos_perfil[0]['value']);
        $aux = 0;
        foreach ($datos_perfil as $row) {

            if ($aux == 0) {
                $cargo = $row['value'];
            } else {
                $permiso = $row['value'];
                $consulta = $this->main_model->model_profile_register($cargo, $permiso);
            }
            $aux++;
        }
        if ($consulta) {

            echo json_encode(array(
                'success' => true
            ));
        } else {
            echo json_encode(array(
                'success' => FALSE
                    )
            );
        }
    }

    public function get_datos_usuario() {
        $dni = $this->input->post("dni");
        $resultado = $this->main_model->get_datos_usuario($dni)->result_array();
        echo json_encode($resultado);
    }

    public function registro_solicitud_accesos() {
        $datos = $this->input->post("datos");
        $dni_personal = $datos[0]['value'];
        $nombres_persona = $datos[1]['value'];
        $cargo_persona = $datos[3]['value'];
        $desde = $datos[4]['value'];
        $hasta = $datos[5]['value'];
        $area_persona = $datos[6]['value'];
        $oficina = $datos[7]['value'];
        $nombre_jefe = $datos[8]['value'];

        $pk_personal = $this->main_model->get_pk_personal($dni_personal)->result_array();

        var_dump($desde);
        var_dump($hasta);
        

        $resultado = $this->main_model->registro_permiso_solicitado($pk_personal[0]['pk_personal'], $cargo_persona, $area_persona, $oficina, $desde, $hasta, $nombre_jefe);
        $id_result = $this->main_model->getLastInserted();
        foreach ($datos as $row) {

            if ($row['name'] == "test") {
                echo $row['value'];
            }
        }
    }

    public function solicitud_andes() {
        $result = $this->main_model->main_permisos();
        var_dump($result);
    }

    public function vista_test() {


        $resultado_permisos = $this->main_model->main_permisos()->result_array();
        $resultado_cargos = $this->main_model->main_cargos()->result_array();
        $resultado_oficina = $this->main_model->get_datos_oficina()->result_array();
        $resultado_area = $this->main_model->get_datos_area()->result_array();
        $datos_permiso = array(
            'datos_indice' => $resultado_permisos,
            'datos_cargo' => $resultado_cargos,
            'datos_oficina' => $resultado_oficina,
            'datos_area' => $resultado_area
        );


        //$this->load->view('solicitud_accesos/header_1');
        $this->load->view('solicitud_accesos/header');        
        $this->load->view('solicitud_accesos/sifcnet_view', $datos_permiso);
        //$this->load->view('solicitud_accesos/about');
        //$this->load->view('solicitud_accesos/footer_1');
        //$this->load->view('login/about');
        $this->load->view('solicitud_accesos/footer');
    }

    public function impresion() {
        $this->load->view('solicitud_accesos/header');
        $this->load->view('solicitud_accesos/solicitud_impresion');
        $this->load->view('solicitud_accesos/footer');
    }

    public function login() {

        $this->load->view('login/header');
        $this->load->view('login/about');
        $this->load->view('login/footer');
    }

    public function test_login() {
        //$this->
    }

}
