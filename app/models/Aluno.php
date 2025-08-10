<?php

class Aluno extends Model
{

    public function GetAllAlunos()
    {
        $sql = "SELECT * FROM tbl_aluno WHERE status_aluno = 'Ativo' ORDER BY nome_aluno asc";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetAlunosByID($id)
    {
        $sql = "SELECT * FROM tbl_aluno WHERE status_aluno = 'Ativo' AND id_aluno = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function patchAtualizarAluno($dados, $id)
    {
        $campos = [];
        $parametros = [];
        foreach ($dados as $campo => $valor) {
            if (!empty($valor)) {  // Verifica se o campo não está vazio
                $campos[] = "$campo = :$campo";  // Adiciona o campo à lista de atualização
                $parametros[":$campo"] = $valor;  // Associa o valor ao parâmetro correspondente
            }
        }

        // Verifique se há pelo menos um campo para atualizar
        if (empty($campos)) {
            return false; // Retorna false se nenhum campo foi preenchido
        }

        // Adiciona o id no final dos parâmetros
        $parametros[':id_aluno'] = $id;

        // Monta a consulta SQL dinamicamente, atualizando apenas os campos preenchidos
        $sql = "UPDATE tbl_aluno SET " . implode(', ', $campos) . ", data_atualizacao_aluno = NOW() WHERE id_aluno = :id_aluno";
        $stmt = $this->db->prepare($sql);

        // Faz o bind dos parâmetros
        foreach ($parametros as $campo => $valor) {
            $stmt->bindValue($campo, $valor);
        }

        return $stmt->execute();  // Executa a atualização no banco
    }

    // login aluno
    public function postLoginAluno($email, $senha)
    {

        $sql = "SELECT * FROM tbl_aluno WHERE email_aluno = :email_aluno AND senha_aluno = :senha_aluno AND status_aluno = 'Ativo' ORDER BY id_aluno DESC LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email_aluno', $email);
        $stmt->bindParam(':senha_aluno', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function desativarAluno($id){
        $sql = "UPDATE tbl_aluno SET status_aluno = 'Inativo' WHERE id_aluno = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
