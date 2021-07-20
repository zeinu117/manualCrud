<?php  include "header.php"?>
<!-- Page Content -->
<div class="container" style="font-family: 'STIX Two Math', serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Ejecucion de un query con mysqli</h1>
            <p class="lead">
                para poder ejecutar un query de php al servidor de base de datos mysql o mariadb
                con mysqli requerimos utilizar la funcion mysqli_query esta ya viene en el API nativo de php  en su version_compare
                5 o superior, esta funcion requiere 2 parametros para ejecutarje.
                <ol>
                    <li>Conexion al servidor</li>
                    <li>Cadena de sql valida</li>
                    
                </ol>
                <h3>Ejemplo de uso de mysqli_query</h3>
                <p>
                    $sql = "SELECT campo1, campo2, * FROM t_tabla";
                </p>
                <p>
                    $respuesta = mysqli_query($conexion,$sql);
                </p>
                <p>
                    Siendo $sql la variable que contiene la cadena que forma un sql valido, la variable
                    $respuesta obtiene un 0 o un 1  dependiendo del mysqli_query se ejecuto correctamente,la variable 
                    de $conexion esta expuesta <a href="conexion.php">aqui</a>
                </p>
                <p>
                    Entiendase que cualquier cadena sql que se desea ejecutar (select, insert, update,delete),
                    debe ser pasada a la funcion mysqli_query,
                    siempre que se necesite hacer alguna peticion
                </p>
            </p>
        </div>
    </div>
</div>
<?php  include "footer.php"?>