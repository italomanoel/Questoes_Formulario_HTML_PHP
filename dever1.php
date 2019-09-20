<html>
<head>
    <meta charset="UTF-8"/>    
</head>
</html>
<?php
/*1.Faça um Programa que recebe quatro notas de um aluno, calcule e imprima a média aritmética das notas e
    a mensagem de aprovado para média superior ou igual a 7.0 ou a mensagem de reprovado para média inferior a 7.0.*/
    $nota_1 = $_GET["nota_1"];
    $nota_2 = $_GET["nota_2"];
    $nota_3 = $_GET["nota_3"];
    $nota_4 = $_GET["nota_4"];
    $media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;
    $aprovacao = ($media >= 7)? "Aluno aprovado": "Aluno reprovado";
    echo "Sua média foi $media <br/> $aprovacao <hr/>";

    
/*2.	Escreva um script PHP para ler o número total de eleitores de um município,
 o número de votos brancos, nulos e válidos. Calcular e escrever o porcentual que cada
  um representa em relação ao total de eleitores.*/
    $eleitores = $_GET["eleitores"];
    $votosBrancos = $_GET["votosBrancos"];
    $votosNulos = $_GET["votosNulos"];
    $votosValidos = $_GET["votosValidos"];
    $percentualVotosBranco = ($votosBrancos * $eleitores)/100; 
    $percentualVotosNulos = ($votosNulos * $eleitores)/100;
    $percentualVotosValidos = ($votosValidos * $eleitores)/100;
    
    echo "A quantidade de eleitores foi $eleitores, a porcentagem de voto brancos foi $percentualVotosBranco%,<br/>
    o percentual de votos nulos foi $percentualVotosNulos%, e o percentual de votos válidos foi $votosValidos%.<hr>";

/*3.Escreva um script PHP para ler o salário mensal atual de um funcionário
 e o percentual de reajuste. Calcular e escrever o valor do novo salário.*/
    $salarioMensal = $_GET["salarioM"];
    $reajusteSalarial = $_GET["reajusteS"];
    $novoSalario = $salarioMensal + (($salarioMensal * $reajusteSalarial)/100);

    echo "Seu salário atual é $salarioMensal, com o reajuste de $reajusteSalarial% será $novoSalario <hr>";

/*4.O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem 
do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual
 do distribuidor seja de 28% e os impostos de 45%, escrever um script PHP para ler o custo de fábrica
  de um carro, calcular e escrever o custo final ao consumidor.*/
    $custoDeFabrica = $_GET["custoF"];
    $porcentagemDistribuidor = 25;
    $porcentagemImpostos = 45;
    $carroNovo = $custoDeFabrica + (($custoDeFabrica * $porcentagemDistribuidor/100)) + (($custoDeFabrica * $porcentagemImpostos)/100);

    echo "O preço final do carro será R$$carroNovo.<hr>";

/* 5.O custo de um carro novo ao consumidor é a soma do custo de fábrica com a
 porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
  Escreva um script PHP para ler o custo de fábrica de um carro, a porcentagem do distribuidor e o imposto,
   e calcular e escrever o custo final ao consumidor*/
    $custoDeFabricas = $_GET["custoFabrica"];
    $porcentagensDistribuidor = $_GET["porcentagemD"];
    $porcentagensImposto = $_GET["porcentagemI"];
    $carroNovos = $custoDeFabricas + (($custoDeFabricas * $porcentagensDistribuidor/100)) + (($custoDeFabricas * $porcentagensImposto)/100);

    echo "O custo final para o consumidor é R$$carroNovos.";    

/*6.Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês,
 mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas.
  Escrever um script PHP que leia o número de carros por ele vendidos, o valor total de suas vendas,
   o salário fixo e o valor e percentual que ele recebe por carro vendido. 
   Calcule e escreva o salário final do vendedor.*/
   $carrosVendidos = $_GET["carrosVendidos"];
   $salarioFixo = $_GET["salarioFixo"];
   $comissaoFixa = $carrosVendidos * 300;
   $valorDasVendas = $_GET["valorVendas"];
   $percentualVendas = ($valorDasVendas * 5) / 100; 
   $salarioFinal = $salarioFixo + $comissaoFixa + $percentualVendas;
   
   echo "O salario final do vendedor esse mês foi R$$salarioFinal <hr>";

/*7.Faça um script PHP que leia duas notas de um aluno, calcule e escreva a média final deste aluno.
 Considerar que a média é ponderada e que o peso das notas é 4 e 6.*/
    $primeiraNota =  $_GET["primeiraNota"];
    $segundaNota =  $_GET["segundaNota"];
    $mediaPonderada = (($primeiraNota * 4) + ($segundaNota * 6)) / 10;

    echo "Média ponderada do aluno foi: $mediaPonderada <hr>";

/* 8.Faça um script PHP que determine o volume de uma caixa dágua cilíndrica,
 sendo que o raio e a altura devem ser fornecidos.
 OBS: V = PI * Raio^2 * Altura */
    $raioCaixa =  $_GET["raioCaixa"];
    $alturaCaixa =  $_GET["alturaCaixa"];
    //funcao round para arredondar o valor, ceil() para valor acima e floor() para valor abaixo.
    $volumeCaixa = round((pi() * ($raioCaixa ^ 2) * $alturaCaixa) / $alturaCaixa);

    echo "O volume da caixa é $volumeCaixa. <hr> ";

