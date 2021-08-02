<?php
	$adm_uri = HOME_URI . '/cursos/adm/';
	$edit_uri = $adm_uri . 'add/';
	$modelo->insere_curso();
?>

 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Incluir Novo Curso</h3>
<?php
	echo $modelo->form_msg;
?>
  <form method="post" action="" enctype="multipart/form-data">
  	<div class="row">
  	  <div class="form-group col-md-2">
  	  	<label for="fcodigo">Código</label>
  	  	<input type="number" class="form-control" required  name="codigo"  id="codigo" placeholder="Digite o código">
  	  </div>
	  <div class="form-group col-md-10">
  	  	<label for="fnome">Nome Curso</label>
  	  	<input type="text" class="form-control" required name="nome" id="nome" placeholder="Digite o nome">
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="fnatureza_programacao">Natureza Programação</label>
  	  	<input type="text" class="form-control" required id="natureza_programacao" name="natureza_programacao"  placeholder="Digite a Natureza Programação">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="ftipo_programacao">Tipo Programação</label>
  	  	<input type="text" class="form-control" required id="tipo_programacao" name="tipo_programacao" placeholder="Digite o Tipo Programação">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="farea_ocupacional">Área Ocupacional</label>
  	  	<input type="text" class="form-control" id="area_ocupacional" name="area_ocupacional" placeholder="Digite a Área Ocupacional">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="flinha_acao">Linha de Ação</label>
  	  	<input type="text" class="form-control" id="linha_acao" name="linha_acao"  placeholder="Digite a Linha de Ação">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fareas_atividade">Áreas Atividade</label>
  	  	<input type="text" class="form-control" id="areas_atividade" name="areas_atividade" placeholder="Digite a Áreas Atividade">
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fatividade_cbo">Atividade CBO</label>
  	  	<input type="text" class="form-control" id="atividade_cbo" name="atividade_cbo" placeholder="Digite a Atividade CBO">
  	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fatividades_cbo">Atividades CBO</label>
		<textarea class="form-control" id="atividades_cbo" name="atividades_cbo" placeholder="Digite o Atividades "> </textarea>
  	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fobjetivo">Objetivo</label>
		<textarea class="form-control" id="objetivo" required name="objetivo" placeholder="Digite o Objetivo "> </textarea>
  	  </div>
	</div>

	<div class="row">
	  <div class="form-group col-md-12">
  	  	<label for="fconteudo_programatico">Conteúdo Programático</label>
		<textarea class="form-control" id="conteudo_programatico" required name="conteudo_programatico" placeholder="Digite o Conteúdo Programático "> </textarea>
  	  </div>
	</div>

	<div class="row">
  	  <div class="form-group col-md-2">
  	  	<label for="fvagas_minimo">Minima Vagas</label>
  	  	<input type="number" class="form-control" required id="vagas_minimo" name="vagas_minimo" value="1" placeholder="Quantidade de Minima Vagas">
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label for="fvagas_maximo">Máxima Vagas</label>
  	  	<input type="number" class="form-control" required id="vagas_maximo" name="vagas_maximo" value="1000" placeholder="Quantidade de Máxima Vagas">
  	  </div>
	</div>
	


	
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Incluir</button>
		<a href="../../" class="btn btn-default">Voltar</a>
	  </div>
	</div>
	<hr />
	<hr />
	<input type="hidden" name="insere_curso" value="1" />
  </form>
 </div>
 