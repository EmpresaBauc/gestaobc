
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
   <nav class="navbar navbar-default">
    <div class="container-fluid blue">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Gestor Base de Conhecimento</a>
      </div>
    </div><!-- /.container-fluid -->
   </nav>
   <div class="container">
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">
	 		<h1 class="text-center">Adicionar Novo Documento</h1>
			<form action="adicionandosuporte.php" method="post">
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
              <label class="control-label" for="horario">Horário</label>
              <input class="form-control" type="time" id="horario" name="horario" />
          </div>
          <div class="form-group">
              <label class="control-label" for="tags">Tags:</label>
              <input type="radio" id="tags" name="tags" value="1">Sim
              <input type="radio" id="tags" name="tags" value="0">Não
          </div>
          <div class="form-group">
              <label class="control-label" for="redator">Redator</label>
              <select class="form-control required" id="redator" name="redator">
                <option value="0" selected="">Selecione um Colaborador</option>
                <option value="14">Afonso Soares</option>
                <option value="60">André Gonzaga</option>
                <option value="24">Carlos Magno</option>
                <option value="37">Claudio Nani</option>
                <option value="62">Denilson Castro</option>
                <option value="40">Douglas Meneses</option>
                <option value="36">Elisangela Meneses</option>
                <option value="38">Fernando Junqueira</option>
                <option value="34">Isac Ramos</option>
                <option value="64">Isamara Mello</option>
                <option value="48">Johann Albino</option>
                <option value="63">Juliana Souza</option>
                <option value="30">Julio César</option>
                <option value="33">Kennedy Alves</option>
                <option value="66">Lara Félix</option>
                <option value="58">Luiz Paulo</option>
                <option value="65">Matheus Lima</option>
                <option value="20">Michael Avila</option>
                <option value="67">Núbia Lima</option>
                <option value="25">Priscilla Barbara</option>
                <option value="41">Raquel Oliveira</option>
                <option value="49">Túlio Gonzaga</option>
                <option value="23">Victor Souza</option>
                <option value="55">Victor Winter</option>
                <option value="68">Vitor Henrique</option>
                <option value="26">Wellington Cassio</option>
                <option value="39">Wilker Kunert</option>
              </select>
          </div>
          <div class="form-group">
              <label class="control-label" for="observacoes">Observações</label>
              <input class="form-control" type="text" id="observacoes" name="observacoes" />
          </div>
           <div class="form-group">
              <label class="control-label" for="link">Link</label>
              <input class="form-control" type="text" id="link" name="link" value="null" />
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