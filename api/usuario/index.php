<?php
    

    include '../../connection.php';
    include 'usuario.php';


    if($_REQUEST['acao'] == 'inserir') {
        inserir();
    }

    if($_REQUEST['acao'] == 'listar-todos') {
        listarTodos();
    }
    
    if($_REQUEST['acao'] == 'buscar') {
        buscar();
    }

    if($_REQUEST['acao'] == 'remover') {
        remover();
    }

    if($_REQUEST['acao'] == 'atualizar') {
        atualizar();
    }

    function inserir(){
        $usuario = new usuario();
        $usuario  -> nome = $_REQUEST['nome'];
        $usuario  -> senha = $_REQUEST['senha'];
        $usuario  -> email = $_REQUEST['email'];
        $usuario = [
            'nome'=> $_REQUEST['nome'],
            'senha'=> $_REQUEST['senha'],
            'email'=> $_REQUEST['email']
        ];

       
                
        $sql = "INSERT INTO usuario VALUES (0, '$usuario->nome','$usuario->senha', '$usuario->email')";

        if ($connection->query($sql) === true) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . $connection->error;
        }

    }

    function listarTodos(){}

    function buscar(){}

    function remover(){}

    function atualizar(){}

?>