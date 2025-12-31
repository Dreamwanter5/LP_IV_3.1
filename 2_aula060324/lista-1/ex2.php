<pre>
    
<?php
// Criar uma página em que o usuário deve inserir o nome do cliente, nome do produto comprado, valor unitário do produto e a quantidade comprada. Mostrar uma mensagem de venda no PHP no seguinte estilo :
// Caro <nome_cliente>, o produto <nome_produto> foi comprado por R$ <valor_unitario>, e você comprou <quantidade> unidades. O total da compra ficou em <total_compra>
// (substituir os <xx> pelas variáveis informadas pelo usuário. Calcular o total da compra no PHP)

$resultado = $_POST["valor"] * $_POST["quantidade"];

echo("Caro ". $_POST["nome"]." o produto ".$_POST["nProd"]." foi comprado por R$ ".$_POST["valor"]." e você comprou ".$_POST["quantidade"]." unidades. O total da compra ficou em R$".$resultado);











?>
</pre>