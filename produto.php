<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/produtos.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/mobile.css" media="max-width: 939px">
    <?php
      $conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
      $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
      $produto = mysqli_fetch_array($dados);
      ?>
      <title><?= $produto['nome'] ?></title>
  </head>
  <body>
  <?php include("cabecalho.php"); ?>
    
    <!--adiciornar o conteudo da página -->
    <!--colocando a div produto dentro da div container para conf no css-->

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1><?= $produto['nome'] ?></h1>
          <p>por apenas <?= $produto['preco'] ?></p>
          <form  action="checkout.php" method="POST">
            <input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
            <input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <fieldset class="cores">
              <legend>Escolha a cor :</legend>
              <input type="radio" name="cor" value="verde" id="verde" checked />
              <label for="verde">
                <img
                  src="img/produtos/foto<?= $produto['id'] ?>-verde.png"
                >
              </label>
              <input type="radio" name="cor" value="rosa" id="rosa" />
              <label for="rosa">
                <img
                  src="img/produtos/foto1-rosa.png"
                  alt="Produto na cor rosa"
                />
              </label>
              <input type="radio" name="cor" value="azul" id="azul" />
              <label for="azul">
                <img
                  src="img/produtos/foto1-azul.png"
                  alt="Produto na cor azul"
                />
              </label>
            </fieldset>
            <fieldset class="tamanhos">
              <!--botãozinho de tamanho da blusa(barra)-->
              <legend>Escolha de tamanho:</legend>
              <input
                type="range"
                min="36"
                max="46"
                value="42"
                step="2"
                name="tamanho"
                id="tamanho"
              />
              <output for="tamanho" name="valortamanho">42</output>
            </fieldset>
            <button class="comprar">Comprar</button>
          </form>
        </div>
        <div class="detalhes">
          <h2>Detalhes do produto</h2>

          <p>
            <?= $produto['descricao'] ?>
          </p>
          <!--Quadrinho dos detalhes dos produtos-->
          <table>
            <thead>
              <tr>
                <th>Caracteristicas</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã 7845</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodão</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Azul, Rosa e verde</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mão</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php include("rodape.php"); ?>
    <script type="text/javascript" src="js/produto.js"></script>
  </body>
</html>
