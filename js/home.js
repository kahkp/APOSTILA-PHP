//BOTÃO MOSTRAR MAIS PARA OS DOIS PAINEIS
//COM JQUERY
/*Ele adiciona e remove(toggleClass)a classe do botão
quando acionado*/
$('.painel button').click(function () {
  $(this).parent().toggleClass('painel-aberto');
  $(this).text("Mostrar menos");
});

/*$('.mais-vendidos button').click(function () {
  $('.mais-vendidos').toggleClass('painel-aberto');
});                   (.addClass é só para adicionar)

$('.novidades button').click(function () {
  $('.novidades').toggleClass('painel-aberto');
});               (toggleClass adiociona e remove)*/             
