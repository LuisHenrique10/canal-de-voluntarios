<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe de modelo de notícia
 *
 * @author pedrotanaka
 */
class Noticia {
    private $titulo;
    private $conteudo;
    private $id_noticia;
    private $data_criada;    
    private $imagens;

    public function __construct() {
        $this->conteudo = NULL;
        $this->data_criada = NULL;
        $this->id_noticia = NULL;
        $this->imagens = NULL;
        $this->titulo = NULL;
    }

    function setTitulo($_titulo) {
        $this->titulo = $_titulo;
    }
    function setConteudo($_conteudo) {
        $this->conteudo = $_conteudo;
    }
    function setId($_id) {
        $this->id_noticia = $_id;
    }
    function setData($_data) {
        $this->data_criada = $_data;
    }
    function setImagens($_imagens) {
        $this->imagens = $_imagens;
    }
    
    
    
    function getTitulo(){
        return $this->titulo;
    }
    
    function getId(){
        return $this->id_noticia;
    }
    function getConteudo(){
        return $this->conteudo;
    }
    function getData(){
        return $this->data_criada;
    }
    function getImagens(){
        return $this->imagens;
    }
}

?>
