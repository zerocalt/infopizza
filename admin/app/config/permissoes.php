<?php
    function exigirLogin() {
        if (empty($_SESSION['usuario_id'])) {
            header("Location: ../../../index.php");
            exit();
        }
    }

    function seLogado() {
        if (isset($_SESSION['usuario_id'])) {
            header("Location: admin/app/index/index.php");
            exit();
        }
    }
?>