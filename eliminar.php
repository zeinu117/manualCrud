<?php  include "header.php"?>
<!-- Page Content -->
<div class="container" style="font-family: 'STIX Two Math', serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Eliminar datos de php a mysql usando mysqli</h1>
            <p class="lead">
                Para poder eliminar datos desde php con mysqli, solo se necesitamos crear la cadena de sql
                valida y ejecutarla con una conexion valida , asi recibiremos una respuesta en 1 o 0 
                , en este tipo de sentencia es totalmente necesario agregar where
                <h3>Ejemplo de eliminacion con php a mysql</h3>
                <p>$sql = "DELETE FROM t_tabla WHERE idtable = '$idVariable'";</p>
                <p>$respuesta = mysqli_query($conexion,$sql);</p>
                <p>la variable $respuesta nos retorna un 1 o un 0 si se ejecuto o no </p>
            </p>
        </div>
    </div>
</div>
<?php  include "footer.php"?>