<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author tanieiko
 */
class usuario {
    private $id;
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    private $tipoUsuario;
    private $dataRegistro;
    private $dataUltimaVisita;
    
    function __construct($nome, $usuario, $email, $senha, $tipoUsuario, $dataRegistro) {
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipoUsuario = $tipoUsuario;
        $this->dataRegistro = $dataRegistro;
    }
    
    /*ATRIBUTO: ID*/
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    /*ATRIBUTO: NOME*/
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    /*ATRIBUTO: USUARIO*/
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

        /*ATRIBUTO: E-MAIL*/
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    /*ATRIBUTO: SENHA*/
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    /*ATRIBUTO: TIPO DE USUARIO*/
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    /*ATRIBUTO: DATA DE REGISTRO*/
    public function getDataRegistro() {
        return $this->dataRegistro;
    }

    public function setDataRegistro($dataRegistro) {
        $this->dataRegistro = $dataRegistro;
    }

    /*ATRIBUTO: DATA DA ÚLTIMA VISITA*/
    public function getDataUltimaVisita() {
        return $this->dataUltimaVisita;
    }

    public function setDataUltimaVisita($dataUltimaVisita) {
        $this->dataUltimaVisita = $dataUltimaVisita;
    }

}

?>
