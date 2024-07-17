<?php
function check_session() {
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: ../views/auth/login.php");
        exit();
    }
}
?>
