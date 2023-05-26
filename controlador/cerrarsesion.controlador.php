<?php
session_start();
session_destroy();
header("location:/sistema-asistencias/vista/login/login.php");
