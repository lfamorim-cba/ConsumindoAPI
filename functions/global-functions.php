<?php
function chk_array ( $array, $key ) {
	// Verifica se a chave existe no array
	if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
		// Retorna o valor da chave
		return $array[ $key ];
	}
	// Retorna nulo por padrão
	return null;
}  


spl_autoload_register(function ($class) { 
    $pathContorllers = ABSPATH . '/classes/class-' . $class . '.php'; 
    if (file_exists($pathContorllers)) {
        require_once $pathContorllers;
    } else {
		require_once ABSPATH . '/error/404.php';
	}
});

