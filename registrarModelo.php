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

$modelo = new Modelo(['nome' => $_POST['nomeModelo'], 'morada' => $_POST['moradaModelo'], 'contacto' => $_POST['contactoModelo'], 'nif' => $_POST['nifModelo'], 'sexo' => $_POST['sexoModelo'], 'nacionalidade' => $_POST['nacionalidadeModelo'], 'altura' => $_POST['alturaModelo'],
'medida1' => $_POST['medida1'], 'medida2' => $_POST['medida2'], 'medida3' => $_POST['medida3'], 'idagente' => $_POST['agente']]);

if ($modelo->save()) {
    echo "Modelo gravado com id: " . $modelo->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o Modelo\n";
}