<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerenciador de Tarefas</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova Tarefa</legend>
			<label>Tarefa:</label>
			<input type="text" name="nome" placeholder="">

			<label>Descrição (Opcional)</label>
			<textarea name="descricao"></textarea>

			<label>Prazo (Opcional)</label>
			<input type="text" name="prazo"></input>

			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" name="prioridade" value="baixa" checked>
					Baixa

					<input type="radio" name="prioridade" value="media" checked>
					Media

					<input type="radio" name="prioridade" value="alta" checked>
					Alta
				</label>
			</fieldset>
			<label>
				Tarefa concluida <input type="checkbox" name="concluida" value="sim">
				<input type="submit" value="Cadastrar">
			</label>
		</fieldset>
	</form>
	<table>
		<tr>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<td>Concluída</td>
		</tr>
		<?php foreach($lista_tarefas as $tarefas): ?>
		<tr>
			<td>
				<?php echo $tarefas['nome'];?>
			</td>
			<td>
				<?php echo $tarefas['descricao'];?>
			</td>
			<td>
				<?php echo $tarefas['prazo'];?>
			</td>
			<td>
				<?php echo $tarefas['prioridade'];?>
			</td>
			<td>
				<?php echo $tarefas['concluida'];?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>
