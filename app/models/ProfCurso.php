<?php

class ProfCurso extends Model
{

    // metodo para pegar todas prof_cursos
    public function getProfCurso()
    {
        $sql = "SELECT pc.*, 
    f.nome_funcionario AS nome_professor, 
    c.nome_curso AS nome_curso
FROM tbl_prof_curso pc
JOIN tbl_professor p ON p.id_professor = pc.id_professor
JOIN tbl_funcionario f ON f.id_funcionario = p.id_funcionario
JOIN tbl_sigla_curso sc ON sc.id_sigla = pc.id_sigla
JOIN tbl_curso c ON c.id_curso = sc.id_curso
ORDER BY f.nome_funcionario ASC;
";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
