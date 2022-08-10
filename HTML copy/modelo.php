<?php 
  
  require_once('../WithDatabaseable.php');
  require_once('../Databaseable.php');
  require_once('../MyConnect.php');
  require_once('../Agente.php'); 
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>Registrar Modelos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
  <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
  <div class="container bootstrap snippets bootdey">
    <div class="header">
    <ul class="nav nav-pills pull-right">
      <li><a href="agente.php">Registrar Agente</a></li>
      <li class="active"><a href="modelo.php">Registrar Modelo</a></li>
      <li><a href="fotografo.php">Registrar Fotografo</a></li>
      <li><a href="fotografia.php">Registrar Fotografias</a></li>
        <li><a href="trabalho.php">Registrar Trabalhos</a></li>
        <li><a href="../HTML/ListarAgentes.php">Listas</a></li>
        <li><a href="historico_agente.php">Historicos</a></li>
    </ul>
    <a href="../homepage/agencia.html"><h3 class="text-muted prj-name">Agência</h3></a>
    </div>

    <div class="jumbotron text-center" style="min-height: 750px; height: auto">
      <div class="col-md-10 col-md-offset-2">
        <form class="form-horizontal" role="form" method="post" action="../registrarModelo.php">
          <div class="form-group text-center">
            <div class="col-sm-10 reg-icon">
              <span class="fa fa-user fa-3x">Registrar Modelo</span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeModelo" id="nomeModelo" placeholder="Nome" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nacionalidadeModelo" id="nacionalidadeModelo" placeholder="Nacionalidade" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="moradaModelo" id="moradaModelo" placeholder="Morada" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nifModelo" id="nifModelo" placeholder="NIF" maxlength="9" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="contactoModelo" id="contactoModelo" placeholder="Contacto" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sexoModelo" id="sexoModelo" placeholder="Sexo" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alturaModelo" id="alturaModelo" placeholder="Altura" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="medida1" id="medida1" placeholder="Medida 1 (Busto)" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="medida2" id="medida2" placeholder="Medida 2 (Cintura)" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" name="medida3" id="medida3" placeholder="Medida 3 (Quadril)" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10"> Agente :
              <select name="agente" id="">
                <option value="">Sem Agente</option>
                <?php
                $agentes = Agente::search([], [], []);
                foreach ($agentes as $agente) { ?>
                  <option value="<?php echo $agente->getId();?>"><?php echo $agente->getNome(); ?></option>
                <?php
                }
                ?>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class=" form-group">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        Registrar
                      </button>
                    </div>
            </div>
        </form>
      </div>
    </div>
  </div>

  <style type="text/css">
    .jumbotron label {
      font-size: 12px;
    }

    .reg-icon {
      color: #5bc0de;
      font-weight: bold;
      text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4) !important;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:hover,
    .nav-pills>li.active>a:focus {
      color: #fff;
      background-color: #5bc0de;
    }

    .prj-name {
      font-weight: bold;
      color: #5bc0de;
    }

    .col-sm-10-3 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }

    .codigo_postal {
      padding-bottom: 1rem;
    }
  </style>

  <script type="text/javascript"></script>
</body>

</html>