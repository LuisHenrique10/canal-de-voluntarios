<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areaAtuacao
 *
 * @author tanieiko
 */
class areaAtuacao {
    private $id;
    private $area;
    
    function __construct($area) {
        $this->area = $area;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

}

?>
