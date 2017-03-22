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
                    <div id="login" onclick="login()" class="col-lg-1 col-md-2 col-sm-3 col-xs-4 btn btn-login">
                        <span>Login</span>
                    </div>
                <!--{% endif %} #}-->
                <div class="menu seleccio-menu">
                    <ul>
                       <a href="?ctl=inici"><li class="col-sm-2 col-xs-12">Inicio</li></a>
                       <a href="{{path('frontend_proyectos')}}"><li class="col-sm-2 col-xs-12">Proyectos</li></a>
                       <a href="?ctl=director&act=crear"><li class="col-sm-2 col-xs-12">Directores</li></a>
                       <a href="?ctl=actor&act=crear"><li class="col-sm-2 col-xs-12">Actores</li></a>
                       <a href="?ctl=tipoObra&act=crear"><li class="col-sm-2 col-xs-12">Tipo Obres</li></a>
                       <a href="?ctl=tipoPaper&act=crear"><li class="col-sm-2 col-xs-12">Tipo Paper</li></a>
                   </ul>
               </div>
           </div>
       </div>
        <div id="main" class="container-fluid">
        <div class="row2">
            <div id="container" class="col-xs-12">