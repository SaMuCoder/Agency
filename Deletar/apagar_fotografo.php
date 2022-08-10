<?php

require_once ('../WithDatabaseable.php');
require_once ('../Fotografo.php');

echo "Apagar Fotografo : " . $_GET['id'];

$fotografo = Fotografo::delete($_GET['id']);