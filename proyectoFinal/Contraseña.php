<?php
function valida($usuario, $clave1, $clave2)
{
    $acceso = '';
    if ($usuario == 'papita' && $clave1 == '2222A' && $clave2 == '2222A') $acceso = 'ok';
    return $acceso;
}
?>