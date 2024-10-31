<?php

if (!auth()) {
    abort(403);
}

$livros = $database->query(
    query: 'select * from livros where usuario_id = :id',
    class: Livro::class,
    params: [':id' => auth()->id]
)->fetchAll();

view('meus-livros', compact('livros'));
