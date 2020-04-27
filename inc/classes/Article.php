<?php

class Article {
    public $title;
    public $resume;
    public $content;
    public $author;
    public $date;
    public $category;
    
    public function __construct($title='', $resume='', $content='', $author='', $date='', $category='') {
        $this->title = $title;
        $this->resume = $resume;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function getDateFr() {
        return date('d/m/Y', strtotime($this->date));
    }

    public function getCategory (){
        return str_replace(' ' , '' , $this->category);
    }

}
