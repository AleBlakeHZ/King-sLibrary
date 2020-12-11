<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Eliminar User</h2>
                    <hr>
                    <form method="POST" action="<?php echo base_url();?>/index.php/crud/baja" role= "form"  onsubmit="validacionBajaUser();">
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">idUsuario</label>
                                    <input class="input--style-4" type="number" name="id" id="id" value="" required>
                                </div>
                                <hr>
                            </div>

                            <div class="p-t-15">
                            <button class="btn btn--radius-2 text-white" style="background-color: #323538;" type="submit">Eliminar</button>
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo base_url();?>/index.php/Main/admin"><button class="btn btn--radius-2 text-white" style="background-color: #c4c4c4;">Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>