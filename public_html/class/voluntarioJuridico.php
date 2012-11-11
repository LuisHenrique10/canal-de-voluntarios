<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of voluntarioJuridico
 *
 * @author tanieiko
 */
class voluntarioJuridico extends voluntario{
    private $cnpj;
    private $razao;
    private $site;
    private $dataFundacao;
    
    function __construct($cnpj, $razao, $site, $dataFundacao) {
        $this->cnpj = $cnpj;
        $this->razao = $razao;
        $this->site = $site;
        $this->dataFundacao = $dataFundacao;
    }
    
    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getRazao() {
        return $this->razao;
    }

    public function setRazao($razao) {
        $this->razao = $razao;
    }

    public function getSite() {
        return $this->site;
    }

    public function setSite($site) {
        $this->site = $site;
    }

    public function getDataFundacao() {
        return $this->dataFundacao;
    }

    public function setDataFundacao($dataFundacao) {
        $this->dataFundacao = $dataFundacao;
    }

}

?>
