<?php
    require_once('../config/configdb.php');
    require_once('consultas.php');
    require_once('index.php');

    if(isset($_GET['update']))
    {
        $objeto_update = new Consultas(); //Instaciamo siun objeto de la clase Consultas

        $update = $_GET['update']; //Guardamis la cinsulta que el usuario untroduce por teclado en una variable

        $rows = $objeto_update->modificacion($update); //rEALIZAMOS EL METODO DE LA CLASE pasandole la consulta 

        //$rows = $objeto_update->modificacion($update);

        echo('<h2>Las filas afectadas por la consulta de modificacion son: <b>'.$objeto_update->filasafectadas.'</b></h2>'); //Mostramos el atributo filasafectadas de la clase Consultas 

    }

    
?>