<?php

require_once ('../WithDatabaseable.php');
require_once ('../Trabalho.php');

echo "Apagar Trabalho : " . $_GET['id'];

$trabalho = Trabalho::delete($_GET['id']);