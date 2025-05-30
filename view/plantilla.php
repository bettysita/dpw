<?php
require_once "./control/views_control.php";

$view = new viewscontrol();
$mostrar = $view->getViewControl();

if($mostrar == "login"|| $mostrar=="404"){
    require_once "./view/".$mostrar .".php";
}else {
    include $mostrar;
}