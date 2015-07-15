        


<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>login</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="widget-body">
            <form id="form-login-datos" class="form-horizontal no-margin center-align-text text-center"  >     

                <div class="row-fluid">
                    <div class="col-lg-8 col-lg-offset-3 ">
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="widget">

                                    <div class="widget-body">


                                        <div class="control-group ruc">
                                            <label class="control-label">Usuario:</label>
                                            <div class="controls">
                                                <input class="input-block-level" type="text" title="Ingrese usuario" name="Usuario" id="usuario" required='true' >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Password:</label>
                                            <div class="controls">
                                                <input class="input-block-level" type="password" name="password" id="password"  required="true">
                                            </div>
                                        </div>


                                        <!--</form>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-lg-offset-2 text-center">

                        <button   class = "btn btn-lg btn-outline fa fa-download" id="btn-login">Login</button>                        
                    </div>
                </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $('#btn-login').click(function (e) {
            e.preventDefault();
            console.log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
            var login_datos = $('#form-login-datos').serializeArray();
            $.ajax({
                url: ('http://localhost/accesos/index.php/login/check_login'),
                data: {datos: login_datos},
                dataType: 'Json',
                type: 'POST',
                success: function (res) {

                    if (res.success === true) {
                        alert("se registro con exito")
                        //window.location.href = ('http://localhost/creacion_usuarios/index.php/main/solicitud_accesos');

                    }
                }

            });
        });


    });

</script>
