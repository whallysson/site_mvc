<?php

namespace Source\App; 

use Source\Core\Controller;
use Source\Models\Auth;
use Source\Support\Message;

class App extends Controller
{
    public function __construtc() 
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_APP);

        //RESTRIÇÃO
        if(!Auth::user()) {
            $this->message->warning("Efetue login para acessar o App.")->flash();
            redirect("/entrar");
        }

    }

    public function home()
    {
        echo 'home';
        echo flash();
        var_dump(Auth::user()); 
        echo "<a title='Sair' href='" . url("/app/sair") . "'>Sair</a>";
    }

    public function logout() 
    {
        (new Message())->info("você saiu com sucesso " . Auth::user()->first_name . ". Volte logo :)")->flash();
        Auth::logout();
        redirect("/entrar");
    }

}