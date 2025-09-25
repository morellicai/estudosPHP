<?php>
echo "Hoje é dia " . date('d/m/y');
echo "<br>Agora são " . date('h:i:s A');
echo "<br>Hoje o  dia da semana é: " . date("l");
$diaAtual = date("w");
$diaDesejado = 6;
$diasAteSabado = $diaDesejado - $diaAtual;
echo "<br>Faltam $diasAteSabado dias para o próximo sabado";

echo "<br> Mês atual: " . date("F")
?>
