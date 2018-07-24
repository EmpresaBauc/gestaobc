<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Gestor da Base de Conhecimento</title>

  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap-3.3.7.min.css">
  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="libs/normalize/css/normalize-7.0.0.css">
</head>
<body>

<?php require 'menu.php' ?>

<div class="container">
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">
	 		<h1 class="text-center">Adicionar Novo Documento Qualidade/Tecnologia</h1>
			<form action="adicionandooutros.php" method="post">
			   	<div class="form-group">
			        <label class="control-label" for="tipo">Tipo:</label>
			        <input class="form-control" type="text" id="tipo" name="tipo" />
			    </div>
			    <div class="form-group">
			        <label class="control-label" for="produto_avanco">Produto Avanço:</label>
			        <input class="form-control" type="text" id="produto_avanco" name="produto_avanco" />
			    </div>
          <div class="form-group">
              <label class="control-label" for="topico">Tópico:</label>
              <input class="form-control" type="text" id="topico" name="topico" />
          </div>
          <div class="form-group">
              <label class="control-label" for="sub_topico">Sub-Tópico:</label>
              <input class="form-control" type="text" id="sub_topico" name="sub_topico" />
          </div>
          <div class="form-group">
              <label class="control-label" for="dossie">Dossiê:</label>
              <input class="form-control" type="text" id="dossie" name="dossie" />
          </div>
          <div class="form-group">
              <label class="control-label" for="sub_dossie">Sub-Dossiê:</label>
              <input class="form-control" type="text" id="sub_dossie" name="sub_dossie" />
          </div>
          <div class="form-group">
              <label class="control-label" for="nome_doc">Nome do Documento:</label>
              <input class="form-control" type="text" id="nome_doc" name="nome_doc" />
          </div>
          <div class="form-group">
              <label class="control-label" for="data">Data</label>
              <input class="form-control" type="date" id="data" name="data" />
          </div>
          <div class="form-group">
              <label class="control-label" for="tags">Tags:</label>
              <input type="radio" id="tags" name="tags" value="1">Sim
              <input type="radio" id="tags" name="tags" value="0">Não
          </div>
          <div class="form-group">
              <label class="control-label" for="redator">Redator</label>
              <input class="form-control" type="text" id="redator" name="redator" />
          </div>
          <div class="form-group">
              <label class="control-label" for="observacoes">Observações</label>
              <input class="form-control" type="text" id="observacoes" name="observacoes" />
          </div>
           <div class="form-group">
              <label class="control-label" for="link">Link</label>
              <input class="form-control" type="text" id="link" name="link"/>
          </div>
          <div class="form-group">
              <label class="control-label" for="status">Status</label>
              <select class="form-control required" id="status" name="status">
                <option value="-1" selected="">Pendente</option>
                <option value="0">Em execução</option>
                <option value="1">Concluído</option>
              </select>
          </div>
			    <input class="btn btn-default" type="submit" name="enviar" value="Enviar">
			</form>
      <br>
		</div>
	 </div>
</div>

<script src="libs/jquery/js/jquery-3.2.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap-3.3.7.min.js"></script>
<script src="libs/bootstrap/js/npm.js"></script>

</body>
</html>