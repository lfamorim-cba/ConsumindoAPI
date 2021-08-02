<?php
class HelpController extends MainController
{
    public function index() {
		// Título da página
		$this->title = 'Ajuda/Dúvidas';
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
		/** Carrega os arquivos do view **/
        require ABSPATH . '/views/includes/header.php';
        require ABSPATH . '/views/includes/menu.php';
        require ABSPATH . '/views/help/help-view.php';
        require ABSPATH . '/views/includes/footer.php';
		
    } 	
} 