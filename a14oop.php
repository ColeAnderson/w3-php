<?php
    class phpClass{
        var $var1;
        var $var2 = "";

        function myfunc($arg1, $arg2){
            // todo logic
        }
    }

    class Book{
        // member variables! 
        var $title;
        var $price;
        function __construct($p=0, $t=""){   $this->price = $p; $this->title = $t; }
        function getPrice(){    return $this->price; }
        function getTitle(){    return $this->title; }
    
        function setPrice($arg){ $this->price = $arg; }
        function setTitle($arg){ $this->title = $arg; }
        
        function __destruct(){}
    }
?>