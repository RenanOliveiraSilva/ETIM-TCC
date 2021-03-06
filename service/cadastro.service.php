<?php
    class CadastroService {
        private $cadastro;
        private $conexao;

        public function __construct(Cadastro $cadastro, Conexao $conexao)
        {
            $this->cadastro = $cadastro;
            $this->conexao = $conexao->conectar();
        }

        public function inserir()
        {
            $query = "insert into cadastro (id_users, nomePlanta, tipo, qtdPlantada, tempo, irrigacao) values (:id_users, :nomePlanta, :tipo, :qtdPlantada, :tempo, :irrigacao)";
        
            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue('id_users', $this->cadastro->__get('id_users'));
            $stmt->bindValue('nomePlanta', $this->cadastro->__get('nomePlanta'));
            $stmt->bindValue('tipo', $this->cadastro->__get('tipo'));
            $stmt->bindValue('qtdPlantada', $this->cadastro->__get('qtdPlantada'));
            $stmt->bindValue('tempo', $this->cadastro->__get('tempo'));
            $stmt->bindValue('irrigacao', $this->cadastro->__get('irrigacao'));

            $stmt->execute();

        }

        public function recuperar($id_users) 
        {
           $query = "select * from cadastro where id_users = :id_users";
            
           $stmt = $this->conexao->prepare($query);
           $stmt->execute();
           return $stmt->fetchALL(PDO::FETCH_OBJ);

        }

    }



?>

   

  