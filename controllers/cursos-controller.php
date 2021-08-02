<?php
class CursosController extends MainController
{
    public function index() {
		// Título da página
		$this->title = 'Cursos';
		// Carrega o modelo para este view
        $modelo = $this->load_model('cursos/cursos-model');
		/** Carrega os arquivos do view **/
        require ABSPATH . '/views/includes/header.php';
        require ABSPATH . '/views/includes/menu.php';
        require ABSPATH . '/views/cursos/cursos-view.php';
        require ABSPATH . '/views/includes/footer.php';
    } 
	
    public function adm() {
		// Page title
		$this->title = 'Gerenciar notícias';
		// Carrega o modelo para este view
        $modelo = $this->load_model('cursos/cursos-model');
		/** Carrega os arquivos do view **/
        require ABSPATH . '/views/includes/header.php';
        require ABSPATH . '/views/includes/menu.php';
		if ( chk_array( $this->parametros, 0 ) == 'add' ) {
    		require ABSPATH . '/views/cursos/add-view.php';
		} else if ( chk_array( $this->parametros, 0 ) == 'del' ){
    		require ABSPATH . '/views/cursos/del-view.php';			
		} else if( chk_array( $this->parametros, 0 ) == 'edit' ) {
    		require ABSPATH . '/views/cursos/editar-view.php';
		} else {
			$home  = HOME_URI . '/cursos/';
			echo '<meta http-equiv="Refresh" content="0; url=' . $home . '">';
			echo '<script type="text/javascript">window.location.href = "' . $home . '";</script>';			
			
    		return;
		}			
        require ABSPATH . '/views/includes/footer.php';
	}	
	
}  