<div  width="100%"> 
    <nav class="navbar navbar-expand-xl navbar-light nav-reverse">
      <button class="navbar-toggler" data-target="#demo" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-auto">
        <div class="collapse navbar-collapse" id="demo">
          <li class="navbar-item active col-3" style="padding-left: 4em; padding-right:4em">
            <a href="<?php echo base_url();?>/index.php/Main/ad_usuario" class="btn nav-link"><strong>Usuarios</strong></a>
          </li>
          <li class="navbar-item active mr-sm-2 col-3"  style="padding-left: 4em; padding-right:4em">
            <a href="<?php echo base_url();?>/index.php/Main/mantenimientoAdmin" class="btn nav-link" style="padding-left: 4em;"><strong>Autores</strong></a>
          </li>
          <li class="navbar-item active mr-sm-2 col-3"  style="padding-left: 4em; padding-right:4em">
            <a href="<?php echo base_url();?>/index.php/Main/ad_libro" class="btn nav-link" style="padding-left: 4em;"><strong>Libros</strong></a>
          </li>
          <li class="navbar-item active mr-sm-2 col-3"  style="padding-left: 4em; padding-right:4em">
            <a href="<?php echo base_url();?>/index.php/Main/ad_prestamo" class="btn nav-link" style="padding-left: 4em;"><strong>Prestamos</strong></a>
          </li>
        </div>
          <li class="navbar-item dropdown" style="padding-left: 4em; padding-right:4em;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
              <img src="<?php echo base_url();?>/Assets/images/user.png" height="35px" alt="">
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url();?>/index.php/Main/index">Cerrar Sesión</a>
            </div>
          </li>
        </ul>
    </nav>
  </div>