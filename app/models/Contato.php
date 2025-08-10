<?php

class Contato extends Model {
    public function salvarEmail($nome, $email, $fone, $assunto, $msg, $status, $dataHora){
        $sql = "INSERT INTO tbl_contato (nome_Contato, email_Contato, telefone_Contato, assunto_Contato, mensagem_Contato, status_Contato, dataHora_Contato) VALUES (:nome, :email, :fone, :assunto, :msg, :status_contato, :dataHora)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome); // toda vez que for passar um valor(parametro que pode variar) para o banco de dados, tem que usar o bindValue)(essa é a base)
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':fone', $fone);
        $stmt->bindValue(':assunto', $assunto);
        $stmt->bindValue(':msg', $msg);
        $stmt->bindValue(':status_contato', $status);
        $stmt->bindValue(':dataHora', $dataHora);

        return $stmt->execute(); // grava no banco
    }

    public function getContatos(){
        $sql = "SELECT * FROM tbl_contato ORDER BY id_contato DESC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }

}