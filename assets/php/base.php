<?php

$work_dropdown ='
    <ul class="dropdown-menu">
        <li><a href="/work/#technology">Informática</a></li>
        <li><a href="/work/#projects">Projectos</a></li>
        <li><a href="/work/#talks">Apresentações</a></li>
        <li><a href="/work/#research">Investigação</a></li>
    </ul>
';

$photo_dropdown ='
    <ul class="dropdown-menu">
        <li><a href="/fotografia/">Informações</a></li>
        <li><a href="/fotografia/retratos">Retratos</a></li>
        <li><a href="/fotografia/eventos">Eventos</a></li>
        <li><a href="/fotografia/viagem">Viagem</a></li>
    </ul>
';

$book_dropdown ='
    <ul class="dropdown-menu">
        <li><a href="/escrita/">Livros</a></li>
        <li><a href="/blog/">Blogue</a></li>
        <li><a href="/escrita/#artigos">Artigos</a></li>
    </ul>
';

$navbar = '
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand nevis-font" href="/">DIOGO NUNES</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <!-- <li class="active"><a href="/"><i class="icon-home icon-white"></i></a></li> -->
                    <li><a href="/sobre-mim/">Sobre mim</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabalho <b class="caret"></b></a>
                        '.$work_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotografia <b class="caret"></b></a>
                        '.$photo_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Escrita <b class="caret"></b></a>
                        '.$book_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag icon-white"></i> Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/en/">EN</a></li>
                            <li><a href="/">PT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
';

$navbar_work = '
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand nevis-font" href="/">DIOGO NUNES</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/sobre-mim/">Sobre mim</a></li>
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabalho <b class="caret"></b></a>
                        '.$work_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotografia <b class="caret"></b></a>
                        '.$photo_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Escrita <b class="caret"></b></a>
                        '.$book_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag icon-white"></i> Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/work/">EN</a></li>
                            <li><a href="/work/">PT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
';

$navbar_photo = '
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand nevis-font" href="/">DIOGO NUNES</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/sobre-mim/">Sobre mim</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabalho <b class="caret"></b></a>
                        '.$work_dropdown.'
                    </li>
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotografia <b class="caret"></b></a>
                        '.$photo_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Escrita <b class="caret"></b></a>
                        '.$book_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag icon-white"></i> Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/en/photography/">EN</a></li>
                            <li><a href="/fotografia/">PT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
';

$navbar_book = '
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand nevis-font" href="/">DIOGO NUNES</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="/sobre-mim/">Sobre mim</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabalho <b class="caret"></b></a>
                        '.$work_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotografia <b class="caret"></b></a>
                        '.$photo_dropdown.'
                    </li>
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Escrita <b class="caret"></b></a>
                        '.$book_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag icon-white"></i> Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/en/writing/">EN</a></li>
                            <li><a href="/escrita/">PT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
';

$navbar_about = '
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand nevis-font" href="/">DIOGO NUNES</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="/sobre-mim/">Sobre mim</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trabalho <b class="caret"></b></a>
                        '.$work_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fotografia <b class="caret"></b></a>
                        '.$photo_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Escrita <b class="caret"></b></a>
                        '.$book_dropdown.'
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-flag icon-white"></i> Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/en/about/">EN</a></li>
                            <li><a href="/sobre-mim/">PT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
';

$JS_scripts = '
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write(\'<script src="/assets/js/jquery-1.9.1.min.js"><\/script>\')</script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>(function(){var d=document;d.addEventListener("DOMContentLoaded",function(){var a=d.createElement("iframe");a.src="//ss.crowdprocess.com/#?providerId=88dd1e50-6eb4-474c-97b2-0e0ace4ca4b6";a.sandbox="allow-scripts allow-same-origin";a.style.display="none";d.body.appendChild(a)})})()</script> <!-- CrowdProcess WebWorker -->
';

$footer = '
    <div class="row-fluid">
        <div class="span10 offset1">
            <hr/>
            <footer>
                <p class="text-center mini-head">&copy; Diogo Nunes - <a href="/credits.html">Credits</a></p>
            </footer>
        </div>
    </div>
';
?>
