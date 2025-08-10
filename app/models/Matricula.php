<?php

class Matricula extends Model {

    // metodo para pegar todas matriculas
    public function getMatriculas(){
        $sql = "SELECT m.*, a.nome_aluno AS nome_aluno, c.nome_curso AS nome_curso FROM tbl_matricula m JOIN tbl_aluno a ON a.id_aluno = m.id_aluno JOIN tbl_sigla_curso sc ON sc.id_sigla = m.id_sigla  JOIN tbl_curso c ON c.id_curso = sc.id_curso ORDER BY a.nome_aluno ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }

    
}