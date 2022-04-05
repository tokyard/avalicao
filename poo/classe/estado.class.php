<?php
    class Estado{
        private $id_estado;
        private $nome_est;
        private $sigla;
        
        public function __construct($id_estado, $nome_est, $sigla){
            
            $this->setID($id_estado);
            $this->setNome($nome_est);
            $this->setSigla($sigla);
        }

        public function __toString(){
            $str = "ID do Estado: ".$this->id_estado.
            "<br>Nome do Estado: ".$this->nome_est.
            "<br>Sigla: ".$this->sigla;
            
            return $str;
        }
        
        public function inserir(){
            
            $pdo = Conexao::getInstance();
            $stmt = $pdo->prepare('INSERT INTO estado (nome_est, sigla) VALUES(:nome_est, :sigla)');
            $stmt->bindParam(':nome_est', $this->nome_est, PDO::PARAM_STR);
            $stmt->bindParam(':sigla', $this->sigla, PDO::PARAM_STR);
    
            return $stmt->execute();
            
        }
        
        function editar($id_estado){
            $pdo = Conexao::getInstance();
            $stmt = $pdo->prepare('UPDATE estado SET nome_est = :nome_est, sigla = :sigla WHERE id_estado = :id_estado');
            $stmt->bindParam(':id_estado', $id_estado, PDO::PARAM_INT);
            $stmt->bindParam(':nome_est', $this->nome_est, PDO::PARAM_STR);
            $stmt->bindParam(':sigla', $this->sigla, PDO::PARAM_STR);
        
    
            $stmt->execute();
        }

        function excluir($id_estado){   
            $pdo = Conexao::getInstance();
            $stmt = $pdo ->prepare('DELETE FROM estado WHERE id_estado = :id_estado');
            $stmt->bindParam(':id_estado', $id_estado);
            
            return $stmt->execute();
        }

        // id //

        public function getID(){
            if ($this->id_estado != "")
            return $this->id_estado;
           else
          return "Não informado";
    
            }
            
            public function setID($novoID){
                $this->id_estado = $novoID;
        }   
    
        public function setEstadoID ($estadoID){
        $this->id_estado = $estadoID;
        }
    
    
    
    // 
        // nome //

        public function getNome(){
        if ($this->nome_est != "")
        return $this->nome_est;
       else
      return "Não informado";

        }
        
        public function setNome($novoNome){
            $this->nome_est = $novoNome;
    }   

    public function setEstadoNome ($estadonome){
    $this->nome_est = $estadonome;
    }

      // sigla //

      public function getSigla(){
        if ($this->sigla != "")
        return $this->sigla;
       else
      return "Não informado";

        }
        
        public function setSigla($novaSigla){
            $this->sigla = $novaSigla;
    }   

    public function setEstadoSigla ($estadosigla){
    $this->sigla = $estadosigla;
    }
    //
}
 
?>