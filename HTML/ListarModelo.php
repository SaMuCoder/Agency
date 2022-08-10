<?php
require_once('../WithDatabaseable.php');
require_once('../Databaseable.php');
require_once('../MyConnect.php');
require_once('../Agente.php');
require_once('../Modelo.php');
require_once('../Fotografo.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Listar Modelos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container bootstrap snippets bootdey">
        <div class="header">
            <a href="../homepage/agencia.html">
                <h3 class="text-muted prj-name">Agência</h3>
            </a>
            <ul class="nav nav-pills pull-right">
                <li><a href="ListarAgentes.php"> 📃 Listar Agente </a></li>
                <li><a href="ListarModelo.php"> 📃 Listar Modelos </a></li>
                <li><a href="ListarFotografo.php"> 📃 Listar Fotografos </a></li>
                <li><a href="ListarFotografias.php"> 📃 Listar Fotografias </a></li>
                <li><a href="ListarTrabalho.php"> 📃 Listar Trabalhos </a></li>
                <li><a href="../HTML copy/agente.php"> ➕ Adicionar </a></li>
                <li><a href="../HTML copy/historico_modelo.php"> 🕐 Historico </a></li>
            </ul>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="col-sm-10 reg-icon">
            <h2 style="text-align:center">Lista Modelos</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form" action="./ListarModelo.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Modelo</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-margin">
                    <div class="card-body">
                        <div class="row search-body">
                            <div class="col-lg-12">
                                <div class="search-result">
                                    <div class="result-header">
                                        <div class="row">
                                        </div>
                                    </div>
                                    <div class="result-body">
                                        <div class="table-responsive">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">Morada</th>
                                                        <th scope="col">NIF</th>
                                                        <th scope="col">Contato</th>
                                                        <th scope="col">Sexo</th>
                                                        <th scope="col">Nacionalidade</th>
                                                        <th scope="col">Altura</th>
                                                        <th scope="col">Busto</th>
                                                        <th scope="col">Cintura</th>
                                                        <th scope="col">Quadril</th>
                                                        <th scope="col">ID Agente</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $modelo = Modelo::search([], [], []);
                                                    foreach ($modelo as $m) { ?>
                                                        <tr>
                                                            <td><?php echo $m->getId() ?></td>
                                                            <td><?php echo $m->getNome() ?></td>
                                                            <td><?php echo $m->getMorada() ?></td>
                                                            <td><?php echo $m->getNif() ?></td>
                                                            <td><?php echo $m->getContacto() ?></td>
                                                            <td><?php echo $m->getSexo() ?></td>
                                                            <td><?php echo $m->getNacionalidade() ?></td>
                                                            <td><?php echo $m->getAltura() ?></td>
                                                            <td><?php echo $m->getMedida1() ?></td>
                                                            <td><?php echo $m->getMedida2() ?></td>
                                                            <td><?php echo $m->getMedida3() ?></td>
                                                            <td><?php if ($m->getIdAgente() == " ") {
                                                                    echo "Sem agente";
                                                                } else {
                                                                    echo $m->getIdAgente();
                                                                } ?> <?php } ?> 
                                                            </td>
                                                            <td>
                                                                <a href="../Deletar/apagar_modelo.php?id=<?php echo $m->getId() ?>"
                                                                class="btn btn-danger">Apagar Modelo</a>
                                                            </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
</body>

</html>