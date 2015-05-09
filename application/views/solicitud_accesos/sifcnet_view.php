<div class="class_container">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span>FORMATO 02-AU</span>                    
                </div>
            </div>

        </div>
        <div class="widget print">
            <div class="widget-body ">
                <form class="form-horizontal no-margin center-align-text" id="form-usuario-datos">
                    <div class="row-fluid ">
                        <div class="span11">
                            <div class="widget ">
                                <div class="widget-header">
                                    <div class="title">
                                        <span class="icon-pencil-2">Formulario</span>
                                    </div>
                                </div>
                                <div class="widget-body ">

                                    <div class="control-group">
                                        <div class="span4">
                                            <label class="control-label">Dni usuarios:</label>
                                            <div class="controls">
                                                <input class="input-block-level" type="text" title="ingrese su nombre" id="dni_personal" name="dni_personal">
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nombres:</label>
                                        <div class="controls">
                                            <input class="input-block-level" type="text" title="ingrese su nombre" name="nombres_personal" id="nombre_personal">
                                        </div>   
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email:</label>
                                        <div class="controls">
                                            <input class="input-block-level" type="text" title="ingrese su correo corporativo" name="persona_email" id="email_personal">
                                        </div>   
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Cargo:</label>
                                        <div class="controls">

                                            <select class="span12" name="cargo" id="select_cargo">


                                                <?php
                                                foreach ($datos_cargo as $row) {
                                                    $option = "<option name='cargo' value='";
                                                    $option.=$row['pk_cargo'];
                                                    $option.="'";
                                                    $option.=">";
                                                    $option.=$row['cargo'];

                                                    $option.="</option>";
                                                    echo $option;
                                                }
                                                ?>

                                            </select>   
                                        </div>   
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label">Periodo:</label>
                                        <div class="controls ">

                                            <div class="input-prepend">
                                                <span class="add-on">Desde:</span>
                                                <input class="span5" id="desde" name="desde" type="text" placeholder="Desde">
                                            </div>

                                            <div class="input-prepend">
                                                <span class="add-on">Hasta:</span>
                                                <input class="span6" id="hasta"  name="hasta" type="text" placeholder="Hasta">
                                            </div>

                                        </div>   
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label">Area:</label>
                                        <div class="controls">

                                            <select class="span11" name="area">


                                                <?php
                                                foreach ($datos_area as $row) {
                                                    $option = "<option value='";
                                                    $option.=$row['pk_area'];
                                                    $option.="'";
                                                    $option.=">";
                                                    $option.=$row['area'];

                                                    $option.="</option>";
                                                    echo $option;
                                                }
                                                ?>

                                            </select>   

                                        </div>   
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label">Oficina/pac:</label>
                                        <div class="controls">
                                            <select class="span12" name="oficina" >


                                                <?php
                                                foreach ($datos_oficina as $row) {
                                                    $option = "<option value='";
                                                    $option.=$row['pk_oficina_pac'];
                                                    $option.="'";
                                                    $option.=">";
                                                    $option.=$row['oficinas'];

                                                    $option.="</option>";
                                                    echo $option;
                                                }
                                                ?>

                                            </select>   
                                        </div>   
                                    </div>                                    

                                    <div class="control-group">
                                        <div class="controls">
                                            <p><small>*Una vez lleno este espacio, entréguelo a su jefe inmediato superior o Gerente del área (en caso de no encontrarse el Jefe Superior) para que lo llene y envíe al responsable de Administración de Cuentas para que se encargue de procesar su solicitud y entregarle su usuario y contraseña a su cuenta de Correo Electrónico Personal</small></p>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <div>
                                                <h5>Espacio llenado por el Gerente del Área o Jefe Inmediato Superior</h5>
                                            </div>                                            
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Nombre:</label>
                                        <div class="controls">
                                            <input class="input-block-level" type="text" title="Nombre del jefe" name="personal_nombre_jefe">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div style="float:left">

                                            <div class="control-group">

                                                <div class = "controls">
                                                    <h6>Permisos solicitados:</h6>


                                                    <div id="contenedor">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div style = "float:right">

                                            <div class = "control-group">
                                                <div class = "controls">
                                                    <h6>Solicitud para:</h6>
                                                    <label class = "radio">
                                                        <input type = "radio" name = "options" id = "crear" value="create"/>
                                                        Creación de nueva cuenta
                                                    </label>
                                                    <label class = "radio">
                                                        <input type = "radio" name = "options" id = "actualizacion" value="update"/>
                                                        Actualización de permisos
                                                    </label>
                                                    <label class = "radio">
                                                        <input type = "radio" name = "options" id = "cambio" value="change" />
                                                        Cambio de contraseña
                                                    </label>

                                                </div>
                                            </div>

                                            <div class = "control-group">

                                                <div class = "controls" >
                                                    <h6>GERENTE DEL ÁREA /JEFE SUPERIOR:</h6>
                                                    <small>SELLO, FIRMA Y OBSERVACIONES<small>


                                                            </div>
                                                            <div style = "float: right">
                                                                <textarea rows = "5"></textarea>
                                                            </div>

                                                            </div>

                                                            </div>
                                                            </div>

                                                            <div class = "control-group">

                                                                <div style = "float: left">

                                                                    <div class = "control-group" >
                                                                        <label class = "control-label">Fecha de Recepcion:</label>

                                                                        <div class = "controls">
                                                                            <input class = "input-block-level" type = "text" title = "Nombre del jefe" name = "Fecha_recepcion" />
                                                                        </div>

                                                                        <div class = "controls">
                                                                            <h6>Administracion de cuentas: OBSERVACIONES</h6>
                                                                            <textarea rows = "3"></textarea>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div style = "float: right">
                                                                    <br>
                                                                    <h6>Administracion de cuentas: OBSERVACIONES</h6>

                                                                    <div style = "float: right">
                                                                        <textarea rows = "3"></textarea>
                                                                    </div>

                                                                </div>

                                                            </div>



                                                            <div class = "control-group">
                                                                <div clas = "controls">
                                                                    <buton class = "btn btn-large btn-block btn-primary" id="btn-enviar-datos-usuario">Enviar</buton>
                                                                </div>
                                                            </div>



                                                            </div>

                                                            <div class = "widget-footer">

                                                            </div>

                                                            </div>
                                                            </div>
                                                            </div>



                                                            </form>



                                                            </div>
                                                            </div>
                                                            <div class = "widget">
                                                                <div class = "widget-footer">

                                                                </div>
                                                            </div>


                                                            </div>
                                                            </div>



                                                            <script>
                                                                $(function () {




                                                                    $("#hasta").datepicker({
                                                                        dateFormat: "dd-mm-yy"
                                                                    });
                                                                    $("#desde").datepicker({
                                                                        dateFormat: "dd-mm-yy"
                                                                    });

                                                                    $('#select_cargo').on("change", function () {


                                                                        var var_cargo = $('#select_cargo').val();

                                                                        $(".chk-permisos").attr("checked", false);
                                                                        $.ajax({
                                                                            url: ('http://localhost/accesos/index.php/main/consultar_permisos_por_cargo'),
                                                                            data: {cargo: var_cargo},
                                                                            dataType: 'Json',
                                                                            type: 'POST',
                                                                            success: function (res) {
                                                                                console.log(res);
                                                                                $.each(res, function (ind, val) {
                                                                                    $(".chk-permisos[name='test'][value=" + val.pk_permiso + "]")[0].checked = true;
                                                                                    //$(".chk-permisos[name='test'][value=" + val.pk_permiso + "]").attr("checked", true);
                                                                                    console.log($(".chk-permisos[name='test'][value=" + val.pk_permiso + "]")[0]);
                                                                                });


                                                                            }
                                                                        });
                                                                    });


                                                                    var def = "";
                                                                    $.ajax({
                                                                        url: ('http://localhost/accesos/index.php/main/get_datos_permiso'),
                                                                        data: def,
                                                                        dataType: 'Json',
                                                                        type: 'POST',
                                                                        success: function (res) {
                                                                            console.log(res);
                                                                            var $this = $(this);

                                                                            $.each(res, function (i, ob) {
                                                                                console.log(ob.tipo_permiso);
                                                                                $("#contenedor").append("<div>" + ob.tipo_permiso);

                                                                                $.each(ob, function (ind, obj) {

                                                                                    try {
                                                                                        $.each(obj, function (indice, objeto) {
                                                                                            $("#contenedor").append("<label>" + "<input type ='checkbox'  class='chk-permisos' name='test' value='" + indice + "'/>" + objeto + "</label>");
                                                                                            $("#contenedor").append("<br>");
                                                                                        });
                                                                                    }
                                                                                    catch (e) {
                                                                                        console.log("Error");
                                                                                    }
                                                                                });
                                                                                $("#contenedor").append("</div>");


                                                                            });
                                                                        }
                                                                    });



                                                                    var nombre_personal = $('#nombre_personal');
                                                                    var email_personal = $('#email_personal');
                                                                    $('#dni_personal').change(function () {
                                                                        var dni_personal = $('#dni_personal').val();


                                                                        $.ajax({
                                                                            url: ('http://localhost/accesos/index.php/main/get_datos_usuario'),
                                                                            data: {dni: dni_personal},
                                                                            dataType: 'Json',
                                                                            type: 'POST',
                                                                            success: function (res) {
                                                                                console.log(res[0]['nombre_personal']);
                                                                                console.log(res[0]['email_personal']);
                                                                                nombre_personal.val(res[0]['nombre_personal']);
                                                                                email_personal.val(res[0]['email_personal']);

                                                                            }
                                                                        });

                                                                    });

                                                                    $('#btn-enviar-datos-usuario').click(function (e) {

                                                                        e.preventDefault();

                                                                        var usuario_datos = $('#form-usuario-datos').serializeArray();
                                                                        var btn = this;
                                                                        $('.print').printArea();

                                                                        $.ajax({
                                                                            url: ('http://localhost/accesos/index.php/main/registro_solicitud_accesos'),
                                                                            data: {datos: usuario_datos},
                                                                            dataType: 'Json',
                                                                            type: 'POST',
                                                                            success: function (res) {

                                                                                if (res.success === true) {
                                                                                    alert("se registro con exito")
                                                                                    window.location.href = ('http://localhost/creacion_usuarios/index.php/main/solicitud_accesos');

                                                                                }
                                                                            }
                                                                        });
                                                                        $(btn).removeAttr("disabled");
                                                                    });
                                                                });
                                                            </script>