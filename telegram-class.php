<?php

class telegram{
    public $linkAPI     = 'https://api.telegram.org/'; 
    public $token       = 'bot884482255:AAGzpXp9R0KiqjzEWXYBaXzNUk5ZQQJf9_8';
    public $mensagem    = '';
    public $chatID      = '';
    public $tMetodo     = '/sendMessage';
    //public $url = $linkAPI.''.$token.''.$tMetodo;
    public $url = "";
    
    public function enviarMensagem($chatID,$mensagem){
        echo 
        "
            ID: $chatID
            <br>
            MSG: $mensagem
        ";
        $this->url = "https://api.telegram.org/bot884482255:AAGzpXp9R0KiqjzEWXYBaXzNUk5ZQQJf9_8/sendMessage?chat_id={$chatID}&text={$mensagem}";
        var_dump($this->url);
        curl_init($this->url);

    }
    

}
?>