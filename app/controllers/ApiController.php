<?php

class ApiController extends Controller
{
    private $cursoModel;
    private $empresaModel;
    private $funcionarioModel;
    private $alunoModel;
    private $projetoModel;

    public function __construct()
    {
        $this->cursoModel = new Curso();
        $this->empresaModel = new Empresa();
        $this->funcionarioModel = new Funcionario();
        $this->alunoModel = new Aluno();
        $this->projetoModel = new Projeto();
    }

    // ===========================================================================
    // *********************CURSOS*********************************
    // ===========================================================================

    // Listar todos os cursos em ordem alfabetica
    public function ListarCursos()
    {
        $cursos = $this->cursoModel->getTodosCursos();
        if (empty($cursos)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Nenhum curso encontrado"]);
            return;
        }
        echo json_encode($cursos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Listar os cursos aleatórios
    public function ListarCursosAleatorio($quantidade)
    {
        $cursos = $this->cursoModel->getCursoRand($quantidade);
        if (empty($cursos)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Nenhum curso encontrado"]);
            return;
        }
        echo json_encode($cursos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Listar curso por NOME
    public function BuscaNomeCurso($nome)
    {
        $curso = $this->cursoModel->getCursoBynome($nome);
        if (empty($curso)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Curso não foi encontrado"]);
            return;
        }
        echo json_encode($curso, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function ListarCursoID($id)
    {
        $curso = $this->cursoModel->getCursoByID($id);
        if (empty($curso)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "curso não encontrado"]);
            return;
        }
        echo json_encode($curso, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }


    

    // ===========================================================================
    // *********************EMPRESA*********************************
    // ===========================================================================


    // Listar todas empresas em ordem alfabetica
    public function ListarEmpresas()
    {
        $empresas = $this->empresaModel->getEmpresas();
        if (empty($empresas)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Empresas não foram encontradas!"]);
            return;
        }
        echo json_encode($empresas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function AtualizarEmpresa($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $_POST;
            if (isset($dados['_method']) && $dados['_method'] === 'PATCH') {
                // Simula um método PATCH
                $_SERVER['REQUEST_METHOD'] = 'PATCH';
                unset($dados['_method']);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
                $resultado = $this->empresaModel->patchAtualizarEmpresa($dados, $id);
                if ($resultado) {
                    $_SESSION['mensagem_sucesso'] = "Empresa atualizado com sucesso!";
                    // Se a atualização foi bem-sucedida, redireciona para a página de cursos
                    header('Location: ' . URL_BASE . 'empresas/editar/' . $id . '?sucesso=true'); // Aqui você define a URL de destino
                    exit;
                } else {
                    http_response_code(500);
                    echo json_encode(["Mensagem" => "Não foi possível atualizar. Erro de servidor"]);
                }
            }
        } else {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido."]);
        }
    }


    // ===========================================================================
    // *********************FUNCIONARIO*********************************
    // ===========================================================================

    // Pegar professores e cordenadores ativos
    public function GetFuncionarios()
    {
        $funcionarios = $this->funcionarioModel->getDadosFuncionarios();
        if (empty($funcionarios)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Funcionarios não foram encontradas!"]);
            return;
        }
        echo json_encode($funcionarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Pegar funcionario pelo cargo
    public function GetCargoFuncionario($cargo)
    {
        $funcionarios = $this->funcionarioModel->getFuncionariosCargo($cargo);
        if (empty($funcionarios)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Funcionarios não foram encontradas!"]);
            return;
        }
        echo json_encode($funcionarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function ListarFuncionarioID($id)
    {
        $funcionario = $this->funcionarioModel->GetFuncionarioByID($id);
        if (empty($funcionario)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "funcionario não encontrado"]);
            return;
        }
        echo json_encode($funcionario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Atualizar os dados do aluno patch(atualizar alguns dados), put(precisa atualizar todos)
    public function AtualizarFuncionario($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $_POST;
            if (isset($dados['_method']) && $dados['_method'] === 'PATCH') {
                // Simula um método PATCH
                $_SERVER['REQUEST_METHOD'] = 'PATCH';
                unset($dados['_method']);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
                $resultado = $this->funcionarioModel->patchAtualizarFuncionario($dados, $id);
                if ($resultado) {
                    $_SESSION['mensagem_sucesso'] = "Funcionário atualizado com sucesso!";
                    // Se a atualização foi bem-sucedida, redireciona para a página de funcionários
                    header('Location: ' . URL_BASE . 'funcionarios/editar/' . $id . '?sucesso=true'); // Aqui você define a URL de destino
                    exit;
                } else {
                    http_response_code(500);
                    echo json_encode(["Mensagem" => "Não foi possível atualizar. Erro de servidor"]);
                }
            }
        } else {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido."]);
        }
    }

    // ===========================================================================
    // *********************ALUNO*********************************
    // ===========================================================================

    // Listar todos alunos
    public function ListarTodosAlunos()
    {
        $alunos = $this->alunoModel->GetAllAlunos();
        if (empty($alunos)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Alunos não encontrados"]);
            return;
        }
        echo json_encode($alunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Listar Aluno por ID
    public function ListarAlunoID($id)
    {
        $aluno = $this->alunoModel->GetAlunosByID($id);
        if (empty($aluno)) {
            http_response_code(404);
            echo json_encode(["Mensagem" => "Aluno não encontrado"]);
            return;
        }
        echo json_encode($aluno, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    // Atualizar os dados do aluno patch(atualizar alguns dados), put(precisa atualizar todos)
    public function AtualizarAluno($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $_POST;
            if (isset($dados['_method']) && $dados['_method'] === 'PATCH') {
                // Simula um método PATCH
                $_SERVER['REQUEST_METHOD'] = 'PATCH';
                unset($dados['_method']);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
                $resultado = $this->alunoModel->patchAtualizarAluno($dados, $id);
                if ($resultado) {
                    $_SESSION['mensagem_sucesso'] = "Aluno atualizado com sucesso!";
                    // Se a atualização foi bem-sucedida, redireciona para a página de alunos
                    header('Location: ' . URL_BASE . 'alunos/editar/' . $id . '?sucesso=true'); // Aqui você define a URL de destino
                    exit;
                } else {
                    http_response_code(500);
                    echo json_encode(["Mensagem" => "Não foi possível atualizar. Erro de servidor"]);
                }
            }
        } else {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido."]);
        }
    }
    // Login aluno
    public function LoginAluno()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email_aluno'] ?? null;
            $senha = $_POST['senha_aluno'] ?? null;

            if (!$email || !$senha) {
                http_response_code(400);
                echo json_encode(['erro' => 'Email e senha são obrigatorios']);
                return;
            }

            $aluno = $this->alunoModel->postLoginAluno($email, $senha);

            if ($aluno) {
                http_response_code(200);
                echo json_encode([
                    'message' => 'Seu login foi realizado com sucesso',
                    "Aluno" => $aluno
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            } else {

                http_response_code(401);
                echo json_encode(["erro" => "Email ou senha invalidos ou aluno inativo"]);
            }
        } else {
            http_response_code(405);
            echo json_encode(["erro" => "Metodo não permitido"]);
        }
    }



    // ===========================================================================
    // *********************Projeto*********************************
    // ===========================================================================

    public function NovoProjeto()
    {
        try {
            $titulo = $_POST['titulo_projeto'] ?? null;
            $descricao = $_POST['descricao_projeto'] ?? null;
            $cod_professor = $_POST['id_professor'] ?? null;
            $cod_sigla = $_POST['id_sigla'] ?? null;
            $data_inicio = $_POST['data_inicio_projeto'] ?? null;
            $data_entrega = $_POST['data_entrega_projeto'] ?? null;
            $status_projeto = $_POST['status_projeto'] ?? null;
            $url_projeto = $_POST['url_projeto'] ?? null;

            $resposta = $this->projetoModel->postNovoProjeto(
                $titulo,
                $descricao,
                $cod_professor,
                $cod_sigla,
                $data_inicio,
                $data_entrega,
                $status_projeto,
                $url_projeto
            );

            header('Content-type: application/json');
            echo json_encode($resposta);
        } catch (PDOException $e) {
            echo json_encode([
                'success' => false,
                'erro_real' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
        exit;
    }

    public function NovoPartProjeto()
    {
        try {
            $cod_projeto = $_POST['id_projeto'] ?? null;
            $nome_aluno = $_POST['nome_aluno'] ?? null;

            $resposta = $this->projetoModel->postParticipacaoProjeto(
                $cod_projeto,
                $nome_aluno
            );

            header('Content-type: application/json');
            echo json_encode($resposta);
        } catch (PDOException $e) {
            echo json_encode([
                'success' => false,
                'erro_real' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
        exit;
    }
}