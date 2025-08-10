<?php

class Nota extends Model {

    // metodo para pegar todas Notas
    public function getNotas(){
        $sql = "SELECT * FROM tbl_nota ORDER BY id_matricula ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }
    public function getNotaByID($id){
        $sql = "SELECT * FROM tbl_nota WHERE 'id_nota' = ':id';";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }
    public function addNota($dados){
        $sql = "INSERT INTO tbl_nota (id_matricula, id_professor, nota, data_nota, obs_nota, tipo_nota, data_criacao_nota, data_atualizacao_nota, status_nota ) VALUES (:id_matricula, :id_professor, :nota, :data_nota, :obs_nota, :tipo_nota, :data_criacao_nota, :data_atualizacao_nota, :status_nota);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id_matricula', $dados['id_matricula'], PDO::PARAM_INT);
        $stmt->bindValue(':id_professor', $dados['id_professor'], PDO::PARAM_INT);
        $stmt->bindValue(':nota', $dados['nota'], PDO::PARAM_INT);
        $stmt->bindValue(':data_nota', $dados['data_nota'], PDO::PARAM_INT);
        $stmt->bindValue(':obs_nota', $dados['obs_nota'], PDO::PARAM_INT);
        $stmt->bindValue(':tipo_nota', $dados['tipo_nota'], PDO::PARAM_INT);
        $stmt->bindValue(':data_criacao_nota', $dados['data_criacao_nota'], PDO::PARAM_INT);
        $stmt->bindValue(':data_atualizacao_nota', $dados['data_atualizacao_nota'], PDO::PARAM_INT);
        $stmt->bindValue(':status_nota', $dados['status_nota'], PDO::PARAM_INT);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function patchAtualizarNota($dados, $id){
        $campos = [];
        $parametros = [];
        foreach ($dados as $campo => $valor) {
            if (!empty($valor)) {
                $campos[] = "$campo = :$campo";
                $parametros[":$campo"] = $valor;
            }
        }
        if (empty($campos)) {
            return false;
        }
        // Adiciona campo de atualização
        $campos[] = "data_atualizacao_nota = NOW()";
        // Adiciona o ID
        $parametros[':id_nota'] = $id;
        // Monta a query
        $sql = "UPDATE tbl_nota SET " . implode(', ', $campos) . " WHERE id_nota = :id_nota";
        $stmt = $this->db->prepare($sql);
        // Faz o bind dos parâmetros
        foreach ($parametros as $campo => $valor) {
            $stmt->bindValue($campo, $valor);
        }
        return $stmt->execute();
    }  

    public function desativarNota($id)
    {
        $sql = "UPDATE tbl_nota SET status_nota = 'Desativado' WHERE id_nota = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    
}