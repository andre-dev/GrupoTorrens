<?php
namespace App\Controller;

use App\Controller\AppController;

class ProjetoGrupoTorrensController extends AppController{
    public function index(){
        $this->render('index');
    }
    
    public function quemSomos(){
        $this->render('quemSomos');
    }
    
    public function servicos(){
        $this->render('servicos');
    }
    
    public function vagas(){
        $this->render('vagas');
    }
    
    public function contato(){
        $this->render('contato');
    }
}

?>