<?php
 
class DashController extends Controller
{
 
    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
 
        if (!isset($_SESSION['tipo']) || !isset($_SESSION['tipo_id'])) {
 
            header('location:' . URL_BASE);
            exit;
           
        }
 
        $dados = array();
        $dados['titulo'] = 'DASHBORD Sistema escola';
        $this->carregarViews('admin/dash', $dados);
    }
}