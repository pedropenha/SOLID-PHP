<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        $slug = new Slug($this->categoria);
        return 'http://videos.alura.com.br/' . $slug;
    }

    public function recuperaPontuacao(): int
    {
        return $this->minutosDeDuracao();
    }
}
