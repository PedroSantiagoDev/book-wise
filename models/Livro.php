<?php

class Livro
{
    public int $id;
    public string $titulo;
    public string $autor;
    public string $descricao;

    public static function make($item)
    {
        $livro = new self();

        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];

        return $livro;
    }
}
