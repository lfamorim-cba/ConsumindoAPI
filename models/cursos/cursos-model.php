<?php 
class CursosModel extends MainModel
{
	public $posts_por_pagina = 10;


	public function __construct( $db = false, $controller = null ) {
		$this->db = $db;
		$this->controller = $controller;
		$this->parametros = $this->controller->parametros;
		$this->userdata = $this->controller->userdata;
	}
	public function listar_cursos () {

		$chamada_externa = curl_init(API_URL);
		curl_setopt($chamada_externa, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($chamada_externa, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . API_TOKEN
		   ));
		$url = curl_exec($chamada_externa);
		$info = curl_getinfo($chamada_externa);
		curl_close($chamada_externa);
		return json_decode($url);
	}  
	
	public function obtem_curso() {
		// Verifica se o primeiro parâmetro é "edit"
		if ( chk_array( $this->parametros, 0 ) != 'edit' ) {
			return;
		}
		// Verifica se o segundo parâmetro é um número
		if ( ! is_numeric( chk_array( $this->parametros, 1 ) ) ) {
			return;
			}

    	$curso_id = chk_array( $this->parametros, 1 );
		
		
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty( $_POST['insere_curso'] ) ) {

			$data = array(
							'codigo' => $_POST['codigo'],
							'nome' => $_POST['nome'],
							'natureza_programacao' => $_POST['natureza_programacao'],
							'tipo_programacao' => $_POST['tipo_programacao'],
							'objetivo' => $_POST['objetivo'],
							'conteudo_programatico' => $_POST['conteudo_programatico'],
							'area_ocupacional' => $_POST['area_ocupacional'],
							'linha_acao' => $_POST['linha_acao'],
							'atividade_cbo' => $_POST['atividade_cbo'],
							'atividades_cbo' => $_POST['atividades_cbo'],
							'areas_atividade' => $_POST['areas_atividade'],
							'vagas_minimo' => $_POST['vagas_minimo'],
							'vagas_maximo' => $_POST['vagas_maximo']
						);
			
            if ($data)
                $url_get1 = sprintf("%s?%s", API_URL .'/'. $curso_id .'/', http_build_query($data));			
			$ch   = curl_init();
			curl_setopt($ch, CURLOPT_PUT, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			   'Content-Type: application/json',
			   'Authorization: Bearer ' . API_TOKEN
			   ));				
            curl_setopt($ch, CURLOPT_URL, $url_get1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	
            $result = curl_exec($ch);
            curl_close($ch);

            $this->form_msg = '<p class="success">Curso atualizado com sucesso!</p>';

		}
		
		// Buscar o curso
  		$url_get  = API_URL .'/'. $curso_id .'/'; 
		$chamada_externa = curl_init();
		curl_setopt($chamada_externa, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($chamada_externa, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . API_TOKEN
		   ));
		curl_setopt($chamada_externa, CURLOPT_URL, $url_get);   
		$url = curl_exec($chamada_externa);
		curl_close($chamada_externa);
		
		return json_decode($url);	

	}  
	
	public function insere_curso() {
	
		if ( 'POST' != $_SERVER['REQUEST_METHOD'] || empty( $_POST['insere_curso'] ) ) {
			return;
		}
		if ( chk_array( $this->parametros, 0 ) == 'edit' ) {
			return;
		}
		// Só pra garantir que não estamos atualizando nada
		if ( is_numeric( chk_array( $this->parametros, 1 ) ) ) {
			return;
		}
		
		$number_codigo = $this->validar_codigo( $_POST['codigo'] );

		if ($number_codigo == 0){
            $this->form_msg = '<p class="error">Error Codigo do Curso já Existe!</p>';
		} else {
			$data = array(
							'codigo' => $_POST['codigo'],
							'nome' => $_POST['nome'],
							'natureza_programacao' => $_POST['natureza_programacao'],
							'tipo_programacao' => $_POST['tipo_programacao'],
							'objetivo' => $_POST['objetivo'],
							'conteudo_programatico' => $_POST['conteudo_programatico'],
							'area_ocupacional' => $_POST['area_ocupacional'],
							'linha_acao' => $_POST['linha_acao'],
							'atividade_cbo' => $_POST['atividade_cbo'],
							'atividades_cbo' => $_POST['atividades_cbo'],
							'areas_atividade' => $_POST['areas_atividade'],
							'vagas_minimo' => $_POST['vagas_minimo'],
							'vagas_maximo' => $_POST['vagas_maximo']
						);
			
        	if ($data)
        	    $url  = sprintf("%s?%s", API_URL, http_build_query($data));			
			$ch   = curl_init();
			
			
			curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array(
						   'Content-Type: application/json',
						   'Authorization: Bearer ' . API_TOKEN
						   ));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			
        	$result = curl_exec($ch);
        	curl_close($ch);
        	$this->form_msg = '<p class="success">Curso incluído com sucesso!</p>';
		}
		
	} 
	
	public function apaga_curso () {
		
		// Verifica se o primeiro parâmetro é "del"
		if ( chk_array( $this->parametros, 0 ) != 'del' ) {
			return;
		}
		// Verifica se o segundo parâmetro é um número
		if ( ! is_numeric( chk_array( $this->parametros, 1 ) ) ) {
			return;
		}

    	$curso_id = chk_array( $this->parametros, 1 );

		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty( $_POST['apaga_curso'] ) ) {
			$ch   = curl_init();
			curl_setopt($ch, CURLOPT_PUT, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			   'Content-Type: application/json',
			   'Authorization: Bearer ' . API_TOKEN
			   ));				
            curl_setopt($ch, CURLOPT_URL, API_URL .'/'. $curso_id .'/');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	
            $result = curl_exec($ch);
            curl_close($ch);
		   // Redireciona para a página de administração de Cursos
		    echo '<meta http-equiv="Refresh" content="0; url=' . HOME_URI . '/cursos/">';
		    echo '<script type="text/javascript">window.location.href = "' . HOME_URI . '/cursos/";</script>';
       }

		// Buscar o curso
  		$url_get  = API_URL .'/'. $curso_id .'/'; 
		$chamada_externa = curl_init();
		curl_setopt($chamada_externa, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($chamada_externa, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . API_TOKEN
		   ));
		curl_setopt($chamada_externa, CURLOPT_URL, $url_get);   
		$url = curl_exec($chamada_externa);
		curl_close($chamada_externa);
		
		return json_decode($url);	
		
	}
	
} 