/*9.Faça um script PHP para somar dois números e multiplicar o resultado pelo primeiro número.*/
    $primeiroNumero =  $_GET["primeiroNumero"];
    $segundoNumero =  $_GET["segundoNumero"];
    $somaDoisNumeros = $primeiroNumero + $segundoNumero;
    $multiplicaSomaPeloPrimeiroNum = $somaDoisNumeros * $primeiroNumero;

echo "A soma do resultado multiplicado pelo primeiro número é $multiplicaSomaPeloPrimeiroNum. <hr>";

/*10.Faça um script PHP para Calcular o estoque médio de uma peça,
 sendo que ESTOQUE MÉDIO = (QUANTIDADE MÍNIMA + QUANTIDADE MÁXIMA) /2.*/
    $quantidadeMinimaPeca =  $_GET["quantidadeMinimaPeca"];
    $quantidadeMaximaPeca =  $_GET["quantidadeMaximaPeca"];
    $estoqueMedioPeca = ($quantidadeMinimaPeca + $quantidadeMaximaPeca) / 2;

 echo "A quantidade média de peças no estoque deve ser $estoqueMedioPeca. <hr>";
 
/*11. Escrever um script PHP que lê o nome de um funcionário,
 o número de horas trabalhadas, o valor que recebe por hora e o número de filhos.
  Com estas informações, calcular o salário deste funcionário, sabendo que para cada filho, 
  o funcionário recebe 3% a mais, calculado sobre o salário bruto. */
    $nomeFuncionario =  $_GET["nomeFuncionario"];
    $horasTrabalhadas = $_GET["horasTrabalhadas"];
    $valorPorHoraTrabalhada = $_GET["valorPorHoraTrabalhada"];
    $numeroDeFilhos = $_GET["numeroDeFilhos"];
    $salarioBruto = $horasTrabalhadas * $valorPorHoraTrabalhada;
    $salario = $salarioBruto + (($salarioBruto * (3 * $numeroDeFilhos))/100);

    echo "O salario do $nomeFuncionario foi R$$salario. <hr>";


/*12.Faça um script PHP que leia a idade de uma pessoa expressa em anos, 
meses e dias e mostre-a expressa apenas em dias. Considerar ano com 365 dias e mês com 30 dias.*/
    $anoIdade = $_GET["anoIdade"];
    $mesesIdade = $anoIdade * 12;
    $diasIdade = $anoIdade * 365;

    echo "Possui a idade em dias de $diasIdade. <hr>";

/*13.Faça um script PHP que leia a idade de uma pessoa expressa em dias e mostre-a expressa em anos, 
meses e dias. Considerar ano com 365 dias e mês com 30 dias.*/
    $diasIdadess = $_GET["diasIdadess"];
    $mesesIdadess = round($diasIdadess / 30);
    $anoIdadess = round($diasIdadess / 365);

    echo "Meses de vida é $mesesIdadess, e anos é $anoIdadess. <hr>";

/*14.Faça um script PHP que leia as 3 notas de um aluno e calcule a média final deste aluno.
 Considerar que a média é ponderada e que o peso das notas é: 2, 3 e 5, respectivamente.*/
    $pNota = $_GET["pNota"];
    $sNota = $_GET["sNota"];
    $tNota = $_GET["tNota"];
    $mediaPonderadaFinal = (($pNota * 2) + ($sNota * 3) + ($tNota * 5)) / 10;

    echo "A média ponderada final é $mediaPonderadaFinal. <hr>";


/*15.Faça um script PHP que leia o tempo de duração de um evento em uma fábrica expressa em segundos e mostre-o expresso em horas,
 minutos e segundos.*/
    $tempoDuracaoEventoSegundos = $_GET["tempoDuracaoEventoSegundos"];
    $tempoDuracaoEventoMinutos = round($tempoDuracaoEventoSegundos / 60);
    $tempoDuracaoEventoHoras = round($tempoDuracaoEventoMinutos / 60);

    echo "O evento na fábrica teve duração de $tempoDuracaoEventoHoras horas ou $tempoDuracaoEventoMinutos minutos ou $tempoDuracaoEventoSegundos segundos. <hr>";
 
/*16.Escrever um script PHP que lê o nome de um vendedor, o seu salário fixo, 
o total de vendas por ele efetuadas e o percentual que ganha sobre o total de vendas. 
Calcular o salário total do vendedor. Escrever o nome do vendedor e seu salário total.*/
    $nomeVendedor = $_GET["nomeVendedor"];
    $salarioFixoVendedor = $_GET["salarioFixoVendedor"];
    $totalDeVendas = $_GET["totalDeVendas"];
    $percentualVendasRealizadas = ($totalDeVendas * 5) / 100;
    $salarioTotalVendedor = $salarioFixoVendedor + $percentualVendasRealizadas;

    echo "O salário total do $nomeVendedor vai ser R$$salarioTotalVendedor.<hr>";

/* 17.Faça um script PHP que leia o nome de um piloto, uma distância percorrida em km e o tempo que o piloto levou para percorrê-la (em horas).
 O programa deve calcular a velocidade média - Velocidade = Distância / Tempo - em km/h, e exibir a seguinte frase: A velocidade média do
  <nome do piloto> foi <velocidade media calculada> km/h.*/
    $nomePiloto =  $_GET["nomePiloto"];
    $distanciaPercorridaPiloto =  $_GET["distanciaPercorridaPiloto"];
    $tempoPercorridaPiloto =  $_GET["tempoPercorridaPiloto"];
    $velocidadeMediaPercorrida = $distanciaPercorridaPiloto/$tempoPercorridaPiloto;

    echo "A velocidade média do $nomePiloto foi $velocidadeMediaPercorrida km/h.<hr>";

?>