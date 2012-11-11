<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of voluntarioFisico
 *
 * @author tanieiko
 */
class voluntarioFisico extends voluntario{
    private $cpf;
    private $profissao;
    private $dataNasc;
    
    function __construct($cpf, $profissao, $dataNasc) {
        $this->cpf = $cpf;
        $this->profissao = $profissao;
        $this->dataNasc = $dataNasc;
    }
    
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

}

?>
