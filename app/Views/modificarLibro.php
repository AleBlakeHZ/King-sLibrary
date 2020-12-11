<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Modificar Libro</h2>
                    <hr>
                    <form method="POST" action="<?php echo base_url();?>/index.php/crud/modLibro" role= "form"  onsubmit="return validacionModLibro();">
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">idLibro</label>
                                    <input class="input--style-4" type="number" name="id" id="id" value="" required>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Titulo</label>
                                    <input class="input--style-4" type="text" name="nombre" id="nombre" value="" required>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Edicion</label>
                                    <input class="input--style-4" type="text" name="edicion" id="edicion" value="" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
        
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Formato</label>
                                    <input class="input--style-4" type="text" name="formato" id="formato" value="" required>
                                </div>
                                <hr>
                            </div>
                                
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">idAutor</label>
                                    <input class="input--style-4" type="text" name="idAutor" id="idAutor" value="" required>
                                </div>
                                <hr>
                            </div>

                        </div>

                        <div class="row row-space">
        
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label col-2">Descripción</label>
                                    <input class="input--style-4" type="text" name="desc" id="desc" value="" required>
                                </div>
                                <hr>
                            </div>

                        </div>
                        <hr>  
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 text-white" style="background-color: #323538;" type="submit">Modificar</button>
                        </div>
                    </form>
                    <a href="<?php echo base_url();?>/index.php/Main/admin"><button class="btn btn--radius-2 text-white" style="background-color: #c4c4c4;">Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>
