<?php

class Curso extends Model
{
    // metodo para pegar 6 cursos aleatorios
    public function getCursoRand($limite = 6)
    {
        $sql = "SELECT * FROM tbl_curso WHERE status_curso = 'Ativo' ORDER BY RAND() LIMIT :qtd";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':qtd', (int)$limite, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // metodo para pegar todos os cursos
    public function getTodosCursos()
    {
        $sql = "SELECT * FROM tbl_curso WHERE status_curso IN ('Ativo', 'Pendente') ORDER BY nome_curso ASC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTodosCursosAtivos()
    {
        $sql = "SELECT * FROM tbl_curso WHERE status_curso = 'Ativo' ORDER BY nome_curso ASC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCursoByID($id)
    {
        $sql = "SELECT * FROM tbl_curso WHERE status_curso = 'Ativo'AND id_curso = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // metodo para pegar um curso pelo NOME
    public function getCursoBynome($nome)
    {
        $sql = "SELECT * FROM tbl_curso WHERE nome_curso LIKE :nome and status_curso = 'Ativo'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':nome' => "$nome%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function patchAtualizarCurso($dados, $id)
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
        $campos[] = "data_atualizacao_curso = NOW()";
        // Adiciona o ID
        $parametros[':id_curso'] = $id;
        // Monta a query
        $sql = "UPDATE tbl_curso SET " . implode(', ', $campos) . " WHERE id_curso = :id_curso";
        $stmt = $this->db->prepare($sql);
        // Faz o bind dos parâmetros
        foreach ($parametros as $campo => $valor) {
            $stmt->bindValue($campo, $valor);
        }
        return $stmt->execute();
    }

    // metodo para add curso
    public function addCurso($dados)
    {
        $sql = "INSERT INTO tbl_curso (nome_curso, descricao_curso, pre_requisito_curso, valor_curso, carga_horaria_curso, area_curso, nivel_curso, modalidade_curso, alt_curso, data_criacao_curso, data_atualizacao_curso, status_curso) VALUES (:nome_curso, :descricao_curso, :pre_requisito_curso, :valor_curso, :carga_horaria_curso, :area_curso, :nivel_curso, :modalidade_curso, :alt_curso, NOW(), NOW(), :status_curso)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome_curso', $dados['nome_curso']);
        $stmt->bindValue(':descricao_curso', $dados['descricao_curso']);
        $stmt->bindValue(':pre_requisito_curso', $dados['pre_requisito_curso']);
        $stmt->bindValue(':valor_curso', $dados['valor_curso']);
        $stmt->bindValue(':carga_horaria_curso', $dados['carga_horaria_curso']);
        $stmt->bindValue(':area_curso', $dados['area_curso']);
        $stmt->bindValue(':nivel_curso', $dados['nivel_curso']);
        $stmt->bindValue(':modalidade_curso', $dados['modalidade_curso']);
        $stmt->bindValue(':alt_curso', $dados['alt_curso']);
        $stmt->bindValue(':status_curso', $dados['status_curso']);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    // metodo para atualizar foto do curso
    public function atualizarFoto($id, $foto)
    {
        $sql = "UPDATE tbl_curso SET foto_curso = :foto_curso WHERE id_curso = :id_curso";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':foto_curso', $foto);
        $stmt->bindValue(':id_curso', $id);
        $stmt->execute();
    }

    // função para carregar os dados do curso
    public function carregarDados($id)
    {
        $sql = "SELECT * FROM tbl_curso WHERE id_curso = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarStatus($id, $status)
    {
        $sql = "UPDATE tbl_curso SET status_curso = :status_curso WHERE id_curso = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':status_curso', $status);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function desativarCurso($id)
    {
        $sql = "UPDATE tbl_curso SET status_curso = 'Desativado' WHERE id_curso = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function editarCurso($dados)
    {
        $sql = "UPDATE tbl_curso SET nome_curso = :nome_curso, descricao_curso = :descricao_curso, pre_requisito_curso = :pre_requisito_curso, valor_curso = :valor_curso, carga_horaria_curso = :carga_horaria_curso, area_curso = :area_curso, nivel_curso = :nivel_curso, modalidade_curso = :modalidade_curso, alt_curso = :alt_curso, data_criacao_curso = :data_criacao_curso, data_atualizacao_curso = :data_atualizacao_curso, status_curso = :status_curso, foto_curso = :foto_curso WHERE id_curso = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome_curso', $dados['nome_curso']);
        $stmt->bindValue(':descricao_curso', $dados['descricao_curso']);
        $stmt->bindValue(':pre_requisito_curso', $dados['pre_requisito_curso']);
        $stmt->bindValue(':valor_curso', $dados['valor_curso']);
        $stmt->bindValue(':carga_horaria_curso', $dados['carga_horaria_curso']);
        $stmt->bindValue(':area_curso', $dados['area_curso']);
        $stmt->bindValue(':nivel_curso', $dados['nivel_curso']);
        $stmt->bindValue(':modalidade_curso', $dados['modalidade_curso']);
        $stmt->bindValue(':alt_curso', $dados['nome_curso']);
        $stmt->bindValue(':data_criacao_curso', $dados['data_criacao_curso']);
        $stmt->bindValue(':data_atualizacao_curso', $dados['data_atualizacao_curso']);
        $stmt->bindValue(':status_curso', $dados['status_curso']);
        $stmt->bindValue(':foto_curso', $dados['foto_curso']);
        $stmt->bindValue(':id', $dados['id']);
        $resultado = $stmt->execute();

        return $resultado;
    }
}
