<?php 
//Comprobamos que el valor no venga vacío
if(isset( $_POST['accion']) && !empty($_POST['accion'] )) {
    $funcion = $_POST['accion'];
    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch($funcion) {
        case '1': 
            certificadosEmitidos();
            break;
        case '2': 
            certificadosPendientes();
            break;
        case '3':
            getCurso();
            break;
        
    }
}

function certificadosEmitidos(){
    echo 1;
}
function certificadosPendientes(){
    echo 1;
}
function getCurso(){
    echo 1;
}