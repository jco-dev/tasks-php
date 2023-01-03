<?php

require_once 'Model.php';

class Task extends Model
{
    public $color = "black";
//    public function __construct(
//        public $title= '',
//        public $completed = false
//    ) {
//    }

    public function complete()
    {
        $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
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



// $t = new Task("Ir al supermercado", true);
// $t->save();

// $e = new Exam("Examen de PHP", 'PHP 8');
// $e->save("exam-1.txt");
