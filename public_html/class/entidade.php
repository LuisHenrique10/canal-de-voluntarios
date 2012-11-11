<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entidade
 *
 * @author tanieiko
 */
class entidade {
    private  $cnpj;
    private  $razao;
    private  $responsavel;
    private  $logradouro;
    private  $bairro;
    private  $regiao;
    private  $cidade;
    private  $email;
    private  $telefone;
    private  $site;
    private  $dataFundacao;
    private  $publico;
    private  $numBeneficiados;
    private  $necessidades;
    private  $recebeApoio;
    private  $catApoio;
    private  $disponibilidade;
    private  $validacao;
    
    /*CONSTRUTOR*/
    function __construct($cnpj, $razao, $responsavel, $logradouro, $bairro, $regiao, $cidade, 
                         $email,$telefone, $dataFundacao, $publico, $numBeneficiados, $necessidades, 
                         $recebeApoio, $catApoio, $disponibilidade, $validacao)
    {
        $this->setCnpj($cnpj);
        $this->setRazao($razao);
        $this->setResponsavel($responsavel);
        $this->setLogradouro($logradouro);
        $this->setBairro($bairro);
        $this->setRegiao($regiao);
        $this->setCidade($cidade);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setDataFundacao($dataFundacao);
        $this->setPublico($publico);
        $this->setNumBeneficiados($numBeneficiados);
        $this->setNecessidades($necessidades);
        $this->setRecebeApoio($recebeApoio);
        $this->setCatApoio($catApoio);
        $this->setDisponibilidade($disponibilidade);
        $this->setValidacao($validacao);
    }
    
    /*ATRIBUTO: CNPJ*/
    function setCnpj($cnpj)
    {
        $this->cnpj= $cnpj;
    }
    
    function getCnpj()
    {
        return $this->cnpj;
    }
    
    /*ATRIBUTO: RAZAO*/
    function setRazao($razao)
    {
        $this->razao= $razao;
    }
    
    function getRazao()
    {
        return $this->razao;
    }
    
    /*ATRIBUTO: RESPONSÁVEL*/
    function setResponsavel($responsavel)
    {
        $this->responsavel= $responsavel;
    }
    
    function getResponsavel()
    {
        return $this->responsavel;
    }
    
    /*ATRIBUTO: LOGRADOURO*/
    function setLogradouro($logradouro)
    {
        $this->logradouro= $logradouro;
    }
    
    function getLogradouro()
    {
        return $this->logradouro;
    }
    
    /*ATRIBUTO: BAIRRO*/
    function setBairro($bairro)
    {
        $this->bairro= $bairro;
    }
    
    function getBairro()
    {
        return $this->bairro;
    }
    
    /*ATRIBUTO: REGIÃO*/
    function setRegiao($regiao)
    {
        $this->regiao= $regiao;
    }
    
    function getRegiao()
    {
        return $this->regiao;
    }
    
    /*ATRIBUTO: CIDADE*/
    function setCidade($cidade)
    {
        $this->cidade= $cidade;
    }
    
    function getCidade()
    {
        return $this->cidade;
    }
    
    /*ATRIBUTO: E-MAIL*/
    function setEmail($email)
    {
        $this->email= $email;
    }
    
    function getEmail()
    {
        return $this->email;
    }
    
    /*ATRIBUTO: TELEFONE*/
    function setTelefone($telefone)
    {
        $this->telefone= $telefone;
    }
    
    function getTelefone()
    {
        return $this->telefone;
    }
    
    /*ATRIBUTO: SITE*/
    function setSite($site)
    {
        $this->site= $site;
    }
    
    function getSite()
    {
        return $this->site;
    }
    
    /*ATRIBUTO: DATA DA FUNDAÇÃO*/
    function setDataFundacao($dataFundacao)
    {
        $this->dataFundacao= $dataFundacao;
    }
    
    function getDataFundacao()
    {
        return $this->dataFundacao;
    }
    
    /*ATRIBUTO: PÚBLICO ALVO*/
    function setPublico($publico)
    {
        $this->publico= $publico;
    }
    
    function getPublico()
    {
        return $this->publico;
    }
    
    /*ATRIBUTO: NÚMERO DE BENEFICIADOS*/
    function setNumBeneficiados($numBeneficiados)
    {
        $this->numBeneficiados= $numBeneficiados;
    }
    
    function getNumBeneficiados()
    {
        return $this->numBeneficiados;
    }
    
    /*ATRIBUTO: NECESSIDADES*/
    function setNecessidades($necessidades)
    {
        $this->necessidades= $necessidades;
    }
    
    function getNecessidades()
    {
        return $this->necessidades;
    }
    
    /*ATRIBUTO: RECEBE APOIO*/
    function setRecebeApoio($recebeApoio)
    {
        $this->recebeApoio= $recebeApoio;
    }
   
    function getRecebeApoio()
    {
        return $this->recebeApoio;
    }
   
    /*ATRIBUTO: CATEGORIA DE APOIO*/
    function setCatApoio($catApoio)
    {
        $this->catApoio= $catApoio;
    }
    
    function getCatApoio()
    {
        return $this->catApoio;
    }
    
    /*ATRIBUTO: DISPONIBILIDADE*/
    function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade= $disponibilidade;
    }
    
    function getDisponibilidade()
    {
        return $this->disponibilidade;
    }
    
    /*ATRIBUTO: VALIDACAO*/
    function setValidacao($validacao)
    {
        $this->validacao= $validacao;
    }
    
    function getValidacao()
    {
        return $this->validacao;
    }

}

?>
