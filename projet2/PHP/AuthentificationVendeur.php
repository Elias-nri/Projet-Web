<?php
function connecter (): bool {
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecter']);
}

function forcer_connection (): void {
    if(!connecter()) {
        header('Location: CompteVendeur.php');
        exit();
    }
}