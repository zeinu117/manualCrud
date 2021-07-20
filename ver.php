<?php  include "header.php"?>
<!-- Page Content -->
<div class="container" style="font-family: 'STIX Two Math', serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Maneras de mostrar datos con PHP y mysqli</h1>
            <p class="lead">
                <h3>Mostrar datos con mysqli_fetch_row</h3>
                <p>esta funcion nos permite convertir una consukta mysql a un arreglo de una dimencion 
                    por lo tanto podemos obtener el valor d eun campo de la consulta por medio de un indice, la function mysqli_fetch_row
                    lleva como parametro una repuesta de una ejecucion de mysql y un objeto de conexion.
                </p>
                <h3>Ejemplo de uso de mysqli_fetch_riw</h3>
                <p>
                    <p>$sql = "SELECT campo1,campo2,campo3 FROM t_tabla";</p>
                    <p>$respuesta = mysqli_query($conexion,$sql);</p>
                    <p>$datos = mysqli_fetch_row($respuesta);</p>
                    <p> echo $datos[0];// nos retorna la informacion del campo 1</p>
                </p>
                <h3>Ejemplo de loop de datos con mysqli_fetch_row</h3>
                <p>
                    <p> while($datos = mysqli_fetch_row($respuesta)){ //mientras datos sea ejecutado, continuara</p>
                    <p>echo $datos[0];//esto nos permite obtener los datos de la columna</p>
                    <p>}</p>
                </p>
                <hr>
                <h3>Mostrar datos con mysqli_fetch_array</h3>
                <p>esta funcion nos permite convertir una consukta mysql a un arreglo asociativo,
                    por lo tanto podemos obtener el valor d eun campo de la consulta por medio de una llave, la function mysqli_fetch_array
                    lleva como parametro una repuesta de una ejecucion de mysql y un objeto de conexion</p>
                    <h3>Ejemplo de loop de datos con mysqli_fetch_array</h3>
                <p>
                <p>$sql = "SELECT campo1,campo2,campo3 FROM t_tabla";</p>
                    <p>$respuesta = mysqli_query($conexion,$sql);</p>
                    <p> while($datos = mysqli_fetch_array($respuesta)){ //mientras datos sea ejecutado, continuara</p>
                    <p>echo $datos['campo1'];//esto nos permite obtener los datos de la columna</p>
                    <p>}</p>
                </p>
            </p>
        </div>
    </div>
</div>
<?php  include "footer.php"?>