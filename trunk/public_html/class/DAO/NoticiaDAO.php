<?php

/**
 * Classe de acesso a dados para as noticias
 *
 * @author pedrotanaka
 */
class NoticiaDAO {

// irá receber uma conexão
    var $conexao = null;

// construtor
    public function NoticiaDAO() {
        require 'Conexao.php';
        $this->conexao = new Conexao();
        $this->conexao->exec("SET NAMES 'utf8'");
        $this->conexao->exec('SET character_set_connection=utf8');
        $this->conexao->exec('SET character_set_client=utf8');
        $this->conexao->exec('SET character_set_results=utf8');
    }

    public function getInstanceById($id) {
        try {

            $stmt = $this->conexao->prepare("SELECT * FROM `a6754175_g7`.`noticias`  
                WHERE `id_noticia` = ? LIMIT 1;");
                
            $stmt->bindValue(1, $id);

//            $dao = new PDOStatement();
//            $dao

            if (!$stmt->execute()) {
                $todos_erros = $stmt->errorInfo();
                foreach ($todos_erros as $erro) {
                    echo $erro . '\n';
                }
                die('Não pode obter resultado da query!!' .
                        'Erro#: ' . $stmt->errorCode());
            }
            $this->conexao = null;
            return $stmt->fetchAll();
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

// realiza uma inserção
    public function Insere($noticia) {
        try {
            $stmt = $this->conexao->prepare("INSERT INTO `a6754175_g7`.`noticias` (`id_noticia`, `titulo`, `conteudo`, `data_criada`) 
                VALUES (NULL,?, ?, NOW())");
            $stmt->bindValue(1, $noticia->getTitulo());
            $stmt->bindValue(2, $noticia->getConteudo());
            if (!$stmt->execute()) {
                $todos_erros = $stmt->errorInfo();
                foreach ($todos_erros as $erro) {
                    echo $erro . '\n';
                }
                die('Não pode obter resultado da query!!' .
                        'Erro#: ' . $stmt->errorCode());
            }

//            $pdo = new PDO();
//            $pdo->errorCode()
// fecho a conexão
            $this->conexao = null;
            if ($noticia->getImagens() != NULL) {
                $this->AdicionarImagens($noticia);
            }
// caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    function AdicionarImagens($noticia) {
        try {
            $foto = $noticia->getImagens();
            if (!empty($foto['name'])) {
                if (!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $foto["type"])) {
                    $error[1] = "Isso não é uma imagem.";
                }
                //$dimensoes = getimagesize($foto["tmp_name"]);

                if (count($error) == 0) {
                    /* @var $ext ArrayObject */
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                    $caminho_imagem = "noticias/imgs/" . $nome_imagem;

                    move_uploaded_file($foto["tmp_name"], "../../" . $caminho_imagem)
                            or die('A imagem nao pode ser escrita');

                    $stmt = $this->conexao->prepare("INSERT INTO `imagens_noticia` 
                    (`id_noticia`, `imagem`) 
                    VALUES (  ?,    ?   );");
                    $stmt->bindValue(1, $noticia->getId());
                    $stmt->bindValue(2, $caminho_imagem);
                    if (!$stmt->execute()) {
                        $todos_erros = $stmt->errorInfo();
                        foreach ($todos_erros as $erro) {
                            echo $erro . '\n';
                        }
                        die('Não pode obter resultado da query!!' .
                                'Erro#: ' . $stmt->errorCode());
                    }
                }
            }

// fecho a conexão
            $this->conexao = null;
        } catch (PDOException $exc) {
            echo "Erro: " . $exc->getMessage();
        }
    }

// realiza um Update
    public function Update($noticia) {
        try {
// preparo a query de update – Prepare Statement
            $stmt = $this->conexao->prepare("
                UPDATE  `a6754175_g7`.`noticias` 
                SET  `titulo` =  ?, `conteudo` =  ?
                WHERE  `noticias`.`id_noticia` = ? ;
            ");
            $this->conexao->beginTransaction();
            $stmt->bindValue(1, $noticia->getTitulo());
            $stmt->bindValue(2, $noticia->getConteudo());
            $stmt->bindValue(3, $noticia->getId());
// executo a query preparada
            if (!$stmt->execute()) {
                $todos_erros = $stmt->errorInfo();
                foreach ($todos_erros as $erro) {
                    echo $erro . '\n';
                }
                var_dump($noticia);
                die('Não pode obter resultado da query!!' .
                        'Erro#: ' . $stmt->errorCode());
            }
            $this->conexao->commit();
// fecho a conexão
            $this->conexao = null;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

// remove um registro
    public function Deleta($id) {
        try {
            $num = $this->conexao->exec("DELETE FROM `a6754175_g7`.`noticias` WHERE id_noticia = $id");
// caso seja execuado ele retorna o número de rows que foram afetadas.
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
// caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    /**
     * (PHP 5 &gt;= 5.1.0, PECL pdo &gt;= 1.0.0)<br/>
     * Retorna a lista de noticias segundo a query passada.
     * Caso contrario retorna todas as infos da tabela
     * @param string $query <p>
     * Query para ser executada.
     * </p>
     * @return Array Todos as noticias
     */
    public function Lista($query = null) {
        try {
            if ($query == null) {
                $stmt = $this->conexao->query("SELECT * FROM `a6754175_g7`.`noticias`") or die('Erro select *');
                //require_once '../noticia.php';
                $this->conexao = null;
                return $stmt;
//                $noticias = new ArrayObject();
//                /* @var $noticias ArrayObject */
//                settype($noticias, "Array");
//                $i = 0;
//                foreach ($stmt as $row) {
//                    $noticia = new Noticia();
//                    $noticia->setConteudo($row['conteudo']);
//                    $noticia->setId($row['id_noticia']) or die('id');
//                    $noticia->setData($row['data_criada']) or die('dt');
//                    $noticia->setTitulo($row['titulo']) or die('titulo');
//                    $noticias[i] = $noticia;
//                    $i++;
//                }
//                return $noticias or die('return');
            } else {
                $stmt = $this->conexao->query($query);
            }
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}

?>
