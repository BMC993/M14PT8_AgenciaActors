<?php
if (isset($_COOKIE['recorda'])) {
    $cookierecorda = $_COOKIE['recorda'];
}else{
    $cookierecorda = "";
}
?>
<div class="col-xs-12 col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6">
    <form action="?ctl=user&act=llistar" method="post">
        <div class="form-group">
            Usuari: <input class="form-control" type="text" name="user" required="required" value="<?php echo $cookierecorda; ?>" placeholder="Username">
        </div>
        <input type="checkbox" name="recorda" value="recorda"> Recordar usuari<br><br>
        <div class="form-group">
            Contrasenya: <input class="form-control" type="password" name="password" required="required" placeholder="******">
        </div>
        <div class="form-group">
            <input class="btn red" type="submit" name="submit" value="   Login   " />
        </div>
    </form>

</div>

