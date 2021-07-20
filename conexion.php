<?php  include "header.php"?>
<!-- Page Content -->
<div class="container" style="font-family: 'STIX Two Math', serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Conectar a mysql con php</h1>
            <p class="lead">
                <h3>Cuales son los argumentos necesarios para hacer una conexion.</h3>
                <p>Para poder llevar acabo la conexion requerimos 4 argumentos:</p>
                <ol>
                    <li>El servidor web normalmente es una ip, un dominiio de host o localhost</li>
                    <li>El usuario de base de datos</li>
                    <li>El password del usuario</li>
                    <li>El nombre de la base de datos</li>
                </ol>
                <h3>Ejemplo de conexion sencilla</h3>
                <p>para poder utiluzar el api de mysqli solo necesitamos llamar la funcion que vamos a utilizar,
                    en este caso con unsar la funcion mysqli_connect,seguidos de los 4 parametros necesarios
                </p>
                <p>
                <p>$servidor = "localhost";</p>
                <p>$usuario = "root";</p>
                <p>$password = "";</p>
                <p>$bd = "mibd";</p>
                <p>$conexion = mysqli_connect($servidor,
                                        $usuario,
                                        $password,
                                        $bd);
                </p>
            </p>
        </div>
    </div>
</div>
<?php  include "footer.php"?>