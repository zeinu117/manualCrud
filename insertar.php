<?php  include "header.php"?>
<!-- Page Content -->
<div class="container" style="font-family: 'STIX Two Math', serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Insertar datos de php a mysql usando mysqli</h1>
            <p class="lead">
                Para poder insertar datos desde php con mysqli, solo se necesitamos crear la cadena de sql
                valida y ejecutarla con una conexion valida , para los parametros a ser insertados , deben ir en variables
                como convenxion, no necesitamos mas que saber la respuesta de mysqli_query para saber si se llevo acabo con exito 
                la inserccion.
                <h3>Ejemplo de insertar con php a mysql</h3>
                <p>$sql = "INSERT INTO t_tabla (campo1,campo2) VALUES ('$variable1','$variable2')";</p>
                <p>$respuesta = mysqli_query($conexion,$sql);</p>
                <p>la variable $ respuesta nos retorna un 1 o un 0 si se ejecuto o no </p>
            </p>
        </div>
    </div>
</div>
<?php  include "footer.php"?>