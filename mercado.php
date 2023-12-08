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
        <link href="estilo/estilo_mercado.css" rel="stylesheet">
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

            <div class="navbar_mercados">
                <a href="#" onclick="showContent('content1')" style="background-color:#a6a6a6;"><img id="logo_mercado" src="imagens/amarelao.png"></a>

                <a href="#" onclick="showContent('content2')" style="background-color:#F1BE73;"><img id="logo_mercado" src="imagens/assala.png"></a>

                <a href="#" onclick="showContent('content3')" style="background-color:#42903A;"><img id="logo_mercado" src="imagens/paodesal.png" ></a>

                <a href="#" onclick="showContent('content4')" style="background-color:#14317C;"><img id="logo_mercado" src="imagens/barraca.png"></a>

                <a href="#" onclick="showContent('content5')" style="background-color:#EDC536;"><img id="logo_mercado" src="imagens/sonia.png"></a>
            </div>


            <div class="content" id="content1">
                <div class="box-prod">
                        <?php
                        
                        produtos('Guarana Antárctica 1L', 'Amarelão supermercado', '3,00', 'https://images.tcdn.com.br/img/img_prod/1116811/guarana_antarctica_1l_9_1_eb0a1617f3ac3351a3a5b1260acec9ef.png','imagens\amarelao.png');

                        produtos('SUCO DE LARANJA INTEGRAL PRATS 900ML', 'amarelao supermercado', '8,00', 'https://rafasupervarejao.com.br/1003-large_default/7898953148169-suco-de-laranja-integral-prats-900ml.jpg','imagens\amarelao.png');

                        produtos('Energético Monster Energy Juice Khaos 473ml', 'amarelao Supermercado', '6,00', 'https://supermercadobomdemais.com.br/wp-content/uploads/2020/05/Energ%C3%A9tico-Monster-Energy-Juice-473.png','imagens\amarelao.png');

                        produtos('Cerveja Brahma Duplo Malte pack c15', 'amarelao supermercado', '25,00', 'https://www.supermercadosbh.com.br/wp-content/uploads/2020/10/Cerveja-Brahma-Duplo-Malte-pack-c15-540x450.png','imagens\amarelao.png');


                        ?>
                </div>
            </div>

            <div class="content" id="content2">
                <div class="box-prod">                    
                        <?php
                        produtos('Feijão Carioca Tipo 1 Camil Pacote 1kg', 'Assalá', '5,00', 'https://media.cotabest.com.br/media/sku/feijao-carioca-pacote-1kg-camil-pct-5cdda0bd71.png','imagens\assala.png');

                        produtos('Arroz Branco Tipo 1 Reserva Especial Camil Premium Pacote 1kg', 'Assalá', '6,00', 'https://giassi.vtexassets.com/arquivos/ids/616262/Arroz-Branco-Tipo-1-Reserva-Especial-Camil-Premium-Pacote-1kg.png?v=638179349167070000','imagens\assala.png');

                        produtos('Açúcar Refinado Especial União Pacote 1kg', 'Assalá', '2,00', 'https://giassi.vtexassets.com/arquivos/ids/519185-1200-auto?v=637995415560370000&width=1200&height=auto&aspect=true','imagens\assala.png');

                        produtos('Óleo de Girassol Tipo 1 Soya Garrafa 900ml', 'Assalá', '10,00', 'https://giassi.vtexassets.com/arquivos/ids/517610-1200-auto?v=637995337259800000&width=1200&height=auto&aspect=true','imagens\assala.png');



                        ?>
                </div>
            </div>

            <div class="content" id="content3">
            <div class="box-prod">
                     
                     <?php
                     
                     produtos('Creme Dental Sorriso Dentes Brancos Caixa 90g', 'pao de sal', '4,28', 'https://giassi.vtexassets.com/arquivos/ids/617881/Creme-Dental-Sorriso-Dentes-Brancos-Caixa-90g.png?v=638179433338530000','imagens\paodesal.png');

                     produtos('Sabonete Nivea Leite 85g', 'pao de sal', '2,95', 'https://supermercadobomdemais.com.br/wp-content/uploads/2020/08/nivea-leite.png','imagens\paodesal.png');

                     produtos('Felps Cachos Azeite De Abacate Kit Shampoo', 'pao de sal','30,63', 'https://loja.felps.com.br/media/catalog/product/cache/9446863cb720d8887b5fe5887919d40e/f/e/felps-kit-duo-cachos-shampoo-e-gelatina-2x500ml-azeite-de-abacate_1.png','imagens\paodesal.png');

                     produtos('DESODORANTE AEROSOL DOVE ORIGINAL 150 ML', 'pao de sal', '9,28', 'https://supermercadojequie.com/image/cache/catalog/produtos/7506306241183-550x550.png','imagens\paodesal.png');



                     ?>
         </div>
            </div>

            <div class="content" id="content4">
            <div class="box-prod">
                
                    
                <?php
                
                produtos('Água Sanitária Qboa 5Litros', 'Barraca Atacado', '7,54', 'https://www.bernardaoemcasa.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/5/0/50aeda01d7e1b0a1a949f0585b10204972cb2c.png_2.png','imagens\barraca.png');

                produtos('Sabão em Pó 800g Omo', 'Barraca Atacado', '10,00', 'https://protelimp.com.br/wp-content/uploads/2017/08/sabao-em-po-omo-800g.png','imagens\barraca.png');

                produtos('Detergente Líquido / Ypê - Frasco de 500 ml ', 'barraca atacado','2,63', 'https://beagaembalagem.com.br/wp-content/uploads/2014/09/detergente-yp%C3%AA.png','imagens\barraca.png');

                produtos('ESPONJA STARLUX MULTIUSO 1und', 'Barraca Atacado', '3,48', 'https://storage.googleapis.com/phygital_files/supersantafe/uploads/produto/esponja_starlux_multiuso_1un_000a5c0f-b50b-4f47-8f11-25a7d69f373f.png','imagens\barraca.png');



                ?>
    </div>
            </div>

            <div class="content" id="content5">
            <div class="box-prod">                    
                        <?php
                        
                        produtos('PAO FRANCES INTEGRAL KG', 'Sonia Supermercado', '20,54', 'https://storage.googleapis.com/phygital_files/padaria-superpao/uploads/produto/pao_frances_integral_kg_9ddfb8d4-e483-49c6-8275-3669f49618a3.png','imagens\sonia.png');

                        produtos('Pão de Forma Tradicional Wickbold Pacote 450g', 'Sonia Supermercado', '9,06', 'https://ibassets.com.br/ib.item.image.large/l-e95e2495b6b5497fb44e370e79f8698e.png','imagens\sonia.png');

                        produtos('Sonho recheado unidade','Sonia Supermercado','2,50', 'https://www.big2be.com.br/products/0000000010238_techa.png','imagens\sonia.png');

                        produtos('Donuts Ring com Cobertura Pink unidade', 'Sonia Supermercado', '3,00', 'https://donutssugaresugar.com.br/wp-content/uploads/2022/07/donuts_sugar_e_sugar_categoria_donuts.png','imagens\sonia.png');



                        ?>
            </div>
            </div>
        
            <script>
                function showContent(id) {
                    var contents = document.getElementsByClassName('content');
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].style.display = 'none';
                    }
                    document.getElementById(id).style.display = 'block';
                }
            </script>

        </container>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
        <?php 
        footer();
        menu_inferior(); ?>

    </body>
</html>