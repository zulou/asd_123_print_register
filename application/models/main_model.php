<?php

class Main_model extends CI_Model {

    public function main_permisos() {
        $consulta = $this->db->query("select * from permiso  ");

        return $consulta;
    }

    public function main_cargos() {
        $consulta = $this->db->query("select * from cargo");
        return $consulta;
    }

    public function get_datos_usuario($dni) {
        $consulta = $this->db->query("select concat(apellidos_personal,' ',nombres_personal) as nombre_personal, email_personal from personal where  dni_personal='$dni'");
        return $consulta;
    }

    public function get_datos_oficina() {
        $consulta = $this->db->query("select * from  oficina_pac");
        return $consulta;
    }

    public function get_datos_area() {
        $consulta = $this->db->query("select * from area");
        return $consulta;
    }

    public function get_datos_permiso() {
        $consulta = $this->db->query("select permiso.pk_tipo_permiso, permiso.pk_permiso , permiso.permiso , tipo_permiso.tipo_permiso from permiso left join tipo_permiso using(pk_tipo_permiso) order by tipo_permiso.orden,tipo_permiso.tipo_permiso,permiso.permiso");
        return $consulta;
    }

    public function model_profile_register($pk_cargo, $pk_permiso) {

        return $this->db->query("insert into perfil (pk_cargo,pk_permiso)values('$pk_cargo','$pk_permiso')");
    }

    public function consultar_permisos_cargo($cargo) {
        return $this->db->query("select pk_permiso from perfil where pk_cargo='$cargo'");
    }

    public function clean_profile($pk_cargo) {
        return $this->db->query("delete from perfil where pk_cargo='$pk_cargo'");
    }

    public function get_pk_personal($dni) {
        return $this->db->query("select pk_personal from personal where dni_personal='$dni'");
    }

    public function registro_permiso_solicitado($pk_personal,$cargo_persona,$area_persona,$oficina,$desde,$hasta,$nombre_jefe) {
        return $this->db->query("insert into permiso_solicitado (pk_personal,pk_cargo,pk_area,pk_oficina_pac,cargo_desde,cargo_hasta,autorizado_por)values('$pk_personal','$cargo_persona','$area_persona','$oficina','$desde','$hasta','$nombre_jefe')");
    }

    public function getLastInserted() {
        return $this->db->insert_id();
    }

}

?>