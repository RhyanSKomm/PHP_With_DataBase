<?php 

require_once __DIR__ . "\..\config\database.php";
//Classe que representa a tabela filme no projeto
require_once __DIR__ ."\..\\view\\filme\\excluir.php";


class Filme {
    
    private $tabela = 'filme';

    private $pdo; 

    //colunas da tabela
    public $id;
    public $nome;
    public $img;
    public $ano;
    public $descricao;

    public function __construct(){
        global $pdo;

        $this->pdo = $pdo;
    }

    public function buscarTodos() {
                
        $query = "SELECT * FROM $this->tabela ORDER BY id DESC";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        
        return $stmt->fetchall();
    }
    
    public function buscarPorId($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetch();

    }

    public function excluir($id){
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT) ;
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return 1;
        }
    }

    public function cadastrar($nome , $img, $ano, $descricao) {
        $query = "INSERT INTO $this->tabela (nome, img, ano, descricao) VALUES (:nome, :img, :ano, :descricao)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":img", $img, PDO::PARAM_STR);
        $stmt->bindParam(":ano", $ano, PDO::PARAM_INT) ;
        $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            return true;  
        } else {
            return false; 
        }

    }

    public function editarFilme($id,$img, $nome, $ano, $descricao){

        $query = "UPDATE $this->tabela SET nome=:nome, img=:img, ano=:ano, descricao=:descricao WHERE id=:id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}