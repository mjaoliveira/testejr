<?php
class Controller{

	private $pdo;

	public function __construct(){

		$this->pdo = new PDO("mysql:dbname=testejr;host=localhost", "root","");
	}

	public function adicionar($cliente = '',$data,$produto,$status){
	
			$sql = "INSERT INTO clientes(NOME, DATA_NASCIMENTO,ID_PRODUTO,STATUS) VALUES (:nome, :data, :produto, :status)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $cliente);
			$sql->bindValue(':data', $data);
			$sql->bindValue(':produto', $produto);
			$sql->bindValue(':status', $status);
			$sql->execute();

			
		
	} 
    
    
	public function getInfo($id){
		$sql = "SELECT * FROM clientes WHERE ID = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			return $sql->fetch();
		} else {
			return array();
		}
	} 

	public function getAll(){
		$sql = "SELECT 
					B.ID,
					B.NOME,
					B.DATA_NASCIMENTO,
					A.DESCRICAO,
					A.STAUS,
					A.ID    AS ID_PRODUTO

				FROM clientes_produtos A 
				INNER JOIN clientes B ON A.ID = B.ID_PRODUTO";

		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){
			return $sql->fetchAll();
		} else {
			return array();
		}
	}
    
	public function editar($id, $cliente ,$data, $produto, $status){
	
			$sql = "UPDATE clientes 
					SET NOME            = :cliente,
					    DATA_NASCIMENTO = :data ,
					    ID_PRODUTO      = :produto,
					    STATUS          = :status
					WHERE ID = :id";

			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cliente', $cliente);
			$sql->bindValue(':data', $data);
			$sql->bindValue(':produto', $produto);
			$sql->bindValue(':status', $status);
			$sql->bindValue(':id', $id);
			$sql->execute();

	
	}
      
	public function excluirPeloId($id){
		$sql = "DELETE FROM clientes WHERE ID = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}

}