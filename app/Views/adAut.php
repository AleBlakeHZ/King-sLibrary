<table class="container-fluid" border=1;>
          <tr>
              <th class="col-3"><strong>idAutor</strong></th>
              <th class="col-3"><strong>Nombre</strong></th>
          </tr>

          <?php
          foreach($autores as $escritor){
              echo "<tr>";
              echo "<td>".$escritor['idAutor'];
              echo "<td>".$escritor['nombre'];
              echo "</tr>";
          }
          ?>
</table>