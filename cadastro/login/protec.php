<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Voçê não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Logar<a></p>");
}


?>