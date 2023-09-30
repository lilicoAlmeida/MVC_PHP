<?php

namespace app\controllers;

use app\core\Controller;
use app\models\cliente;

class ClienteController extends Controller
{


    public function index()
    {
        $cliente = new Cliente();
        $dados["clientes"] = $cliente->lista();
        $dados["view"] = "index";
        $this->load("template", $dados);
    }

    public function list()
    {
        $cliente = new Cliente();
        $dados["clientes"] = $cliente->lista();
        $dados["view"] = "cliente/List";
        $this->load("template", $dados);
    }

    public function novo()
    {
        $dados["view"]  = "cliente/Create";
        $this->load("template", $dados);
    }

    public function edit($id_cliente)
    {
        $cliente = new Cliente();
        $dados["clientes"] = $cliente->getCliente($id_cliente);
        $dados["view"]  = "cliente/Edit";
        $this->load("template", $dados);
    }

    public function delete($id_cliente,$excluir =NULL)
    {
        $cliente = new Cliente();
        if($excluir = "S"){
        $cliente->excluir($id_cliente);
        header("location:" . URL_BASE . "cliente");
        exit;
        }
        $dados["clientes"] = $cliente->getCliente($id_cliente);
        $dados["view"]  = "cliente/Edit";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        $cliente = new cliente();
        $id_cliente = isset($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST, "id_cliente")) : NULL;
        $nome = isset($_POST["txt_nome"]) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL;
        $email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL;;
        $fone = isset($_POST["txt_fone"]) ? strip_tags(filter_input(INPUT_POST, "txt_fone")) : NULL;

        if($id_cliente){

            $cliente->editar($id_cliente,$nome,$email,$fone);
            
        }else{

            $cliente->inserir($nome, $email, $fone);
        }
       
        header("location:" . URL_BASE . "cliente");
    }
}
