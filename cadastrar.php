<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ordem de Serviço</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Nova Ordem de Serviço</h1>

        <form action="salvar.php" method="POST">
            <label>Cliente</label>
            <input type="text" name="cliente" required>

            <label>Equipamento</label>
            <input type="text" name="equipamento" required>

            <label>Problema Apresentado</label>
            <textarea name="problema" required></textarea> 

            <label>Data de Entrada</label>
            <input type="date" name="data_entrada" required>

            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em analise">Em analise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluido">Concluido</option>
            </select>
            <button type="submit">Cadastrar ordem</button>
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>

