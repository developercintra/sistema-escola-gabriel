<?php

class Empresa extends Model
{

    // metodo para pegar todas empresas
    public function getEmpresasAtiva()
    {
        $sql = "SELECT * FROM tbl_empresa WHERE status_empresa = 'Ativo' OR status_empresa = 'Pendente' ORDER BY fantasia_empresa ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmpresas()
    {
        $sql = "SELECT * FROM tbl_empresa ORDER BY fantasia_empresa ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmpresabyID($id)
    {
        $sql = "SELECT * FROM tbl_empresa WHERE id_empresa = :id LIMIT 1;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function criarEmpresa($dados)
    {
        $sql = "INSERT INTO tbl_empresa (nome_empresa, fantasia_empresa, tipo_empresa, cnpj_empresa, inscr_est_empresa, email_empresa, telefone1_empresa, cep_empresa, endereco_empresa, numero_empresa, complemento_empresa, bairro_empresa, cidade_empresa, estado_empresa, data_criacao_empresa, data_atualizacao_empresa, status_empresa) VALUES (:nome_empresa, :fantasia_empresa, :tipo_empresa, :cnpj_empresa, :inscr_est_empresa, :email_empresa, :telefone1_empresa, :cep_empresa, :endereco_empresa, :numero_empresa, :complemento_empresa, :bairro_empresa, :cidade_empresa, :estado_empresa, NOW(), NOW(), 'Pendente')";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome_empresa', $dados['nome_empresa']);
        $stmt->bindParam(':fantasia_empresa', $dados['fantasia_empresa']);
        $stmt->bindParam(':tipo_empresa', $dados['tipo_empresa']);
        $stmt->bindParam(':cnpj_empresa', $dados['cnpj_empresa']);
        $stmt->bindParam(':inscr_est_empresa', $dados['inscr_est_empresa']);
        $stmt->bindParam(':email_empresa', $dados['email_empresa']);
        $stmt->bindParam(':telefone1_empresa', $dados['telefone1_empresa']);
        $stmt->bindParam(':cep_empresa', $dados['cep_empresa']);
        $stmt->bindParam(':endereco_empresa', $dados['endereco_empresa']);
        $stmt->bindParam(':numero_empresa', $dados['numero_empresa']);
        $stmt->bindParam(':complemento_empresa', $dados['complemento_empresa']);
        $stmt->bindParam(':bairro_empresa', $dados['bairro_empresa']);
        $stmt->bindParam(':cidade_empresa', $dados['cidade_empresa']);
        $stmt->bindParam(':estado_empresa', $dados['estado_empresa']);
        $stmt->execute();
    }

    public function patchAtualizarEmpresa($dados, $id)
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
        $campos[] = "data_atualizacao_empresa = NOW()";
        // Adiciona o ID
        $parametros[':id_empresa'] = $id;
        // Monta a query
        $sql = "UPDATE tbl_empresa SET " . implode(', ', $campos) . " WHERE id_empresa = :id_empresa";
        $stmt = $this->db->prepare($sql);
        // Faz o bind dos parâmetros
        foreach ($parametros as $campo => $valor) {
            $stmt->bindValue($campo, $valor);
        }
        return $stmt->execute();
    }

    public function desativarEmpresa($id)
    {
        $sql = "UPDATE tbl_empresa SET status_empresa = 'Desativada' WHERE id_empresa = :id;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
