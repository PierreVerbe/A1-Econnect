<?php
session_start();
session_destroy();
header('Location: ../Vues/login.html');
?>