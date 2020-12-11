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
              <th class=><strong>idPrestamo</strong></th>
              <th class=><strong>idUsuario</strong></th>
              <th class=><strong>idLibro</strong></th>
              <th class=><strong>Fecha</strong></th>
          </tr>

          <?php
          foreach($prestamos as $reserva){
              echo "<tr>";
              echo "<td>".$reserva['idPrestamo'];
              echo "<td>".$reserva['idUsuario'];
              echo "<td>".$reserva['idLibro'];
              echo "<td>".$reserva['fecha'];
              echo "</tr>";
          }
          ?>
</table>
</div>

<div style="width: 100%;">
    <a href="<?php echo base_url();?>/index.php/Main/mantenimientoAdmin"><button class="btn" style="border: solid;">Modificar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/mantenimientoAdmin"><button class="btn" style="background-color: #c4c4c4;">Eliminar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/mantenimientoAdmin"><button class="btn text-white" style="background-color: #323538;">Insertar</button></a>
</div>
<hr>