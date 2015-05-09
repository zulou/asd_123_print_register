<div class="class_container">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span>FORMATO 02-AU</span>                    
                </div>
            </div>

        </div>
        <div class="widget">
            <div class="widget-body">
                <form class="form-horizontal no-margin center-align-text" id="form-usuario-datos">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">
                                        <span class="icon-pencil-2">Formulario</span>
                                    </div>
                                </div>
                                <div class="widget-body">

                                    <div class="control-group">
                                        <label class="control-label">Cargo:</label>
                                        <div class="controls">

                                            <select class="span12" name="cargo" id="select_cargo">


                                                <?php
                                                foreach ($datos_cargo as $row) {
                                                    $option = "<option  value='";
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
                                        <div style="float:left">

                                            <div class="control-group">

                                                <div class = "controls">
                                                    <h6>Permisos solicitados:</h6>

                                                    <div id="contenedor">

                                                    </div>
                                                </div>

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

        $('#btn-enviar-datos-usuario').click(function (e) {

            e.preventDefault();

            var usuario_datos = $('#form-usuario-datos').serializeArray();
            var btn = this;
            $.ajax({
                url: ('http://localhost/accesos/index.php/main/profile_register'),
                data: {'datos': usuario_datos},
                dataType: 'Json',
                type: 'POST',
                success: function (res) {

                    if (res.success === true) {
                        alert("se registro con exito");
                        window.location.href = ('http://localhost/accesos/index.php/main/create_profile');

                    }
                }
            });
            $(btn).removeAttr("disabled");
        });
    });
</script>