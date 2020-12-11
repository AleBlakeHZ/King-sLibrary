<div  width="100%"> 
    <nav class="navbar navbar-expand-xl navbar-light nav-reverse">
      <input type="text" class="form-control col-6" placeholder="Buscar...">
      <a href="<?php echo base_url();?>/index.php/Main/busqueda_nr"><span><img src="<?php echo base_url();?>/Assets/images/search.png" height="35px" class="icon" alt=""></span></a>
      <button class="navbar-toggler" data-target="#demo" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="demo">
        <ul class="navbar-nav mr-auto">
          <li class="navbar-item active mr-sm-2" style="padding-left: 4em;">
            <a href="<?php echo base_url();?>/index.php/Main/libros_nr" class="btn nav-link"><strong>Libros</strong></a>
          </li>
          <li class="navbar-item active">
            <a href="<?php echo base_url();?>/index.php/Main/libros_nr" class="btn nav-link" style="padding-left: 4em;"><strong>Ebooks</strong></a>
          </li>
          <li class="navbar-item active">
            <a href="<?php echo base_url();?>/index.php/Main/qa_nr" class="btn nav-link" style="padding-left: 4em;"><strong>Q&A</strong></a>
          </li>
          <li class="navbar-item dropdown" style="padding-left: 4em;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
              <img src="<?php echo base_url();?>/Assets/images/user_nr.png" height="35px" alt="">
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url();?>/index.php/Main/login">Log in</a>
              <a class="dropdown-item" href="<?php echo base_url();?>/index.php/Main/registro">Registrar</a>
            </div>
          </li>
        </ul>
      </div> 
    </nav>
  </div>