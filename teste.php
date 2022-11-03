<?php
    include('telegram-class.php');

    $telegram = new Telegram();
    $telegram->enviarMensagem('760259065','TESTE DE MENSAGEM');
?>