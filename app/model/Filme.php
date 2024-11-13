<?php 

require_once __DIR__ . "\..\config\database.php";
//Classe que representa a tabela filme no projeto

class Filme {
    
    private $tabela = 'filme';

    private $pdo; 

    //colunas da tabela
    public $id;
    public $nome;
    public $ano;
    public $descricao;

    public function __construct(){
        global $pdo;

        $this->pdo = $pdo;
    }

    public function buscarTodos() {
                
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        
        return $stmt->fetchall();
    }
    

}