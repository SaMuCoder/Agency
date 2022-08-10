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
require_once('historico_medidas.php');

$historico = new historico_medidas(['medida1' => $_POST['medida1'], 'medida2' => $_POST['medida2'], 'medida3' => $_POST['medida3'], 'medida1nova' => $_POST['medida1nova'], 'medida2nova' => $_POST['medida2nova'], 'medida3nova' => $_POST['medida3nova']]);

if ($modelo->save()) {
    echo "Modelo atualizado com id: " . $modelo->getId() . "\n";
} else {
    echo "Ocorreu um erro ao atualizar o Modelo\n";
}