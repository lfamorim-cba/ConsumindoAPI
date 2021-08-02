<?php
class PerfilController extends MainController
{
    public function index() {
		// Título da página
		$this->title = 'Perfil|Senar';
		/** Carrega os arquivos do view **/
        require ABSPATH . '/views/includes/header.php';
        require ABSPATH . '/views/includes/menu.php';
        require ABSPATH . '/views/perfil/perfil-view.php';
        require ABSPATH . '/views/includes/footer.php';
    } 
} 