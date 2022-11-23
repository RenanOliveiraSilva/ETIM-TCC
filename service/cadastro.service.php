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
           $query = "select * from cadastro where id_users = :id_users and status = 'Plantado' ";

           $stmt = $this->conexao->prepare($query);
           $stmt->bindValue('id_users', $id_users);
           $stmt->execute();
           return $stmt->fetchALL(PDO::FETCH_OBJ);

        }

        public function recuperarPlantacao($id) 
        {
            $query = "SELECT * FROM cadastro WHERE id = :id";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        }
        public function excluir($id)
        {
            $query = "DELETE FROM `cadastro` WHERE id = :id";

            $stmt = $this->conexao->prepare($query);
            $stmt->BindValue('id', $id);
            $stmt->execute();
        }
        public function inserirGastos($id, $gastos)
        {
            $query = "UPDATE cadastro SET p_irrigacao = :p_irrigacao, p_tipo = :p_tipo, p_fertilizante = :p_fertilizante, gastos = :gastos WHERE id=:id";

            $stmt = $this->conexao->prepare($query);
            $stmt->BindValue('p_irrigacao', $this->cadastro->__get('p_irrigacao'));
            $stmt->BindValue('p_tipo', $this->cadastro->__get('p_tipo'));
            $stmt->BindValue('p_fertilizante', $this->cadastro->__get('p_fertilizante'));
            $stmt->BindValue('gastos', $gastos);
            $stmt->BindValue('id', $id);
            $stmt->execute();
            
        }
        public function inserirData($data, $id) 
        {
            $query = "UPDATE cadastro SET data_colheita = :data_colheita WHERE id = :id";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('data_colheita', $data);
            $stmt->bindValue('id', $id);

            $stmt->execute();            
        }
        public function recuperarColheita($id_users) 
        {
           $query = "select * from cadastro where id_users = :id_users and status = 'Colhido' ";

           $stmt = $this->conexao->prepare($query);
           $stmt->bindValue('id_users', $id_users);
           $stmt->execute();
           return $stmt->fetchALL(PDO::FETCH_OBJ);

        }
        public function guardar($id) 
        {
            $query = "UPDATE cadastro SET status = :status WHERE id = :id";

            $msg = "Colhido";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('status', $msg);
            $stmt->bindValue('id', $id);

            $stmt->execute();            
        }
        public function inserirLucro($lucro, $id) {
            $query = "UPDATE cadastro SET lucro = :lucro WHERE id = :id";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue('lucro', $lucro);
            $stmt->bindValue('id', $id);

            $stmt->execute(); 
        }

    }



?>

   

  