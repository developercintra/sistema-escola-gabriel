<?php

class NotasController extends Controller{
    private $modelNotas;

    public function __construct()
    {
        $this->modelNotas = new Nota();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/notas/listar';
        $notas = $this->modelNotas->getNotas();
        $dados['notas'] = $notas;

        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Pegando os dados do formulário com validação/sanitização
            $id_matricula = filter_input(INPUT_POST, 'id_matricula', FILTER_SANITIZE_NUMBER_INT);
            $id_professor = filter_input(INPUT_POST, 'id_professor', FILTER_SANITIZE_NUMBER_INT);
            $nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $data_nota = filter_input(INPUT_POST, 'data_nota', FILTER_SANITIZE_SPECIAL_CHARS);
            $obs_nota = filter_input(INPUT_POST, 'obs_nota', FILTER_SANITIZE_SPECIAL_CHARS);
            $tipo_nota = filter_input(INPUT_POST, 'tipo_nota', FILTER_SANITIZE_SPECIAL_CHARS);

            if ($id_matricula && $id_professor && $nota) {
                $dadosNota = array(
                    'id_matricula' => $id_matricula,
                    'id_professor' => $id_professor,
                    'nota' => $nota,
                    'data_nota' => $data_nota,
                    'obs_nota' => $obs_nota,
                    'tipo_nota' => $tipo_nota,
                    'data_criacao_nota' => date('Y-m-d H:i:s'),
                    'data_atualizacao_nota' => date('Y-m-d H:i:s'),
                    'status_nota' => 'Ativo'
                );

                $this->modelNotas->addNota($dadosNota);

                $_SESSION['mensagem'] = 'Nota cadastrada com sucesso.';
                $_SESSION['tipoMsg'] = 'success';
                header('Location: ' . URL_BASE . 'notas/listar');
                exit;
            } else {
                $dados['mensagem'] = 'Preencha os campos obrigatórios.';
                $dados['tipoMSG'] = 'erro';
            }
        }

        $dados['conteudo'] = 'admin/notas/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar($id)
    {
        $dados = array();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dadosAtualizacao = array(
                'nota' => filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
                'obs_nota' => filter_input(INPUT_POST, 'obs_nota', FILTER_SANITIZE_SPECIAL_CHARS),
                'tipo_nota' => filter_input(INPUT_POST, 'tipo_nota', FILTER_SANITIZE_SPECIAL_CHARS)
            );

            if ($this->modelNotas->patchAtualizarNota($dadosAtualizacao, $id)) {
                $_SESSION['mensagem'] = 'Nota atualizada com sucesso.';
                $_SESSION['tipoMsg'] = 'success';
                header('Location: ' . URL_BASE . 'notas/listar');
                exit;
            } else {
                $dados['mensagem'] = 'Erro ao atualizar a nota.';
                $dados['tipoMSG'] = 'erro';
            }
        }

        $dados['conteudo'] = 'admin/notas/editar';
        $dados['nota'] = $this->modelNotas->getNotaByID($id);
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $id = filter_input(INPUT_POST, 'id_nota', FILTER_SANITIZE_NUMBER_INT);
        
        if ($id) {
            $this->modelNotas->desativarNota($id);
            $_SESSION['mensagem'] = 'Nota desativada com sucesso';
            $_SESSION['tipoMsg'] = 'success';
        } else {
            $_SESSION['mensagem'] = 'Erro ao desativar a nota';
            $_SESSION['tipoMsg'] = 'erro';
        }
        
        header('Location: ' . URL_BASE . 'notas/listar');
        exit;
    }
}