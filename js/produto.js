// FUNÇÃO DO BOTÃO 'SLIDE' DE TAMANHO DA ROUPA
var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valortamanho]')

function mostraTamanho(){
    outputTamanho.value = inputTamanho.value
}

inputTamanho.oninput = mostraTamanho



/* EXEMPLOS DE 'STRINGS COM OUTRO TIPO DE DADOS'

var num1 = 2;
var num2 = 3;
var nome = "Caelum"

console.log(num1 + nome + num2);

console.log(num1 + num2 + nome);

console.log(nome + num1 + num2);

console.log(nome + (num1 + num2));

console.log(nome + num1 * num2);

--------------------------------------

EXEMPLO DE 'NaN'

var resultado = 10 -"curso"; //retorna NaN
resultado == NaN; //false
NaN == NaN; //false

isNaN(resultado); //true
*/