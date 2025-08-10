<?php

class PartProjeto extends Model
{

    // metodo para pegar todas PartProjetos
    public function getParticipacoes()
    {
        $sql = "SELECT pp.*, a.nome_aluno AS nome_aluno, p.titulo_projeto AS nome_projeto
FROM tbl_participacao_projeto pp
JOIN tbl_aluno a ON a.id_aluno = pp.id_aluno
JOIN tbl_projeto p ON p.id_projeto= pp.id_projeto
ORDER BY a.nome_aluno ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
