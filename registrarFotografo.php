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

$fotografo = new Fotografo(['nome' => $_POST['nomeFotografo'], 'morada' => $_POST['moradaFotografo'], 'contacto' => $_POST['contactoFotografo'], 'nif' => $_POST['nifFotografo'], 'datainicio' => $_POST['dataInicioFotografo']]);

if ($fotografo->save()) {
    echo "Fotografo gravado com id: " . $fotografo->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o fotografo\n";
}

?>