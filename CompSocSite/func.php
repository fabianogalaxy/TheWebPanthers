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
Contact Us - NCI Computer Society
TAG;
            break;
              
        case 'blog':
            $titulo = <<<'TAG'
Computing Blog - NCI Computer Society
TAG;
            break;
    
    case 'member':
            $titulo = <<<'TAG'
Member Area - NCI Computer Society
TAG;
            break;
    
       case 'forum':
            $titulo = <<<'TAG'
Forum - NCI Computer Society
TAG;
            break;
       case 'quiz':
            $titulo = <<<'TAG'
Quiz - NCI Computer Society
TAG;
            break;
       case 'resources':
            $titulo = <<<'TAG'
Resourses - NCI Computer Society
TAG;

            break;
       case 'register':
            $titulo = <<<'TAG'
Register NOW - NCI Computer Society
TAG;

            break;
    



    endswitch;
    return $titulo;
}
