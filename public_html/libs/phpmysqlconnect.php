               <?php
/**
 * Description of phpmysqlconnect
 *
 * @author pedrotanaka
 */
class phpmysqlconnect {
    var $host		= 'mysql5.000webhost.com';	
    var $database 	= 'a6754175_g7';
    var $user           = 'a6754175_g7';
    var $password 	= 'g7geseth';
    
    
    var $conexao = null;
    var $query = null;
    var $result = null;

        /**
         * Method that conect to mySQL and select the working database
         * @return bool <code>FALSE</code> on failure <code>TRUE</code> otherwise
         */
    
	function connect() {
		$this->conexao = mysql_connect($this->host, $this->user, $this->password) 
                        or die("Couldn't connect to the database");
		$status = mysql_select_db($this->database, $this->conexao)
                        or die("Couldn't connect to the database");
		return $status;
	}

	function run_query($query) {
		$this->result = mysql_query($query);
		return $this->result;
	}

        /**
         * Retorna o resultado da query passada como parametro na função
         * <code>run_query($query)</code>
         * 
         * @return array Vetor associativo relativo aos nomes das colunas da tabela.
         */
        
	function get_result() {
		return mysql_fetch_array($this->result);
	}

	function count_lines() {
		return mysql_num_rows($this->result);
	}
        
        function close_connection(){
            mysql_close();
        }
}

?>
