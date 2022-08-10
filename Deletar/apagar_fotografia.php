<?php

require_once ('../WithDatabaseable.php');
require_once ('../Fotografia.php');

echo "Apagar Fotografia : " . $_GET['id'];

$fotografia = Fotografia::delete($_GET['id']);