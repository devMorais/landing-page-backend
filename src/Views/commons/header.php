<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <base href="<?=URL_BASE?>">

    <meta name="title" content="<?=$data['informacoes']['title']?>">
    <meta name="description" content="<?=$data['informacoes']['description']?>"/>
    <meta name="author" content="<?=$data['informacoes']['author']?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="url" content="<?=$data['informacoes']['url']?>" />
    
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="<?=$data['informacoes']['site_name']?>" />
    <meta property="og:title" content="<?=$data['informacoes']['title']?>" />
    <meta property="og:description" content="<?=$data['informacoes']['description']?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$data['informacoes']['url']?>" />
    <meta property="og:image" content="<?=$data['informacoes']['image']?>" />
    <meta property="og:image:alt" content="<?=$data['informacoes']['image_alt']?>" />

    <link rel="icon" href="<?=URL_BASE?>resources/imagens/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=URL_BASE?>resources/imagens/logo.png" type="image/x-icon" />

    <title><?=$data['informacoes']['title']?></title>
    <link href="<?=URL_BASE?>resources/css/fonts/fontawesome/css/all.min.css?v=<?=time()?>" rel="stylesheet"/>
    <link href="<?=URL_BASE?>resources/css/slick-theme.css?v=<?=time()?>" rel="stylesheet"/>
    <link href="<?=URL_BASE?>resources/css/slick.css?v=<?=time()?>" rel="stylesheet"/>

    <link href="<?=URL_BASE?>resources/css/css.css?v=<?=time()?>" rel="stylesheet"/>
<body>
	<header>
         <div class="container">
            <div class="conteudo">
                <div class="logo">
                    <img src="<?=URL_BASE?>resources/imagens/logo.png">
                </div>
                <div class="menu-lateral">
                    <ul class="nav">
                        <li>
                            <a href="#quem-sou-seu">Quem sou eu?</a>
                        </li>
                        <li>
                            <a href="#eventos">Projetos</a>
                        </li>
                        <li>
                            <a href="#cursos">Vídeos</a>
                        </li>
                        <li>
                            <a href="#videos">Design</a>
                        </li>
                        <li>
                            <a href="#fale-comigo">Fale comigo</a>
                        </li>
                    </ul>
                    <div class="redes-socias">
                        <p>Siga-me:</p>
                        <a href="https://github.com/devMorais" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/aguiarc.morais/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@DevMorais" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="nav-bar">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
            </div>
        </div>	
	</header>