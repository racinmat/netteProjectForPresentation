<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassWithName
 *
 * @author Azathoth
 */
class ClassWithName {
    
    private $name;
    
    function __construct($name) {
        $this->name = $name;
    }
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }


}
