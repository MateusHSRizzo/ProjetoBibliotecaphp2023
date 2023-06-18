<?php

namespace MODEL;

class Livros {
    private ?int $cod = null;
    private ?string $nome = null;
    private ?int $n_paginas = null;
    private ?int $data_de_lancamento = null;
    private ?string $autor = null;
    private ?string $editora = null;

    public  function __construct()
    {
       
    }

    public function getcod(){
        return $this->cod;
    }

    public function setcod(int $cod){
        $this->cod = $cod;
    }

    public function getnome(){
        return $this->nome;
    }

    public function setnome(string $nome){
        $this->nome = $nome;
    }

    public function getn_paginas(){
        return $this->n_paginas;
    }

    public function setn_paginas(int $n_paginas){
        $this->n_paginas = $n_paginas;
    }
    
    public function getdata_de_lancamento(){
        return $this->data_de_lancamento;
    }

    public function setdata_de_lancamento(int $data_de_lancamento){
        $this->data_de_lancamento = $data_de_lancamento;
    }

    public function getautor(){
        return $this->autor;
    }

    public function setautor(string $autor){
        $this->autor = $autor;
    }

    public function geteditora(){
        return $this->editora;
    }

    public function seteditora(string $editora){
        $this->editora = $editora;
    }
}
?>