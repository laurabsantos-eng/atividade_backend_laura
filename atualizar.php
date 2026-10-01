<?php

    include "config/conexao.php" //puxa um arquivo

    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $cliente = $_POST["equipamento"];
    $cliente = $_POST["problema"];
    $cliente = $_POST["data_entrega"];
    $cliente = $_POST["status"];

    $sql = "UPDATE  ordem_servico
            set cliente = ?,
                equipamento = ?,
                problema = ?,
                data_estrada = ?,
                status = ?
            WHERE id = ?";

    $stmt = $conexao -> prepare($sql); //prepare
    $stmt -> blind_param(
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status,
        $id
    );

    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }

?>

