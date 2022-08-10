<?php

require_once ('../WithDatabaseable.php');
require_once ('../Modelo.php');

echo "apagar modelo : " . $_GET['id'];

$modelo = Modelo::delete($_GET['id']);