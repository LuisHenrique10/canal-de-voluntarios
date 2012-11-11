<?php

// Inclui o arquivo com o sistema de segurança
require '../libs/ctrl_protect_pages.php';

// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Salva duas variáveis com o que foi digitado no formulário
// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
    $usuario = (isset($_REQUEST['login'])) ? $_REQUEST['login'] : '';
    $senha = (isset($_REQUEST['senha'])) ? $_REQUEST['senha'] : '';

// Utiliza uma função criada no seguranca.php pra validar os dados digitados
    if (validaUsuario($usuario, $senha) == true) {
// O usuário e a senha digitados foram validados, manda pra página interna
        header("Location: main_adm.php") or die("Morreu redirecionando");
    } else {
// O usuário e/ou a senha são inválidos, manda de volta pro form de login
// Para alterar o endereço da página de login, verifique o arquivo seguranca.php
        //expulsaVisitante();
        header("Location: index.php");
    }
}
?>