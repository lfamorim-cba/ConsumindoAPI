<?php
class MainController  
{
    public $userdata;
	public $title;
	public $parametros = array();
	public function __construct ( $parametros = array() ) {
		// Parâmetros
		$this->parametros = $parametros;
		
	}
	
	/**
	 * Load model
	 *
	 * Carrega os modelos presentes na pasta /models/.
	 *
	 */
	public function load_model( $model_name = false ) {
		// Um arquivo deverá ser enviado
		if ( ! $model_name ) return;
		// Garante que o nome do modelo tenha letras minúsculas
		$model_name =  strtolower( $model_name );
		// Inclui o arquivo
		$model_path = ABSPATH . '/models/' . $model_name . '.php';
		// Verifica se o arquivo existe
		if ( file_exists( $model_path ) ) {
			// Inclui o arquivo
			require_once $model_path;
			// Remove os caminhos do arquivo (se tiver algum)
			$model_name = explode('/', $model_name);
			// Pega só o nome final do caminho
			$model_name = end( $model_name );
			// Remove caracteres inválidos do nome do arquivo
			$model_name = preg_replace( '/[^a-zA-Z0-9]/is', '', $model_name );
			// Verifica se a classe existe
			if ( class_exists( $model_name ) ) {
				// Retorna um objeto da classe
				return new $model_name( $this->db, $this );
			}
			return;
		}
	} 
} 