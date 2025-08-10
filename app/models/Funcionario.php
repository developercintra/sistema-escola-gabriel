<?php

class Funcionario extends Model {
    
    public function getDadosFuncionarios(){
        $sql = "SELECT nome_funcionario, email_funcionario, telefone1_funcionario, cargo_funcionario FROM tbl_funcionario WHERE status_funcionario = 'ATIVO' AND cargo_funcionario LIKE 'Professor%' OR cargo_funcionario LIKE 'Coordenador%' ORDER BY cargo_funcionario AND nome_funcionario;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    } 

    public function getFuncionariosCargo($cargo){
        $sql = "SELECT nome_funcionario, email_funcionario, telefone1_funcionario FROM tbl_funcionario WHERE status_funcionario = 'ATIVO' AND cargo_funcionario LIKE :cargo ORDER BY nome_funcionario ASC;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':cargo' => "$cargo%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    } 

    public function getAllFuncionarios(){
        $sql = "SELECT * FROM tbl_funcionario WHERE status_funcionario = 'ATIVO' ORDER BY nome_funcionario ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 

    public function GetFuncionarioByID($id)
    {
        $sql = "SELECT * FROM tbl_funcionario WHERE status_funcionario = 'Ativo' AND id_funcionario = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   public function patchAtualizarFuncionario($dados, $id)
    {
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
        $campos[] = "data_atualizacao_funcionario = NOW()";
        // Adiciona o ID
        $parametros[':id_funcionario'] = $id;
        // Monta a query
        $sql = "UPDATE tbl_funcionario SET " . implode(', ', $campos) . " WHERE id_funcionario = :id_funcionario";
        $stmt = $this->db->prepare($sql);
        // Faz o bind dos parâmetros
        foreach ($parametros as $campo => $valor) {
            $stmt->bindValue($campo, $valor);
        }
        return $stmt->execute();
    } 
    
    public function buscarFunc($email, $senha)
    {
        $sql = "SELECT * FROM tbl_funcionario
                WHERE email_funcionario = :email
                AND senha_funcionario = :senha
                AND status_funcionario = 'Ativo'";
       
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 


}