<?php

require_once './Model.php';

class Exam extends Model
{
    public function __construct(
        public $topic,
        public $info,
        public $completed = false
    ) {
    }

    // public function buildString()
    // {
    //     return "Titulo: {$this->title}\nCompleto: " . ($this->completed ? "Si" : "No");
    // }

    // public function save($name)
    // {
    //     $file = fopen($name, "w");
    //     fwrite($file, $this->buildString());
    //     fclose($file);
    // }
}
