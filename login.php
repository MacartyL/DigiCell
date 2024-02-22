<?php
require_once("bancoSenhas.php");
    class Cliente
    {
        var $email = "junin";//cadastro
        var $senha = "junin123";
        public function Email($login){
            global $email;
            if($login === $email){
                print_r("logado \n");
            }else{
                print_r("não \n");
            }
        }
    }

    