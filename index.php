<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width" >
    <title>Mirror Fashion</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css" >
    <link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet">
  </head>
  <body>
   <?php include("cabecalho.php"); ?>
      <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
      <![endif]-->
      
    <div class="container destaque">
      <section class="busca">
        <h2>Busca</h2>
        <form>
          <input type="search" />
          <button>Buscar</button>
        </form>
      </section>
      <!-- fim .busca -->

      <section class="menu-departamentos">
        <h2>Departamentos</h2>
        <nav>
          <ul>
            <li>
              <a href="#">Blusas e Camisas</a>
              <ul>
                <li><a href="#">Manga curta</a></li>
                <li><a href="#">Manga comprida</a></li>
                <li><a href="#">Camisa social</a></li>
                <li><a href="#">Camisa casual</a></li>
              </ul>
            </li>
            <li><a href="#">Calças</a></li>
            <li><a href="#">Saias</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Sapatos</a></li>
            <li><a href="#">Bolsas e Carteiras</a></li>
            <li><a href="#">Acessórios</a></li>
          </ul>
        </nav>
      </section>
      <!-- fim .menu-departamentos -->
      <section class="banner-destaque">
        <figure>
          <img src="img/destaque-home.png" alt="Promoção: Big City Night" />
        </figure>
        <!--<a href="#" class="pause"></a> botao desafio de pausar o banner-->
      </section>
      <!-- fim .banner-destaque-->
    </div>
    <!-- fim .container .destaque-->
    <div class="container paineis">
      <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
      <section class="painel novidades">
        <h2>Novidades</h2>
        <ol>
          <!-- primeiro produto, modificado com php-->
          <?php 
          $conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
          $dados = mysqli_query($conexao, "SELECT * FROM produtos");

          while ($produto = mysqli_fetch_array($dados)):
          ?>
          <li>
            <a href="produto.php?id=<?= $produto['id'] ?>">
              <figure>
                <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>" />
                <figcaption>
                  <?= $produto['nome'] ?> por  <?= $produto['preco'] ?>
                </figcaption>
              </figure>
            </a>
          </li>

          <?php endwhile; ?>
        </ol>
        <button type="button">Mostrar mais</button>
      </section>
      <!--ADICIONANDO BOTÃO PAR 'MOSTRAR MAIS'-->
    </div>
    <!-- fim .container .paneis -->
    <?php include("rodape.php"); ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/banner.js"></script>
  </body>
</html>
