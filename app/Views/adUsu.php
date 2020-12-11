<div class="container-fluid" style="margin-bottom: 1em; background-color: #BBBFCA; padding: 1em; margin-top: 1em;">
    <img src="<?php echo base_url();?>/Assets/images/user.png" alt="">
    <p style="display: inline-block; font-size: 40px"><strong>Administrador</strong></p>

</div>

<div class="reservas">
        <p class="text-center"><strong>Prestamos</strong></p>
</div>

<div style="width: 100%; height: 200px; overflow-y: scroll;">
<table class="container-fluid table-striped" style="border-color= #c4c4c4; border: 1;">

          <tr>
              <th><strong>idUsuario</strong></th>
              <th><strong>Nombre</strong></th>
              <th><strong>Grado</strong></th>
              <th><strong>Grupo</strong></th>
              <th><strong>Tipo</strong></th>
              <th><strong>Contraseña</strong></th>
              <th><strong>Correo</strong></th>
          </tr>

            
           <?php
            foreach($people as $persona){
              echo "<tr>";
              echo "<td>".$persona['id'];
              echo "<td>".$persona['nombre'];
              echo "<td>".$persona['grado'];
              echo "<td>".$persona['grupo'];
              echo "<td>".$persona['tipo'];
              echo "<td>".$persona['contrasenia'];      
              echo "<td>".$persona['correo'];
              echo "</tr>";
          }
          ?>
          
</table>
</div>

<div style="width: 100%;">
    <a href="<?php echo base_url();?>/index.php/Main/modUsuario"><button class="btn" style="border: solid;">Modificar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/bajaUser"><button class="btn" style="background-color: #c4c4c4;">Eliminar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/altaAd"><button class="btn text-white" style="background-color: #323538;">Insertar</button></a>
</div>
<hr>