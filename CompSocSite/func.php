<?php

function carrega_pagina() {
    (isset($_GET['page'])) ? $pagina = $_GET['page'] : $pagina = 'home';
    if (file_exists('content/' . $pagina . '.php')):
        require_once('content/' . $pagina . '.php');
    else:
        require_once('content/home.php');
    endif;
}

function titulos() {
    (isset($_GET['page'])) ? $pagina = $_GET['page'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $titulo = <<<'TAG'
NCI Computer Society
TAG;
            break;
        case 'login':
            $titulo = <<<'TAG'
Member Login - NCI Computer Society
TAG;
            break;
        case 'contact':
            $titulo = <<<'TAG'
Contact - NCI Computer Society
TAG;
            break;
              
        case 'blog':
            $titulo = <<<'TAG'
Computing Blog - NCI Computer Society
TAG;
            break;


    endswitch;
    return $titulo;
}
