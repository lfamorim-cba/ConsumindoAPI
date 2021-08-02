 <?php
	$adm_uri = HOME_URI . '/cursos/';
	$add_uri = $adm_uri . 'adm/add/';
	$edit_uri = $adm_uri . 'adm/edit/';
	$del_uri = $adm_uri . 'adm/del/';			
	$modelo->posts_por_pagina = 10;
	$resultado = $modelo->listar_cursos(); 
 ?>
 
 <div id="main" class="container-fluid" style="margin-top: 50px">
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Cursos</h2>
		</div>
		<div class="col-sm-6">
		</div>
		<div class="col-sm-3">
			<a href="<?php echo $add_uri; ?>" class="btn btn-primary pull-right h2">Novo Curso</a>
		</div>
	</div>  
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>Código</th>
					<th>Curso</th>
					<th>Natureza</th>
					<th>Tipo</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			
			<tbody>
			
            <?php  
				foreach($resultado->data as $api){
				echo'<tr>
	    				<td>'. $api->codigo .'</td>
						<td>'. $api->nome .'</td>
						<td>'. $api->natureza_programacao .'</td>
						<td>'. $api->tipo_programacao .'</td>
						<td class="actions">
							<a class="btn btn-warning btn-xs" href="'. $edit_uri . $api->id . '">Editar</a>
							<a class="btn btn-danger btn-xs"  href="'. $del_uri . $api->id . '">Excluir</a>
						</td>
				    </tr>';
				}	
            ?>
			</tbody>
		</table>
	</div>
	</div>  

 </div> 

