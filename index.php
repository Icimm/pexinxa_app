<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pexinxa - Home</title>

        <link rel="icon" 
        type="image/png" 
        href="imagens\logo_icon.png"/>

        <!-- funçoes JavaScrip -->
        <script src="functions/funcoes.js"></script>

        <!-- CSS do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <!-- JS, Popper.js e jQuery do Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


        <!--Arquivo CSS da página -->
        <link href="estilo/estilo_menus.css" rel="stylesheet">
        <link href="estilo/estilo_home.css" rel="stylesheet">
        <link href="estilo/estilo_produtos.css" rel="stylesheet">
        <link href="estilo/bootstrap_conflito.css" rel="stylesheet">
        <link href="estilo/estilo_cadastro.css" rel="stylesheet">
        <link href="estilo/estilo_footer.css" rel="stylesheet">


        <!-- icons do google -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <!-- font montserrat google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Patrick+Hand+SC&family=Roboto:ital,wght@1,100&display=swap"
            rel="stylesheet">

    </head>

    <body>

        <?php require_once "functions/funcoes.php"?>

        <?php menu_superior();
              modal_cadastro();
              modal_login(); ?>

        <container>

            <div id="img_intro">
                <picture id="intro">
                    <source media="(min-width: 1200px)" srcset="imagens/div1.svg">
                    <source media="(min-width:530px) and (max-width:1260px)" srcset="imagens/div1.svg">
                    <img src="imagens/div1mobile.svg" alt="...">
                </picture>
            
            <div>

            <div id="meuCarrossel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <picture>
                    <source media="(min-width: 1200px)" srcset="imagens/carrossel/c1d.svg">
                    <source media="(min-width: 530px)" srcset="imagens/carrossel/c1t.svg">
                    <img src="imagens/carrossel/c1m.svg" alt="...">
                </picture>
                <div class="carousel-caption d-none d-md-block">

                
                </div>
                </div>
                <div class="carousel-item">
                <picture>
                    <source media="(min-width: 1200px)" srcset="imagens/carrossel/c2d.svg">
                    <source media="(min-width: 530px)" srcset="imagens/carrossel/c2t.svg">
                    <img src="imagens/carrossel/c2m.svg" alt="...">
                </picture>
                <div class="carousel-caption d-none d-md-block">

                
                </div>
                </div>
                <div class="carousel-item">
                <picture>
                    <source media="(min-width: 1200px)" srcset="imagens/carrossel/c3d.svg">
                    <source media="(min-width: 530px)" srcset="imagens/carrossel/c3t.svg">
                    <img src="imagens/carrossel/c3m.svg" alt="...">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#meuCarrossel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#meuCarrossel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
            </div>


            <div class="container px-4 py-5" id="featured-3">
                <h1 class="pb-2 border-bottom">Como faço para começar a economizar?</h1>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    </div>
                    <h3 class="fs-2 text-body-emphasis">1º Produtos</h3>
                    <p>Escolha os produtos que você precisa na aba <a id='menu_inf2' href='produtos.php'><span class='material-symbols-outlined'>Shopping_cart</span>PRODUTOS</a> e os adicione na lista, para isso é só clicar no icone <span class='material-symbols-outlined'>
                        add_notes
                        </span></p>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    </div>
                    <h3 class="fs-2 text-body-emphasis">2º Compare</h3>
                    <p>Na lista você verá o comparativo de preços entre mercados e qual é o mais próximo de você. Alias o que adianta economizar em produtos e perder em gasolina?</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    </div>
                    <h3 class="fs-2 text-body-emphasis">3º Para as compras!</h3>
                    <p>Com sua listinha em mãos é só ir as compras e ficar feliz com o dinheiro que sobrar!</p>
                </div>
                </div>
            </div>


        </container>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
        <?php 
        footer();
        menu_inferior(); ?>

    </body>
</html>