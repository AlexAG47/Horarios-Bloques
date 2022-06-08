<?php 
    if(isset($_SESSION['tipo_alerta']))  { ?> <!-- Revisa si tiene valor session -->
        <script>
            confirmaAlerta(<?php echo $_SESSION['tipo_alerta']; ?>);
        </script>
        <?php unset($_SESSION['tipo_alerta']);?> <!-- Borra la sesion para evitar alerta al cargar de nuevo pagina -->
<?php }  ?>
  