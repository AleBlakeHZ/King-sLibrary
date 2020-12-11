<div  width="100%"> 
      <nav class="navbar navbar-expand-xl navbar-light nav-reverse">
        <input type="text" class="form-control col-6" placeholder="Buscar...">
        <a href="<?php echo base_url();?>/index.php/Main/busqueda"><span><img src="<?php echo base_url();?>/Assets/images/search.png" height="35px" class="icon" alt=""></span></a>
        <button class="navbar-toggler" data-target="#demo" data-toggle="collapse" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="demo">
          <ul class="navbar-nav mr-auto">
            <li class="navbar-item active mr-sm-2" style="padding-left: 4em;">
              <a href="<?php echo base_url();?>/index.php/Main/libros" class="btn nav-link"><strong>Libros</strong></a>
            </li>
            <li class="navbar-item active" style="padding-left: 4em;">
              <a href="<?php echo base_url();?>/index.php/Main/libros" class="btn nav-link"><strong>Ebooks</strong></a>
            </li>
            <li class="navbar-item active" style="padding-left: 4em;">
              <a href="<?php echo base_url();?>/index.php/Main/qa" class="btn nav-link"><strong>Q&A</strong></a>
            </li>
            <li class="navbar-item dropdown" style="padding-left: 4em;">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                <img src="<?php echo base_url();?>/Assets/images/user.png" height="35px" alt="">
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url();?>/index.php/Main/perfil">Perfil</a>
                <a class="dropdown-item" href="<?php echo base_url();?>/index.php/Main/index">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div> 
      </nav>
    </div>
