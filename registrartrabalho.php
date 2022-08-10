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

$trabalho = new Trabalho(['datainicio' => $_POST['dataInicio'], 'datafim' => $_POST['dataFim'], 'idmodelo' => $_POST['agente']]);

if ($trabalho->save()) {
    echo "Trabalho gravado com id: " . $trabalho->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o trabalho\n";
}

?>