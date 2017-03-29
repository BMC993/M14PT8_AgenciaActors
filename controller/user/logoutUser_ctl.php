<?php

session_start();
session_destroy();

header("Location: ?ctl=user&act=llistar");
