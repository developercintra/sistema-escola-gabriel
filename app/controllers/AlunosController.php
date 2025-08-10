<?php

class AlunosController extends Controller
{

    private $modelAluno;

    // construct - automaticamente iniciar algo, construir algo automaticamente.
    public function __construct()
    {
        $this->modelAluno = new Aluno();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/alunos/listar';
        $alunos = $this->modelAluno->GetAllAlunos();
        $dados['alunos'] = $alunos;
        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/alunos/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar($id)
    {
        $dados = array();
        $aluno = $this->modelAluno->GetAlunosByID($id);
        $dados['aluno'] = $aluno;
        $dados['conteudo'] = 'admin/alunos/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar(){
        $id = filter_input(INPUT_POST, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);
        $this->modelAluno->desativarAluno($id);

        $_SESSION['mensagem'] = 'Aluno desativado com sucesso';
        $_SESSION['tipoMsg'] = 'success';
        header('Location: ' . URL_BASE . 'aluno/listar');
        exit;
    }
}
