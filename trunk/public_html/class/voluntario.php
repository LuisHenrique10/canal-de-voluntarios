<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of voluntario
 *
 * @author tanieiko
 */
class voluntario {
    private $nome;
    private $email;
    private $logradouro;
    private $bairro;
    private $regiao;
    private $cidade;
    private $telefone;
    private $celular;
    private $areaAtuacao;
    private $comoSoubeJCI;
    private $xpVoluntariado;
    private $xpDescricao;
    private $publico;
    private $disponibilidade;
    private $freqDisponibilidade;
    private $dataCadastro;
    private $descricaoPessoal;
    private $tipoAjuda;
    private $infoAdicional;
    private $validacao;
    
    function __construct($nome, $email, $celular, $profissao, $areaAtuacao, $xpVoluntariado, $publico, $disponibilidade, $freqDisponibilidade, $tipoAjuda) {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->profissao = $profissao;
        $this->areaAtuacao = $areaAtuacao;
        $this->xpVoluntariado = $xpVoluntariado;
        $this->publico = $publico;
        $this->disponibilidade = $disponibilidade;
        $this->freqDisponibilidade = $freqDisponibilidade;
        $this->tipoAjuda = $tipoAjuda;
    }
    
    /*ATRIBUTO: NOME*/
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    /*ATRIBUTO: E-MAIL*/
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    /*ATRIBUTO: LOGRADOURO*/
    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    
    /*ATRIBUTO: BAIRRO*/
    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    
    /*ATRIBUTO: REGIÃO*/
    public function getRegiao() {
        return $this->regiao;
    }

    public function setRegiao($regiao) {
        $this->regiao = $regiao;
    }

    /*ATRIBUTO: CIDADE*/
    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    /*ATRIBUTO: TELEFONE*/
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /*ATRIBUTO: CELULAR*/
    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    
    /*ATRIBUTO: ÁREA DE ATUAÇÃO*/
    public function getAreaAtuacao() {
        return $this->areaAtuacao;
    }

    public function setAreaAtuacao($areaAtuacao) {
        $this->areaAtuacao = $areaAtuacao;
    }

    /*ATRIBUTO: COMO SOUBE DA JCI*/
    public function getComoSoubeJCI() {
        return $this->comoSoubeJCI;
    }

    public function setComoSoubeJCI($comoSoubeJCI) {
        $this->comoSoubeJCI = $comoSoubeJCI;
    }

    /*ATRIBUTO: EXPERIÊNCIA COM VOLUNTARIADO*/
    public function getXpVoluntariado() {
        return $this->xpVoluntariado;
    }

    public function setXpVoluntariado($xpVoluntariado) {
        $this->xpVoluntariado = $xpVoluntariado;
    }

    /*ATRIBUTO: DESCRIÇÃO DA EXPERIÊNCIA*/
    public function getXpDescricao() {
        return $this->xpDescricao;
    }

    public function setXpDescricao($xpDescricao) {
        $this->xpDescricao = $xpDescricao;
    }

    /*ATRIBUTO: PÚBLICO ALVO*/
    public function getPublico() {
        return $this->publico;
    }

    public function setPublico($publico) {
        $this->publico = $publico;
    }

    /*ATRIBUTO: DISPONIBILIDADE*/
    public function getDisponibilidade() {
        return $this->disponibilidade;
    }

    public function setDisponibilidade($disponibilidade) {
        $this->disponibilidade = $disponibilidade;
    }

    /*ATRIBUTO: FREQUÊNCIA DE DISPONIBILIDADE*/
    public function getFreqDisponibilidade() {
        return $this->freqDisponibilidade;
    }

    public function setFreqDisponibilidade($freqDisponibilidade) {
        $this->freqDisponibilidade = $freqDisponibilidade;
    }

    /*ATRIBUTO: DATA DO CADASTRO*/
    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    /*ATRIBUTO: DESCRIÇÃO PESSOAL*/
    public function getDescricaoPessoal() {
        return $this->descricaoPessoal;
    }

    public function setDescricaoPessoal($descricaoPessoal) {
        $this->descricaoPessoal = $descricaoPessoal;
    }

    /*ATRIBUTO: TIPO DE AJUDA*/
    public function getTipoAjuda() {
        return $this->tipoAjuda;
    }

    public function setTipoAjuda($tipoAjuda) {
        $this->tipoAjuda = $tipoAjuda;
    }

    /*ATRIBUTO: INFORMAÇÃO ADICIONAL*/
    public function getInfoAdicional() {
        return $this->infoAdicional;
    }

    public function setInfoAdicional($infoAdicional) {
        $this->infoAdicional = $infoAdicional;
    }

    /*ATRIBUTO: VALIDAÇÃO*/
    public function getValidacao() {
        return $this->validacao;
    }

    public function setValidacao($validacao) {
        $this->validacao = $validacao;
    }
}

?>
