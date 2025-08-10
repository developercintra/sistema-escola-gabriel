<?php
 
class LoginController extends Controller
{
    private $modelLogin;
    public function __construct()
    {
        $this->modelLogin = new Funcionario;
    }
    public function entrar()
    {
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');
            $funcModel = new Funcionario();
            $usuario = $funcModel->buscarFunc($email, $senha);
            if ($usuario) {
                $tipo = 'funcionario';
                $tipo_id = $usuario['id_funcionario'];
                $tipo_nome = $usuario['nome_funcionario'];
                $tipo_email = $usuario['email_funcionario'];
                $tipo_cargo = $usuario['cargo_funcionario'];
            } else {
                $alunoModel = new Aluno();
                $usuario = $alunoModel->postLoginAluno($email, $senha);
                if ($usuario) {
                    $tipo                   = 'aluno';
                    $tipo_id                = $usuario['id_aluno'];
                    $tipo_nome              = $usuario['nome_aluno'];
                    $tipo_email             = $usuario['email_aluno'];
                } else {
                    $usuario = null;
                }
            }
            //fim dop if de verificacao do tipo
            if($usuario){
                $_SESSION['tipo']           = $tipo;
                $_SESSION['tipo_id']        = $tipo_id;
                $_SESSION['tipo_nome']      = $tipo_nome;
                $_SESSION['tipo_email']     = $tipo_email;
                if($tipo == 'aluno') {
                    header('location:' . URL_BASE . 'home');
                } else {
                    header('location:' . URL_BASE . 'dash');
                }
                exit;
            }else{
                $_SESSION['erro-login'] = "E-email ou senha incorretos";
            }            
        }
    }
}