<?php

/* -------------------------------------------------------------------------- */
/*                                Mostrar erros                               */
/* -------------------------------------------------------------------------- */
ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set('error_log', "C:\xampp\htdocs\gestsalc\admin\php_error_log");


/* -------------------------------------------------------------------------- */
/*                                    CORS                                    */
/* -------------------------------------------------------------------------- */
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Acess-Control-Allow-Methods: POST');

/* -------------------------------------------------------------------------- */
/*                                Requerimentos                               */
/* -------------------------------------------------------------------------- */

require_once "controllers/template.controller.php";

$index = new TemplateController();
$index->index();