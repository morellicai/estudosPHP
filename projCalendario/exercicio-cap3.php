<?php
$diaAtual = date('j');
function linha($semana){
	global $diaAtual;

	echo"<tr>";
	for($i = 0; $i < 7; $i++){
		if(isset($semana[$i])){
			if($i == 6){
				echo"<td><strong>{$semana[$i]}</strong></td>";
			}else if($i == 0){
				echo"<td style='color:red;'>{$semana[$i]}</td>";
			}
			else{
				echo"<td>{$semana[$i]}</td>";
		}
		}else {
			echo"<td></td>";
		}
  }
  echo"</tr>";
}


function calendario(){
	$dia = 1;
	$semana = array();
	global $diaAtual;
	for($i = 0; $i < 3; $i++){
		array_push($semana, null);
	}

	while($dia <= 31){
    array_push($semana, $dia);
    if(count($semana) == 7){
      linha($semana);
      $semana = array();
    }
    $dia++;
	}
  linha($semana);
}

function cumprimento(){
	$hora = date("H");
	if($hora < 12){
		echo "Bom dia";
	}else if($hora >= 12 && $hora < 19){
		echo "Boa tarde";
	}else{
		echo "Boa noite";
	}
}
?>

<h1><?php echo "Calendário em PHP"; ?></h1>
<h3><?php cumprimento() ?></h3>
<p>
	<?php
		$horaAtual = date('h:i A');
		echo "Agora são $horaAtual";
	?>
</p>
		
<table border="1">
  <tr>
		<th style="color:red;">Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sáb</th>
  </tr>
<?php
  calendario();
?>
</table>
