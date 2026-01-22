<?php 
if (session_status() === PHP_SESSION_NONE)  
    session_start(); 
 
require_once("config.php"); 
require_once("controller/app.php"); 
require_once("controller/clientes.php"); 
 
$controlador = ''; 
if(isset($_GET['c'])) : 
    $controlador = $_GET['c']; 
 
    $metodo = ''; 
    if(isset($_GET['m']))
        $metodo = $_GET['m']; 
 
    switch($controlador) : 
        case 'clientes' : 
            if (method_exists(ClientesControlador, $metodo)) : 
                ClientesControlador::{$metodo}(); 
            else:
                ClientesControlador::index(); 
               endif; 
 
            break; 
        default: 
            AppControlador::index(); 
    endswitch;         
else : 
    AppControlador::index(); 
endif; 
?> 