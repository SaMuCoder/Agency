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

/* $agente = new Agente(['nome' => $_POST['nomeAgente'], 'morada' => $_POST['moradaAgente'], 'contacto' => $_POST['contactoAgente'], 'nif' => $_POST['nifAgente']]); */

$agente = new Agente(['nome' => 'Jack', 'morada' => 'Caga nisso', 'contacto' => '1231', 'nif' => '123123', 'datainicio' => '2020-23-12']);
//$modelo = new Modelo(['nome' => $_POST['nomeModelo'], 'morada' => $_POST['moradaModelo'], 'contacto' => $_POST['contactoModelo'], 'nif' => $_POST['nifModelo'], 'sexo' => $_POST['sexoModelo'], 'nacionalidade' => $_POST['nacionalidadeModelo'], 'altura' => $_POST['alturaModelo'],
//'medida1' => $_POST['medida1'], 'medida2' => $_POST['medida2'], 'medida3' => $_POST['medida3']]);

//$fotografo = new Fotografo(['nome' => $_POST['nomeFotografo'], 'morada' => $_POST['moradaFotografo'], //'contacto' => $_POST['contactoFotografo'], 'nif' => $_POST['nifFotografo']]);


/* if ($fotografo->save()) {
    echo "Fotografo gravado com id: " . $fotografo->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o fotografo\n";
} */

if ($agente->save()) {
    echo "Agente gravado com id: " . $agente->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o agente\n";
} 

/* if ($modelo->save()) {
    echo "Modelo gravado com id: " . $modelo->getId() . "\n";
} else {
    echo "Ocorreu um erro a gravar o Modelo\n";
} */
/* 
$resultados =$fotografo->search(['nome', 'nif'], ['!=', 'like'], ['jack', '%9%']);
//print_r($resultados);

$resultados_agente = $agente->search([], [], []); */
/* print_r($resultados_agente); */
/* 
$resultados_agente[0]->setMulta('Teste cena djfjgjgfjfgj'); */
/* var_dump($resultados_agente[0]); */
/* if ($resultados_agente[0]->update()) {
    echo "Agente alterado com sucesso\n";
} else {
    echo "Ocorreu um erro a alterar o agente\n";
}  */