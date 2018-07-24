<?php require 'database/conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Gestor da Base de Conhecimento</title>

  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap_3.3.7.min.css">
  <link rel="stylesheet" href="libs/normalize/css/normalize_7.0.0.css">
  <link rel="stylesheet" href="libs/main.css">
</head>
<body>
  
<?php require 'menu.php' ?>

<div class="container"> 
   <div class="row">
     <div class="col-md-6">
       
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Adicionar Documentos</h3>
            </div>
            <div class="panel-body painel">
              <a class="text-center" href="adicionarsuporte.php"><h1>Suporte</h1></a>
              <a class="text-center" href="adicionaroutros.php"><h1>Qualidade e Tecnologia</h1></a>
            </div>
          </div>
        
     </div>
     <div class="col-md-6">
        <a href="cadastro.php">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Excluir Documentos</h3>
            </div>
            <div class="panel-body painel">
             
            </div>
          </div>
        </a>
     </div>
    </div>
     <div class="row">
     <div class="col-md-6">
        <a href="cadastro.php">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Editar Documentos</h3>
            </div>
            <div class="panel-body painel">
             
            </div>
          </div>
        </a>
     </div>
     <div class="col-md-6">
        <a href="cadastro.php">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Visualizar Documentos</h3>
            </div>
            <div class="panel-body painel">
             
            </div>
          </div>
        </a>
     </div>
    </div>
     
</div>
 
<script src="libs/jquery/js/jquery_3.2.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap_3.3.7.min.js"></script>

</body>
</html>
