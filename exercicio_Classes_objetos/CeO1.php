<?php

    class Aluno{
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        public $media;

        public function Media(){
            $this->media = (($this->nota1 * 3) + ($this->nota2 * 3) + ($this->nota3 * 4))/(3+3+4);
        }
        public function info(){
            echo "Nome: ".$this->nome.
                "<br>Media: ".$this->media;
        }
    
    }
    





?>