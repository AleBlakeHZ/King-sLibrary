<div class="container-fluid" style="margin-bottom: 1em; background-color: #BBBFCA; padding: 1em; margin-top: 1em;">
    <img src="<?php echo base_url();?>/Assets/images/user.png" alt="">
    <p style="display: inline-block; font-size: 40px"><strong>Administrador</strong></p>

</div>

<div class="reservas">
        <p class="text-center"><strong>Libros</strong></p>
</div>

<div style="width: 100%; height: 200px; overflow-y: scroll;">
<table class="container-fluid table-striped" style="border-color= #c4c4c4; border: 1;">
          <tr>
              <th class=""><strong>idLibro</strong></th>
              <th class=""><strong>Título</strong></th>
              <th class=""><strong>Edición</strong></th>
              <th class=""><strong>Formato</strong></th>
              <th class=""><strong>idAutor</strong></th>
              <th class=""><strong>Descripción</strong></th>
          </tr>

          <?php
          foreach($libros as $libro){
              echo "<tr>";
              echo "<td>".$libro['idLibro'];
              echo "<td>".$libro['titulo'];
              echo "<td>".$libro['edicion'];
              echo "<td>".$libro['formato'];
              echo "<td>".$libro['idAutor'];
              echo "<td>".$libro['descripcion'];
              echo "</tr>";
          }
          ?>
</table>
</div>

<div style="width: 100%;">
    <a href="<?php echo base_url();?>/index.php/Main/modLibro"><button class="btn" style="border: solid;">Modificar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/bajaLibro"><button class="btn" style="background-color: #c4c4c4;">Eliminar</button></a>
    <a href="<?php echo base_url();?>/index.php/Main/regLibro"><button class="btn text-white" style="background-color: #323538;">Insertar</button></a>
</div>
<hr>