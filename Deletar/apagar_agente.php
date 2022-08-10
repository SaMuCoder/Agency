<?php

require_once ('../WithDatabaseable.php');
require_once ('../Agente.php');

echo "Apagar Agente : " . $_GET['id'];

$agente = Agente::delete($_GET['id']);