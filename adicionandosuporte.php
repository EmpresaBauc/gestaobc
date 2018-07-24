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
	$status = $_POST['status'];


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
	        $nomecerto= $dados['name'];
			$sobrenomecerto= $dados['surname'];
			$name = strtolower($dados['name']);
			$surname = strtolower($dados['surname']);       
	      }

	
	$nomeavancao = 'jogadores/'.$name.'_'.$surname.'.png';

	$sql = "INSERT INTO `av_documentos` VALUES (NULL, '$tipo', '$produto_avanco', '$topico', '$sub_topico','$dossie','$sub_dossie','$nome_doc','$data','$tags','$nome','$observacoes','$link', '$status');"; 
		
	mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");


    $avancao = "INSERT INTO `av_base_de_conhecimento_avancao` (codigo_jogador, nome_jogador, sobrenome_jogador, conteudo_postado_base_de_conhecimento, data_conteudo_postado, caminho_foto_jogador, data) VALUES ('$redator', '$nomecerto', '$sobrenomecerto', '$nome_doc', '$data', '$nomeavancao', '$data');";

    mysqli_query($conexao,$avancao) or die("Erro ao tentar cadastrar registro");

	
    $url = 'index.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>