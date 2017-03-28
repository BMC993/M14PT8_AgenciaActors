<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Agencia RA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/estils.css">
        <link rel="icon" type="image/x-icon" href="view/imatges/movie.ico" />
    </head>
    <body>
        <div id="wrap">
            <div id="header" class="container-fluid header">
                <div id="hgroup" class="col-xs-12 col-sm-3 text-center">
                    <div>
                        <div class="logo"></div>
                    </div>
                    <h2 class="col-xs-12">Agencia RA</h2>
                </div>
                <div class="text-right reloj col-sm-9 col-xs-12">
                    <!--Añadir botones para acceder backend/frontend dependiendo de la vista + boton de logout en el caso de que este logged -->
                    <!--{# {% if session != null %}
                        <div class="col-xs-7 text-right logoutButton">
                            <span class="col-md-9 col-xs-8 loginUsuari">Esteu registrats com a <strong>{{session}}</strong></span>
                            <div id="logout" onclick="logout()" class="btn btn-login col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <span>Logout</span>
                            </div>
                        </div>-->
                    <!--{% else %}-->
                    <a href="?ctl=user&act=llistar">
                        <div id="login" class="col-lg-1 col-md-2 col-sm-3 col-xs-4 btn btn-login">
                            <span>LOGIN</span>
                        </div>
                    </a>
                    <!--{% endif %} #}-->
                    <div class="menu seleccio-menu col-lg-10 col-md-9 col-sm-8 col-xs-12">
                        <ul>
                            <a href="?ctl=inici"><li class="col-sm-2 col-xs-12">Inici</li></a>
                            <a href="?ctl=projecte&act=llistar"><li class="col-sm-2 col-xs-12">Projectes</li></a>
                            <a href="?ctl=director&act=llistar"><li class="col-sm-2 col-xs-12">Directors</li></a>
                            <a href="?ctl=actor&act=llistar"><li class="col-sm-2 col-xs-12">Actors</li></a>
                            <a href="?ctl=tipoObra&act=crear"><li class="col-sm-2 col-xs-12">Tipus Obres</li></a>
                            <a href="?ctl=tipoPaper&act=crear"><li class="col-sm-2 col-xs-12">Tipus Papers</li></a>
                        </ul>
                    </div>
                </div>
            </div>

<!--            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                            <li><a href="../navbar-static-top/">Static top</a></li>
                            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                        </ul>
                    </div>/.nav-collapse 
                </div>/.container-fluid 
            </nav>-->


            <div id="main" class="container-fluid">
                <div class="row2">
                    <div id="container" class="container">