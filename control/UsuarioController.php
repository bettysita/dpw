<?php
$tipo = $_GET['tipo'];

if ($tipo == "registrar"){
    //print_r($_POST);
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];


    if ( $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == ""
    
    
    || $cod_postal == "" || $direccion == "" || $rol == ""){
        $arResponse = array('status'=>true, 'msg'=>'Error, campos vacios');

    }else{
         $arrResponse = array('status'=>false, 'msg'=>'procedemos a registrar');
}
echo json_encode($arrResponse);

    }

