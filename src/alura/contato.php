<?php 

namespace App;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if (!$posicaoArroba){
            return "Usuario inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}