<?php
	$tipo = $_POST['tipo'];
	$produto_avanco = $_POST['produto_avanco'];
	$topico = $_POST['topico'];
	$sub_topico = $_POST['sub_topico'];
	$dossie = $_POST['dossie'];
	$sub_dossie = $_POST['sub_dossie'];
	$nome_doc = $_POST['nome_doc'];
	$data = $_POST['data'];
	$horario = $_POST['horario'];
	$tags = $_POST['tags'];
	$redator = $_POST['redator'];
	$observacoes = $_POST['observacoes'];
	$link = $_POST['link'];


	require 'database/conexao.php';


	$form = array(
	  'id_colaborador' => '',
	  'id_acao_esporadica' => '',
	  'id_supervisor' => '',
	  'data_registro' => date('Y-m-d'),
	  'data_acao' => '',
	  'horario_acao' => '',
	  'observacao' => ''
	);

	# recuperando dados do formulário
	$form['id_colaborador']     = $redator;
	$form['id_acao_esporadica'] = 4;
	$form['id_supervisor']      = 35;
	$form['data_acao']          = $data;
	$form['horario_acao']       = $horario;  
	$form['observacao']         = $nome_doc;

	# verificando se todos os dados obrigatórios foram enviados
	if
	  (! empty($form['id_colaborador'])     AND
	   ! empty($form['id_acao_esporadica']) AND
	   ! empty($form['id_supervisor'])      AND
	   ! empty($form['data_acao'])          AND
	   ! empty($form['horario_acao'])) {

	   # concatenando os segundos no horário
	   $form['horario_acao'] .= ':00';
	   # retirando quebras de linhas da observação
	   $form['observacao'] = preg_replace('/[\n|\r|\n\r|\r\n]{2,}/',' ', $form['observacao']);
	   $form['observacao'] = ucwords($form['observacao']);
	}

	    
	$colunas = null;
	$valores = null;

	# inserindo atividade esporádica
	foreach ($form as $chave => $valor) {

		$colunas .= trim($chave, "'") . ', ';
		$valores .= "'$valor', ";

	}

	$colunas = rtrim($colunas, ', ');
	$valores = rtrim($valores, ', ');

	$query = '';
	$query = "INSERT INTO av_avancoins_acoes_esporadicas_logs " . "($colunas)" . " VALUES " . "($valores);";

	mysqli_query($conexao,$query) or die("Erro ao tentar cadastrar registro");


  	
  	$consultanome = mysqli_query($conexao,"select name, surname from lh_users WHERE id='$redator'") or die("Erro linha 75");


    while($dados=mysqli_fetch_assoc($consultanome))
	      {
	        $nome = $dados['name'].' '.$dados['surname'];
	      }



	$sql = "INSERT INTO `av_documentos` VALUES (NULL, '$tipo', '$produto_avanco', '$topico', '$sub_topico','$dossie','$sub_dossie','$nome_doc','$data','$tags','$nome','$observacoes','$link');"; 
		
	mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
	
    $url = 'index.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>