<?php

    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    $usuario = $_POST['usuario'];
    $dni = $_POST['dni'];
    $clave = $_POST['clave'];

    // DNI => Clave
    $usuarios = [
        '39321754' => 'clave123',
        '00000000' => 'todocero',
    ];

    // Validate DNI
    function validateDNI() {
        global $dni, $numbers, $usuarios;
        if (isset($usuarios[$dni])) {
            for ($i=0; $i < strlen($dni); $i++) { 
                if (!in_array($dni[$i], $numbers)) {
                    echo $dni[$i];
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    // Data
    if (validateDNI() && $usuarios[$dni] === $clave) {
        echo 'Bienvenido '.$usuario.'</br>';
        echo 'Tu DNI es: '.$dni.'</br>';
        echo 'Tu clave es: '.$clave.'</br>';
    } else {
        if (!validateDNI()) {
            echo 'DNI incorrecto'.'</br>';
        } else {
            echo 'Clave incorrecta'.'</br>';
        }
    }
?>