<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contato
 *
 * @author tanieiko
 */
class contato {
    private $id;
    private $nome;
    private $email;
    private $assunto;
    private $comentario;
    
    function __construct($nome, $email, $assunto, $comentario) {
        $this->nome = $nome;
        $this->email = $email;
        $this->assunto = $assunto;
        $this->comentario = $comentario;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function setComentario($comentario) {
        $this->comentario = $comentario;
    }

}

?>
