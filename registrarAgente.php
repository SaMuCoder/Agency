<?php

require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Fotografo.php');
require_once('Agente.php');
require_once('Modelo.php');
require_once('Fotografia.php');
require_once('Trabalho.php');
require_once('fotografia_modelo.php');
require_once('fotografia_trabalho.php');

$agente = new Agente(['nome' => $_POST['nomeAgente'], 'morada' => $_POST['moradaAgente'], 'contacto' => $_POST['contactoAgente'], 'nif' => $_POST['nifAgente'], 'datainicio' => null]);

if ($agente->save()) {
    echo "Agente gravado com id: " . $agente->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o agente\n";
} 