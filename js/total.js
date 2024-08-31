//BOTÃO DE CALCULAR A COMPRA || TAG <dd> vezes o valor que o usuario por no <input>
var $input_quantidade = document.querySelector("#qtd");
var $outout_total = document.querySelector("#total");

$input_quantidade.oninput = function() {// FUNÇÃO ANONIMA QUE TAMBEM PODE SER FEITA ASSIM: $input_quantidade.oninput = () => {}
var preco = document.querySelector("#preco").textContent;
preco = preco.replace("R$ ", "");
preco = preco.replace(",",".");
preco = parseFloat(preco);

var quantidade = $input_quantidade.value;
var total = quantidade * preco;
total = "R$" + total.toFixed(2)
total = total.replace(".",",");

$outout_total.value = total;
}