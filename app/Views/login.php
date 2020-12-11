<div class="log container col-lg-6 col-md-7 col-sm-8 col-8 p-5 mt-6 shadow-lg p-3 mb-5">
      <p id="login">Log in</p>
      <form method="POST" action="<?php echo base_url();?>/index.php/crud/login" role= "form"  onsubmit="validacionLogin();">
        <div class="input-group mb-4">
          <label ><strong>Username</strong></label>
          <input type="text" class="form-control" placeholder="Username" type="text" name="user" id="user" value="" required>
        </div>
        
        
        <div class="input-group mb-4">
          <label><strong>Password</strong></label>
          <input type="text" class="form-control" placeholder="Password..." type="text" name="password" id="password" value="" required>
        </div>

        <div class="container" style="align-items: center; text-align: center; margin: auto;">
          <a href="<?php echo base_url();?>/index.php/Main/reg"><button type="submit" class="btn text-white" style="background-color: #323538; width: 100px;"><strong>Log in</strong></button></a>
        </div>
      </form>
          <p style="text-align: center; font-size: small;">¿Aún no tienes cuenta? <a href="<?php echo base_url();?>/index.php/Main/registro" class="text-white">Registrate</a></p>

      </div>