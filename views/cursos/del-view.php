<?php
	$adm_uri = HOME_URI . '/cursos/adm/';
	$edit_uri = $adm_uri . 'edit/';
	$delete_uri = $adm_uri . 'del/';
	
	$resultado = $modelo->apaga_curso();
	$api = $resultado->data;
	

?>

 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Excluir Curso <?php echo $api->id; echo ' | '; echo $api->nome;?></h3>

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

	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Excluir</button>
		<a href="../../" class="btn btn-default">Voltar</a>
	  </div>
	</div>
	<hr />
	<hr />
	<input type="hidden" name="apaga_curso" value="1" />
  </form>
 </div>
 