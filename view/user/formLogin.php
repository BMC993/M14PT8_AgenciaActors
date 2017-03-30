<?php
if (isset($_COOKIE['recorda'])) {
    $cookierecorda = $_COOKIE['recorda'];
}else{
    $cookierecorda = "";
}
?>
<div class="col-xs-12 col-md-8 col-lg-8">
    <form action="?ctl=user&act=llistar" method="post">
        <div class="form-group">
            Username: <input class="form-control" type="text" name="user" required="required" value="<?php echo $cookierecorda; ?>" placeholder="Username">
        </div>
        <input type="checkbox" name="recorda" value="recorda"> Recorda<br><br>
        <div class="form-group">
            Password: <input class="form-control" type="password" name="password" required="required" placeholder="******">
        </div>
        <div class="form-group">
            <input class="btn red" type="submit" name="submit" value="   Sign in   " />
        </div>
    </form>

</div>

