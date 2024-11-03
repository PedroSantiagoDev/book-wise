<?php

if (!auth()) {
    abort(403);
}

$livros = Livro::meus(auth()->id);

view('meus-livros', compact('livros'));
