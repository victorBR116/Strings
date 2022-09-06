<?php 

namespace App;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;

        if ($this->validaEmail($email) !== false){
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido.");
        }
    }

    /*public function __construct($email)
    {
        $this->email = $email;
    
        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido");
        }
    }
*/
    public function setEmail(string $email): void
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

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}