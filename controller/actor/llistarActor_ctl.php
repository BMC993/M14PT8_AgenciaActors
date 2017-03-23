<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of llistarActor_ctl
 *
 * @author bernabe
 */
$llistaActors = $agencia->recuperarActors();
include 'view/header.php';
include 'view/actor/llistaActor.php';
include 'view/footer.php';

