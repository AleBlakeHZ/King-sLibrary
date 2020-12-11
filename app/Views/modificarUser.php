<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Modificar Usuario</h2>
                    <hr>
                    <form method="POST" action="<?php echo base_url();?>/index.php/crud/modificar" role= "form"  onsubmit="return validacionUsuarioMod();">
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">idUsuario</label>
                                    <input class="input--style-4" type="text" name="id" id="id" value="" required>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Nombre de usuario</label>
                                    <input class="input--style-4" type="text" name="user" id="user" value="" required>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Email</label>
                                    <input class="input--style-4" type="text" name="email" id="email" value="" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
        
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Password</label>
                                    <input class="input--style-4" type="text" name="password" id="password" value="" required>
                                </div>
                                <hr>
                            </div>
                                
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Grado</label>
                                    <input class="input--style-4" type="text" name="grado" id="grado" value="" required>
                                </div>
                                <hr>
                            </div>

                        </div>

                        <div class="row row-space">
        
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Grupo</label>
                                    <input class="input--style-4" type="text" name="grupo" id="grupo" value="" required>
                                </div>
                                <hr>
                            </div>
                                
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Tipo</label>
                                    <input class="input--style-4" type="text" name="tipo" id="tipo" value="" required>
                                </div>
                                <hr>
                            </div>

                        </div>
                        <hr>  
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 text-white" style="background-color: #323538;" type="submit">Submit</button>
                        </div>
                    </form>
                    <a href="<?php echo base_url();?>/index.php/Main/admin"><button class="btn btn--radius-2 text-white" style="background-color: #c4c4c4;">Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>