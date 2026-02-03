<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-4">
    <a href="index.php?accion=consulta" class="btn btn-secondary btn-sm mb-3">← Volver</a>

    <h3>Registro de Usuario </h3>

    <form method="GET" action="index.php" class="row g-2 mb-3">
    <input type="hidden" name="accion" value="consulta">


</form>

    <table class="table table-bordered table-hover mt-3">
        <thead class="table-light text-center">
            <tr>
                <th>ID</th>
                <th>IdUsuario</th>
                <th>Fecha </th>
           
            </tr>
        </thead>
        <tbody>

        <?php if (isset($consulta)&&(is_array($consulta)|| is_object($consulta))){
            foreach ($consulta as $row){
          ?>
          <tr>
           <td><?php echo $row ['id'];?></td> 
           <td><?php echo $row ['IdUsuario'];?></td> 
           <td><?php echo $row ['fecha'];?></td> 
          </tr>      
          <?php
            }
         }else{ 
            echo "<tr><td colspn='3'>no hay datos disponible.</td></tr>";
            
            }
        
        ?>
          

        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
