<?php session_start();?>
<html>

<head>
	<title>Gerenciador de Tarefas</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Novo Contato</legend>
			<label>Contato</label>
			<div class="inputs">
				<input type="text" name="nome" placeholder="Nome" />
				<input type="tel" name="telefone" placeholder="Telefone" />
				<input type="email" name="email" placeholder="E-mail" />
			</div>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>

<?php
if (isset($_GET['nome'], $_GET['telefone'], $_GET['email'])){
	$_SESSION['lista_tarefas'][] = $_GET['nome'];
	$_SESSION['lista_tarefas'][] = $_GET['telefone'];
	$_SESSION['lista_tarefas'][] = $_GET['email'];
}

$lista_tarefas = array();

if(isset($_SESSION['lista_tarefas'])){
	$lista_tarefas = $_SESSION['lista_tarefas'];
}
?>
	<table>
		<tr>
			<th>Contatos</th>
		</tr>
<?php foreach($lista_tarefas as $tarefas) : ?>
	<tr>
		
		<td><?php echo $tarefas; ?> <br></td>
	</tr>
<?php endforeach; ?>
	</table>
</body>
</html>
