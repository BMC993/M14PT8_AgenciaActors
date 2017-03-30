<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Agencia RA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="view/css/estils.css">
        <link rel="icon" type="image/x-icon" href="view/imatges/movie.ico" />
        <script type="text/javascript" src="view/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="view/js/codi.js"></script>
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
                    <?php if (isset($_SESSION['admin'])) { ?>
                            <a href="?ctl=user&act=logout">
                                <div id="logout" class="btn btn-login col-lg-1 col-md-2 col-sm-3 col-xs-4">
                                    <span>Logout</span>
                                </div>
                            </a>
                    <?php } else {
                        ?>
                        <a href="?ctl=user&act=llistar">
                            <div id="login" class="col-lg-1 col-md-2 col-sm-3 col-xs-4 btn btn-login">
                                <span>Login</span>
                            </div>
                        </a>
                    <?php } ?>
                    <div class="menu seleccio-menu">
                        <ul>

                            <a href="?ctl=inici"><li class="col-sm-2 col-xs-12">Inici</li></a>
                            <a href="?ctl=projecte&act=llistar"><li class="col-sm-2 col-xs-12">Projectes</li></a>
                            <a href="?ctl=director&act=llistar"><li class="col-sm-2 col-xs-12">Directors</li></a>
                            <a href="?ctl=actor&act=llistar"><li class="col-sm-2 col-xs-12">Actors</li></a>
                            <a href="?ctl=tipoObra&act=crear"><li class="col-sm-2 col-xs-12">Tipo Obres</li></a>
                            <a href="?ctl=tipoPaper&act=crear"><li class="col-sm-2 col-xs-12">Tipo Paper</li></a>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div id="main" class="container-fluid">
                <div class="row2">
                    <div id="container" class="container">