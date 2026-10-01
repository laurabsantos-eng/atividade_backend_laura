<?php
    include "config/conexao.php"; //conteudo do arquivo descrito, pega as informações e joga para cá
//POST é uma variavel especial do PHP, ele recebe dados enviados pelo formulario quando usamos o METHOD="POST" do HTML.
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "INSERT into ordens_servico
            (cliente, equipamento, problema, data_entrada, status)
            values (?, ?, ?, ?, ?)"; //Espaço reservado
    
    //statement = declaração, 
    //sql injequition redus o risco
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param(
        "sssss",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status
    );
    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else{
        echo "Erro ao cadastrar ordem de serviço.";
    }
?>


