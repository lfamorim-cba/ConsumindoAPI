<?php
	$adm_uri = HOME_URI . '/cursos/adm/';
	$edit_uri = $adm_uri . 'edit/';
	$delete_uri = $adm_uri . 'del/';
	
	$resultado = $modelo->obtem_curso();
	$api = $resultado->data;
	

?>

 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Curso <?php echo $api->id; echo ' | '; echo $api->nome;?></h3>
<?php
  echo $modelo->form_msg;;
?>
  <form method="post" action="" enctype="multipart/form-data">
  	<div class="row">
  	  <div class="form-group col-md-2">
  	  	<label for="fcodigo">Código</label>
  	  	<input type="text" readonly class="form-control" name="codigo" value="<?php echo $api->codigo; ?>" id="codigo">
  	  </div>
	  <div class="form-group col-md-10">
  	  	<label for="fnome">Nome Curso</label>
  	  	<input type="text" class="form-control" name="nome" value="<?php echo $api->nome; ?>"  id="nome" placeholder="Digite o nome">
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="fnatureza_programacao">Natureza Programação</label>
  	  	<input type="text" class="form-control" id="natureza_programacao" name="natureza_programacao" value="<?php echo $api->natureza_programacao; ?>"  placeholder="Digite a Natureza Programação">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="ftipo_programacao">Tipo Programação</label>
  	  	<input type="text" class="form-control" id="tipo_programacao" name="tipo_programacao" value="<?php echo $api->tipo_programacao; ?>" placeholder="Digite o Tipo Programação">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="farea_ocupacional">Área Ocupacional</label>
  	  	<input type="text" class="form-control" id="area_ocupacional" name="area_ocupacional" value="<?php echo $api->area_ocupacional; ?>" placeholder="Digite a Área Ocupacional">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="flinha_acao">Linha de Ação</label>
  	  	<input type="text" class="form-control" id="linha_acao" name="linha_acao" value="<?php echo $api->linha_acao; ?>" placeholder="Digite a Linha de Ação">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fareas_atividade">Áreas Atividade</label>
  	  	<input type="text" class="form-control" id="areas_atividade" name="areas_atividade" value="<?php echo $api->areas_atividade; ?>" placeholder="Digite a Áreas Atividade">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fatividade_cbo">Atividade CBO</label>
  	  	<input type="text" class="form-control" id="atividade_cbo" name="atividade_cbo" value="<?php echo $api->atividade_cbo; ?>" placeholder="Digite a Atividade CBO">
  	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fatividades_cbo">Atividades CBO</label>
		<textarea class="form-control" id="atividades_cbo" name="atividades_cbo" placeholder="Digite o Atividades "> <?php echo $api->atividades_cbo; ?></textarea>
  	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fobjetivo">Objetivo</label>
		<textarea class="form-control" id="objetivo" name="objetivo" placeholder="Digite o Objetivo "> <?php echo $api->objetivo; ?></textarea>
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fconteudo_programatico">Conteúdo Programático</label>
		<textarea class="form-control" id="conteudo_programatico" name="conteudo_programatico" placeholder="Digite o Conteúdo Programático "> <?php echo $api->conteudo_programatico; ?></textarea>
  	  </div>
	</div>

	<div class="row">
  	  <div class="form-group col-md-2">
  	  	<label for="fvagas_minimo">Minima Vagas</label>
  	  	<input type="number" class="form-control" id="vagas_minimo" name="vagas_minimo" value="<?php echo $api->vagas_minimo; ?>" placeholder="Quantidade de Minima Vagas">
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="fvagas_maximo">Máxima Vagas</label>
  	  	<input type="number" class="form-control" id="vagas_maximo" name="vagas_maximo" value="<?php echo $api->vagas_maximo; ?>" placeholder="Quantidade de Máxima Vagas">
  	  </div>
	</div>
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
		<a href="../../" class="btn btn-default">Voltar</a>
	  </div>
	</div>
	<hr />
	<hr />
	<input type="hidden" name="insere_curso" value="1" />
  </form>
 </div>
 