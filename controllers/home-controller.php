<?php
class HomeController extends MainController
{
    public function index() {
		// Título da página
		$this->title = 'Home';
		/** Carrega os arquivos do view **/
        require ABSPATH . '/views/includes/header.php';
        require ABSPATH . '/views/includes/menu.php';
        require ABSPATH . '/views/home/home-view.php';
        require ABSPATH . '/views/includes/footer.php';
		
    } 
	
} 