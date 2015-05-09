<div class="main" > 
<div class="row-fluid">
    <div class="span8">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="icon-table"></span> Registrar Usuario
                </div>
            </div>
        </div>
        <div class="widget-body">
            <form id="form-proveedor-datos" class="form-horizontal no-margin center-align-text"  >
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-header">
                                <div class="title">
                                    <span class="icon-pencil-2"></span> Datos Persona
                                </div>
                            </div>
                            <div class="widget-body">
                                
                                <div class="control-group ruc">
                                    <label class="control-label">DNI:</label>
                                    <div class="controls">
                                        <input class="input-block-level" type="text" title="Ingrese dni" name="dni_persona" id="dni_persona" required='true' >
                                    </div>
                                    <div class="controls">
                                        <input class="input-block-level" type="hidden"  name="pk_persona" id="pk_persona" required='true' >
                                    </div>
                                </div>

                                <div class="control-group ruc">
                                    <label class="control-label">Nombres:</label>
                                    <div class="controls">
                                        <input class="input-block-level" type="text" title="Ingrese el nombre" name="nombre" id="nombre_usuario" required='true' >
                                    </div>
                                </div>
                                <div class="control-group ruc">
                                    <label class="control-label">Apellido Paterno</label>
                                    <div class="controls">
                                        <input class="input-block-level" type="text" title="Ingrese el nombre" name="ap_pat" id="ap_pat_usuario" required='true' >
                                    </div>
                                </div>
                                <div class="control-group ruc">
                                    <label class="control-label">Apellido materno:</label>
                                    <div class="controls">
                                        <input class="input-block-level" type="text" title="Ingrese el apellido" name="ap_mat" id="ap_mat_usuario" required='true' >
                                    </div>
                                </div>
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


                <div class="form-actions no-margin">

                    <button class="btn btn-primary" id="btn-registrar-usuario">Registrar</button>
                    <button class="btn btn-default" id="cancelar-producto">Cancelar</button>
                </div>


        </div>
    </div>
  </div>
    
</div>