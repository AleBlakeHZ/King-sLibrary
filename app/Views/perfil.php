<hr>
    <section>
         
        <div class="subtitle fluid-container">
            <p class="text-dark text-center"><strong>Mi perfil</strong></p>
        </div>



        <div class="infouser">
          <img class="iconoperfil" src="<?php echo base_url();?>/Assets/images/gg.png">
          <div class="input-groupmb-4">
          <h2 for="" style="display: inline-block">Alejandra Avila Ortega</h2>
            <img class="editIcon" style="display: inline-block; margin-left: 2em;" src="<?php echo base_url();?>/Assets/images/edit.png">
          </div>
        </div>
        </section>

        <section class="user">
          <div class="estatus">
            <h4 class="text-center" href="#"> Estudiante  <img class="student" src="<?php echo base_url();?>/Assets/images/alumno.png"> 
            </h4> 
          </div>
          <div class="grado">
            <img class="grade" src="<?php echo base_url();?>/Assets/images/grade.jpg">
            <h4 class="text-center" href="#"> 3ro </h4>
            </div>
            <div class="grupo">
            <img class="group" src="<?php echo base_url();?>/Assets/images/group.png">
            <h4 class="text-center" href="#"> B </h4> 
            </div>
          <div class="mat">
            <img class="matricula" src="<?php echo base_url();?>/Assets/images/matricula.png">
            <h4 class="text-center" href="#"> 1931117161 </h4> 
            </div>
        </section>
        
        <div class="reservas">
        <p class="text-center"><strong>Mis reservaciones</strong></p>
        </div>
        
        <table class="container-fluid" border=1;>
          <tr>
              <th><strong>idPrestamo</strong></th>
              <th><strong>idUsuario</strong></th>
              <th><strong>idLibro</strong></th>
              <th><strong>Fecha</strong></th>
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
        