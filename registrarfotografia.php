<?php

require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Fotografo.php');
require_once('Agente.php');
require_once('Modelo.php');
require_once('Fotografia.php');
require_once('Trabalho.php');
require_once('Fotografo.php');
require_once('fotografia_modelo.php');
require_once('fotografia_trabalho.php');


$fotografia = new Fotografia(['nome' => $_POST['nomeFoto'], 'resolucao' => $_POST['resolucao'], 'cores' => $_POST['cores'], 'tipofoto' => $_POST['tipo'], 'localizacao' => $_POST['localizacao'], 'idfotografo' => $_POST['agente']]);

if ($fotografia->save()) {
    echo "Fotografia gravada com id: " . $fotografia->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar a fotografia\n";
}

?>