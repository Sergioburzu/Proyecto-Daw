<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
require_once("model/clientes.php");
class AppControlador
{
    static function index()
    {
        require_once("view/app.php");
    }
}    