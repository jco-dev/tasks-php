<?php
class Task{
    public $title;
    public $completed = false;

    public function __construct($title, $completed = false)
    {
        $this->title = $title;
        $this->completed = $completed;
    }
    
    public function complete()
    {
        $this->completed = true;
    }
}