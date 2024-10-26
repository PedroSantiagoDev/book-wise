<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisar = null)
    {
        $sql = "select * from livros where
        titulo like :titulo
        or autor like :autor";
        $query = $this->db->prepare($sql);
        $query->bindValue(':titulo', "%$pesquisar%");
        $query->bindValue(':autor', "%$pesquisar%");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Livro::class);
    }

    public function livro($id)
    {
        $query = $this->db->prepare('select * from livros where id = :id');
        $query->bindValue(':id', $id);
        $query->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $query->execute();
        return $query->fetch();
    }
}
