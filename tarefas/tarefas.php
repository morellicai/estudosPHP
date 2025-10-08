<html>
<head>
	<title>Gerenciador de Tarefas</title>
</head>
<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova Tarefa</legend>
			<label>Tarefa:</label>
			<input type="text" name="nome"/>
			<input type="submit" value="Cadastrar"/>
		</fieldset>
 </form>

<?php
    if (isset($_GET['nome'])) {
        echo "Nome informado: " . $_GET['nome'];
    }
?>
</body>
</html>
