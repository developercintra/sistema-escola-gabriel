<?php

class SiglaCurso extends Model {

    // metodo para pegar todas SiglaCursos
    public function getSiglaCursos(){
        $sql = "SELECT sc.*, 
    f.nome_funcionario AS nome_professor, 
    c.nome_curso AS nome_curso
FROM tbl_sigla_curso sc
JOIN tbl_funcionario f ON f.id_funcionario = sc.id_funcionario
JOIN tbl_curso c ON c.id_curso = sc.id_curso
ORDER BY sc.nome_sigla ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }

    
}