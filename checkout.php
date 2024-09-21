<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Mirror</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!--bootstrap para icones(nao deu certo baixar...)
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css" />
    -->
    <!--pra adicionar pré estilos-->
  </head>

  <body>
    <!--Navbar e Javascript-->
    <div class="fixed-top">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <ul class="navbar-nav">
            <li class="navbar-item active">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Ajuda</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Perguntas frequentes</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Entre em contato</a>
            </li>
          </ul>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Mirror Fashion</a>
      </nav>
    </div>
    <!--
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      --Botaozinho de menu em cima que vai funcionar com JS--
      <button
        class="navbar-toggler-icon"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggleExternalContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <!-- h1 e p que já tinhamos, somente adicionar as respectivas classes-->
        <h1 class="display-4">Ótima escolha!</h1>
        <p class="lead">
          Obrigado por comprar na Mirror Fashion! Preencha seus dados para
          efetivas a compra.
        </p>
      </div>
      <!--fim .container dentro do jumbotron -->
    </div>
    <!-- fim .jumbotron-->
    <div class="container">
      <div class="row">
        <div class="card md-4 col-xl-3">
          <div class="card mb-3">
            <div class="card-header">
              <h2>Sua compra</h2>
              <img
                  src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" 
                >
              <dl>
                <dt>Cor</dt>
                <dd><?= $_POST['cor'] ?></dd>

                <dt>Tamanho</dt>
                <dd><?= $_POST['tamanho'] ?></dd>

                <dt>Produto</dt>
                <dd><?= $_POST['nome'] ?></dd>

                <dt>Preço</dt>
                <dd id="preco"><?= $_POST['preco'] ?></dd>
              </dl>
            </div>
          <!-- Depois de acessar o produto e apertar comprar vai dar certinho os trem de php(parametros)!-->

            <!--fim .card-header-->

           
          <!--fim .card mb-3-->

          <!-- Código novo! -->
          <!--BOTOES PRA CALCULAR VALOR DA COMPRA-->

          <div class="card mb-3">
            <div class="card-body">
              <div class="form-group">
              <label for="qtd">Quantidade:</label>
              <input
                type="number"
                id="qtd"
                min="1"
                max="99"
                value="1"
                class="form-control"
              />
            </div>
              <div class="form-group">
                <label for="total">Total:</label>
                <output for="qtd preco" id="total" class="form-control">
                  <?= $_POST['preco'] ?> 
                </output>
              </div>
            </div>
          </div>
          
          <!--BOTOES PRA CALCULAR VALOR DA COMPRA    FIIIM -->
        </div><!-- fim da tag card md-4 col-xl-3-->
        <!--formulario de informação sobre pagamento-->
        <form class="col-md-8 col-xl-9">
          <!--Formulário Dados do cliente nome, email e cpf -->
          <div class="row">
            <fieldset class="col-lg-6">
              <legend>
                <div class="form-group">
                  <label for="nome">Nome Completo</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nome"
                    name="Nome"
                    autofocus
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="email">Email</label>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>

                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="Email"
                      placeholder="email@exemplo.com "
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cpf"
                    name="CPF"
                    placeholder="000.000.000-00"
                    required
                    data-mask="999.999.999-99"
                  />
                </div>
                <!--Tag required foi adicionada no nome e no cpf-->
                <div class="form-group custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="newsletter"
                    value="sim"
                    checked
                  />
                  <label class="custom-control-label">
                    Quero receber Newsletter da Mirror Fashion
                  </label>
                </div>
              </legend>
            </fieldset>
            <!--Formulário Dados do cliente nome, email e cpf FIM-->
            <!--Formulário dos Dados do cartão (PAGINA 177 DA APOSTILA)-->
            <fieldset class="col-lg-6">
              <legend>Cartão de crédito</legend>

              <div class="form-group">
                <label for="numero-cartao">Número - CVV</label>
                <input
                  type="text"
                  class="form-control"
                  id="numero-cartao"
                  name="Numero-cartão"
                  data-mask="9999 9999 9999 - 999"
                />
              </div>

              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="bandeira-cartao"
                      >Bandeira</label
                    >
                  </div>
                  <select class="custom-select" id="bandeira-cartao">
                    <option disabled>Selecione uma opção...</option>
                    <option value="master">MasterCard</option>
                    <option value="visa">VISA</option>
                    <option value="amex">American Express</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="validade-cartao">Validade</label>
                <input
                  type="month"
                  class="form-control"
                  id="validade-cartao"
                  name="validade-cartao"
                />
              </div>
            </fieldset>
          </div>
          <button type="submit" class="btn btn-primary">
            <span class="oi oi-thumb-up"></span>
            Confirmar o pedido
          </button>
          <!--Formulário dos Dados do cartão FIM-->
        </form>
        <!--Fim do formulário-->
      </div>
      <!--fim .row-->
    </div>
    <!--fim .container-->

    <!--JS para funcionalidade do botão de menuzinho lá em cima no navbar-->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
    <!--BOTÃO DE CALCULAR A COMPRA-->
    <script type="text/javascript" src="js/total.js"></script>
  </body>
</html>
<!--  Grids Responsivos:(Tela é dividida em colunas)[Bootstrap tem essa familia pronta]
  col-   : Extra small <  576px
  col-sm-: Small       >= 576px
  col-md-: Medium      >= 768px
  col-lg-: Large       >= 992px
  col-xl-: Extra Large >= 1200px 

  Podem ser aplicado mais de um em um elemento.
  Mais informações sobre Grid: https://getbootstrap.com/docs/4.1/layout/grid/
                               https://getbootstrap.com/docs/4.1/extend/approach/#responsive
                               https://getbootstrap.com/docs/4.1/getting-started/javascript/
-->
