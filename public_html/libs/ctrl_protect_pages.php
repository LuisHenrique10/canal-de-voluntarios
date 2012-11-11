<?php

/**
 * Sistema de segurança com acesso restrito
 *
 * Usado para restringir o acesso de certas páginas do seu site
 *
 * @author Thiago Belem <contato@thiagobelem.net>
 * @link http://thiagobelem.net/
 *
 * @version 1.0
 * @package SistemaSeguranca
 */
//  Configurações do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?

$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'

$_SG['validaSempre'] = false;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.

$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] = 'admin';                // Senha MySQL
$_SG['banco'] = 'cantinho';            // Banco de dados MySQL

$_SG['paginaLogin'] = '../back_end_adm/index.php'; // Página de login

$_SG['tabela'] = 'administrador';       // Nome da tabela onde os usuários são salvos
// ==============================
// ======================================
//   ~ Não edite a partir deste ponto ~
// ======================================
    


// Verifica se precisa iniciar a sessão

    if ($_SG['abreSessao'] == true) {
        session_start();
    }



/**
 * Função que valida um usuário e senha
 *
 * @param string $usuario - O usuário a ser validado
 * @param string $senha - A senha a ser validada
 *
 * @return bool - Se o usuário foi validado ou não (true/false)
 */
function validaUsuario($usuario, $senha) {
    global $_SG;
    
    require_once 'phpmysqlconnect.php';
    $my_sql = new phpmysqlconnect();

    if ($_SG['conectaServidor'] == true) {
        $my_sql->connect();
    }


    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

// Usa a função addslashes para escapar as aspas
    //$nusuario = addslashes($usuario);
    //$nsenha = addslashes($senha);
    
    $enc_senha = md5($senha);

// Monta uma consulta SQL (query) para procurar um usuário
    $sql = "SELECT `id_adm`, `usuario` FROM `" . $_SG['tabela'] . "` WHERE " . $cS . 
            " `usuario` = '" . $usuario . "' AND " . $cS . " `senha` = '" . $enc_senha . "' LIMIT 1";
    $my_sql->run_query($sql);
    $resultado = $my_sql->get_result();

// Verifica se encontrou algum registro
    if (empty($resultado)) {
        return false;
    } else {
        // O registro foi encontrado => o usuário é valido
        // Definimos dois valores na sessão com os dados do usuário
        
        $_SESSION['usuarioID'] = $resultado['id_adm']
        or die('An error occurred: '.error_get_last()); // Pega o valor da coluna 'id do registro encontrado no MySQL
        $_SESSION['usuarioNome'] = $resultado['usuario']
        or die('An error occurred: '.error_get_last()); // Pega o valor da coluna 'nome' do registro encontrado no MySQL
        // Verifica a opção se sempre validar o login
        if ($_SG['validaSempre'] == true) {
            // Definimos dois valores na sessão com os dados do login
            $_SESSION['usuarioLogin'] = $usuario;
            $_SESSION['usuarioSenha'] = $senha;
        }
        
        if ($_SG['conectaServidor'] == true) {
            $my_sql->close_connection();
        }
        
        return true;
    }
}

/**
 * Função que protege uma página
 */
function protegePagina() {
    global $_SG;

    if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
// Não há usuário logado, manda pra página de login
        expulsaVisitante();
    } else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
// Há usuário logado, verifica se precisa validar o login novamente
        if ($_SG['validaSempre'] == true) {
// Verifica se os dados salvos na sessão batem com os dados do banco de dados
            if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
// Os dados não batem, manda pra tela de login
                expulsaVisitante();
            }
        }
        header("Location: main_adm.php");
    }
}

/**
 * Função para expulsar um visitante
 */
function expulsaVisitante() {
    global $_SG;

// Remove as variáveis da sessão (caso elas existam)
    unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

// Manda pra tela de login
    header("Location: " . $_SG['paginaLogin']);
}

?>