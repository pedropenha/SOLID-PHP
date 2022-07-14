<?php

namespace Alura\Solid\Model;

class Feedback
{

    private int $nota;
    private string $depoimento;

    public function __constructor(int $nota, ?string $depoimento){

        if($nota < 9 && empty($depoimento)){
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function getNota(){
        return $this->nota;
    }

    public function getDepoimento(){
        return $this->depoimento;
    }

}