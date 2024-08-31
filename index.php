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
          <!-- primeiro produto-->
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura1.png" alt="miniatura1" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <!-- fim do primeiro produto-->

          <!-- coloque mais produtos aqui! -->
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura2.png" alt="miniatura2" />
                <figcaption>Camiseta Bad to the bone por R$ 35,00</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura3.png" alt="miniatura3" />
                <figcaption>Cardigan por R$ 69,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura4.png" alt="miniatura4" />
                <figcaption>Jaqueta de inverno por R$ 159,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura5.png" alt="miniatura5" />
                <figcaption>Regata azul academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura6.png" alt="miniatura6" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura7.png" alt="miniatura7" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura8.png" alt="miniatura8" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura9.png" alt="miniatura9" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura10.png" alt="miniatura10" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura11.png" alt="miniatura11" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura12.png" alt="miniatura12" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
        </ol>
        <button type="button">Mostrar mais</button>
      </section>
      <!--ADICIONANDO BOTÃO PAR 'MOSTRAR MAIS', FUNÇÃO NO HOME.JS-->
      <section class="painel mais-vendidos">
        <h2>Mais Vendidos</h2>
        <ol>
          <!-- coloque vários produtos aqui-->
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura7.png" alt="miniatura7" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura8.png" alt="miniatura8" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura9.png" alt="miniatura9" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura10.png" alt="miniatura10" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura11.png" alt="miniatura11" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura12.png" alt="miniatura12" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura1.png" alt="miniatura1" />
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <!-- fim do primeiro produto-->

          <!-- coloque mais produtos aqui! -->
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura2.png" alt="miniatura2" />
                <figcaption>Camiseta Bad to the bone por R$ 35,00</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura3.png" alt="miniatura3" />
                <figcaption>Cardigan por R$ 69,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura4.png" alt="miniatura4" />
                <figcaption>Jaqueta de inverno por R$ 159,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura5.png" alt="miniatura5" />
                <figcaption>Regata azul academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
                <img src="img/produtos/miniatura6.png" alt="miniatura6" />
                <figcaption>Regata rosa de academia por R$ 39,90</figcaption>
              </figure>
            </a>
          </li>
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
