<?php
class Base {
    function __construct($title,$style_url){
        $this->title = $title;
        $this->style_url = $style_url;
    }
    function getStyle(){
        return $this->style_url;
    }
    function getTitle(){
        return $this->title;
    }
}
?>
