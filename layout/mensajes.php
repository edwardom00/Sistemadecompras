<?php
if ((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))) {
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    ?>
    <script>
        <?php if ($icono == 'error'): ?>
            Swal.fire({
                position: 'center',
                icon: '<?php echo $icono; ?>',
                title: '<?php echo $respuesta; ?>',
                showConfirmButton: true, 
                
            })
        <?php else: ?>
            Swal.fire({
                position: 'center',
                icon: '<?php echo $icono; ?>',
                title: '<?php echo $respuesta; ?>',
                showConfirmButton: false,
                timer: 3000
            })
        <?php endif; ?>
    </script>
    <?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}
?>