<?php
require_once __DIR__ . './../functions.php';
class Model
{
    public function buildString()
    {
        $me = new ReflectionClass($this);
        $properties = $me->getProperties();
        $string = "";
        foreach ($properties as $property) {
            $propertyName = $property->name;
            $propertyValue =   $this->$propertyName;
            $string .= "{$propertyName}: " . (is_bool($propertyValue)? var_export($propertyValue, true): $propertyValue) . "\n";
        }
        return $string;
    }

    public function save($name = null)
    {
        if(is_null($name)){
            $me = new ReflectionClass($this);
            $filename = $me->getName();
            $name = lcfirst($filename) . '.txt';
        }
        
        $file = fopen($name, "w");
        fwrite($file, $this->buildString());
        fclose($file);
    }
}
class Task extends Model
{
    public function __construct(
        public $title,
        public $completed = false
    ) {
    }

    public function complete()
    {
        $this->completed = true;
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

$t = new Task("Ir al supermercado", true);
$t->save();

$e = new Exam("Examen de PHP", 'PHP 8');
$e->save("exam-1.txt");
