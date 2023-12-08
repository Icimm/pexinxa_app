<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pexinxa - Produtos</title>

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

        <!-- O script abaixo é para as categorias dos produtos que ficarão fixa na pagina -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('a').click(function(){
                        $('a').removeClass("active");
                        $(this).addClass("active");
                    });
                });
            </script>

    </head>

    <body>

        <?php require_once "functions/funcoes.php"?>

        <?php menu_superior();
              modal_cadastro();
              modal_login(); ?>

        <div id="cat">
            <ul>
                <li><a href="#al">básicos</a></li>
                <li><a href="#bebidas">bebidas</a></li>
                <li><a href="#carnes">carnes</a></li>
                <li><a  href="#cereais">cereais</a></li>
                <li><a href="#congelados">congelados</a></li>
                <li><a href="#fit">fitness</a></li>
                <li><a href="#frios">frios</a></li>
                <li><a href="#hp">higiene pessoal</a></li>
                <li><a href="#horti">hortifruti</a></li>
                <li><a href="#limp">limpeza</a></li>
                <li><a href="#mc">condimentos</a></li>
                <li><a href="#pad">padaria</a></li>
            </ul>

        </div>


        <container>
            <a name="al"><h1 class="categorias">Alimentos básicos</h1></a>
            <div class="box-prod">                    
                        <?php /*função que mostra produto, para colocar as informações do produto tem que colocar os dados na seguinte ordem:
                        1 nome/descrição do produto
                        2 mercado do produto
                        3 preço
                        4 url da imagem do produto
                        5 url da imagem do mercado*/
                        
                        produtos('Feijão Carioca Tipo 1 Camil Pacote 1kg', 'Amarelão supermercado', '5,00', 'https://media.cotabest.com.br/media/sku/feijao-carioca-pacote-1kg-camil-pct-5cdda0bd71.png','imagens\amarelao.png');

                        produtos('Arroz Branco Tipo 1 Reserva Especial Camil Premium Pacote 1kg', 'Barraca Atacado', '6,00', 'https://giassi.vtexassets.com/arquivos/ids/616262/Arroz-Branco-Tipo-1-Reserva-Especial-Camil-Premium-Pacote-1kg.png?v=638179349167070000','imagens\barraca.png');

                        produtos('Açúcar Refinado Especial União Pacote 1kg', 'Sonia Supermercado', '2,00', 'https://giassi.vtexassets.com/arquivos/ids/519185-1200-auto?v=637995415560370000&width=1200&height=auto&aspect=true','imagens\sonia.png');

                        produtos('Óleo de Girassol Tipo 1 Soya Garrafa 900ml', 'Pão de Sal', '10,00', 'https://giassi.vtexassets.com/arquivos/ids/517610-1200-auto?v=637995337259800000&width=1200&height=auto&aspect=true','imagens\paodesal.png');



                        ?>
            </div>
            
            <a name="bebidas"><h1 class="categorias">Bebidas</h1></a>
            <div class="box-prod">
                        <?php
                        
                        produtos('Guarana Antárctica 1L', 'Amarelão supermercado', '3,00', 'https://images.tcdn.com.br/img/img_prod/1116811/guarana_antarctica_1l_9_1_eb0a1617f3ac3351a3a5b1260acec9ef.png','imagens\amarelao.png');

                        produtos('SUCO DE LARANJA INTEGRAL PRATS 900ML', 'Sonia supermercado', '8,00', 'https://rafasupervarejao.com.br/1003-large_default/7898953148169-suco-de-laranja-integral-prats-900ml.jpg','imagens\sonia.png');

                        produtos('Energético Monster Energy Juice Khaos 473ml', 'Sonia Supermercado', '6,00', 'https://supermercadobomdemais.com.br/wp-content/uploads/2020/05/Energ%C3%A9tico-Monster-Energy-Juice-473.png','imagens\sonia.png');

                        produtos('Cerveja Brahma Duplo Malte pack c15', 'Barraca Atacado', '25,00', 'https://www.supermercadosbh.com.br/wp-content/uploads/2020/10/Cerveja-Brahma-Duplo-Malte-pack-c15-540x450.png','imagens\barraca.png');



                        ?>
            </div>
            

            <a name="carnes"><h1 class="categorias">Carnes</h1></a>
            <div class="box-prod">
                    
                        <?php
                        
                        produtos('Picanha Premium 1kg', 'Pão de Sal', '100,00', 'https://static.vecteezy.com/system/resources/previews/021/217/219/non_2x/steak-rotisserie-at-the-steakhouse-sliced-picanha-picanha-png.png','imagens\paodesal.png');

                        produtos('Linguiça de Carne Suína - Frimesa', 'Amarelão supermercado', '150,00', 'https://www.frimesa.com.br/upload/image/product/linguicas-carne-suina1-42-77.png','imagens\amarelao.png');

                        produtos('Músculo Especial Swift Beit', 'Sonia Supermercado', '40,00', 'https://swiftbr.vteximg.com.br/arquivos/ids/168202-768-768/musculo-especial-swift-beit-616378-3.png?v=637365511634300000','imagens\sonia.png');

                        produtos('Cordão do Filé Mignon ', 'Sonia Supermercado', '55,00', 'https://future-brand-frib.s3.amazonaws.com/large_CORDAO_DO_FILE_MIGNON_RESF_789830229159_1fd00281ea.png','imagens\sonia.png');



                        ?>
            </div>

            <a name="cereais"><h1 class="categorias">Cereais</h1></a>
            <div class="box-prod">
                    
                        <?php
                        
                        produtos('Monama - Granola Salgada', 'Pão de sal', '10,00', 'https://monama.com.br/wp-content/uploads/2021/05/mockup-granola-salgada.png','imagens\paodesal.png');

                        produtos('Barra de Cereais - Castanha de Caju com Chocolate', 'barraca atacado', '3,00', 'https://www.saobraz.com.br/files/product/168176953172-produto1.png','imagens\barraca.png');

                        produtos('Sucrilhos Power 250g', 'Sonia Supermercado', '7,00', 'https://images.kglobalservices.com/www.kelloggs.com.br/pt_br/product/product_2902351/prod_img-3535573_mockup_power-pops-orig250g.png','imagens\sonia.png');

                        produtos('Gergelim Branco', 'pão de sal', '5,00', 'https://tiasonia.com.br/img/produtos_cat/ts-gergelim-branco-mockup-b01-1-1-gergelim-branco-1000px-1.png','imagens\paodesal.png');



                        ?>
            </div>

            <a name="congelados"><h1 class="categorias">Congelados</h1></a>
            <div class="box-prod">
                
                    
                        <?php
                        
                        produtos('Filé de Peito Seara Soltinho Congelado IQF 1KG', 'barraca atacado', '15,00', 'https://media.soujusto.com.br/products/10603___.png','imagens\barraca.png');

                        produtos('Mix Tradicional Congelado Grano 1kg', 'Amarelão supermercado', '14,65', 'https://static.wixstatic.com/media/36c46c_2ee5e02d23b3458f8c7e89d3136607bf~mv2.png/v1/fit/w_500,h_500,q_90/file.png','imagens\amarelao.png');

                        produtos('Coxinha de Frango - Pif Paf', 'Sonia Supermercado','16,00', 'https://pifpaf.com.br/wp-content/uploads/2022/05/AF-mkp-coxinha-de-frango.png','imagens\sonia.png');

                        produtos('BATATA PALITO CONGELADA SADIA 400G', 'Sonia', '15,50', 'https://tdc01z.vteximg.com.br/arquivos/ids/160698-1000-1000/24723-batata-palito-congelada-sadia-400g.png?v=637897735403970000','imagens\sonia.png');



                        ?>
            </div>

            <a name="fit"><h1 class="categorias">Fitness</h1></a>
            <div class="box-prod">
                    
                        <?php
                        
                        produtos('WHEY PROTEIN SHAKE - 250ML', 'Barraca atacado', '4,00', 'https://drogariasp.vteximg.com.br/arquivos/ids/973404-1000-1000/image-e7f0775b0b33476687278678f5aa7abc.jpg?v=638304025320170000','imagens\barraca.png');

                        produtos('Biscoito Integral Nesfit Banana/Aveia/Canela 160g', 'Barraca atacado', '2,95', 'https://bretas.vtexassets.com/arquivos/ids/166807/6352a18466d069fe6ae12bfe.png?v=638019565458230000','imagens\barraca.png');

                        produtos('IOGURTE  ITAMBÉ FIT FRASCO 170G','Barraca atacado', '2,20', 'https://cdn-cosmos.bluesoft.com.br/products/7896051164968','imagens\barraca.png');

                        produtos('itambe-fit', 'Barraca atacado', '5,28', 'https://distribuicao.abad.com.br/wp-content/uploads/2019/12/itambe-fit.png','imagens\barraca.png');



                        ?>
            </div>

            
            <a name="frios"><h1 class="categorias">Frios</h1></a>
            <div class="box-prod">
                
                        <?php
                        
                        produtos('Queijo Mussarela Fatiado Tirol 400g', 'Amarelão supermercado', '6,75', 'https://superpao.vtexassets.com/arquivos/ids/350114/Queijo-Mussarela-Fatiado-Tirol-400g.jpg?v=638344611792200000','imagens\amarelao.png');

                        produtos('Presunto Fatiado Seara 180g', 'pão de sal', '5,95', 'https://ibassets.com.br/ib.item.image.big/b-259d11b81a2f4299bbc51805ece06b9c.png','imagens\paodesal.png');

                        produtos('SALSICHA HOT DOG NOBRE GRANEL - Porção 500g', 'Sonia Supermercado','8,18', 'https://tdc0wy.vteximg.com.br/arquivos/ids/161431-1000-1000/SALSICHA-HOT-DOG-NOBRE-GRANEL---Porcao-500g.png?v=638176768586030000','imagens\sonia.png');

                        produtos('Peito de Peru Defumado Fatiado Sadia 200g', 'barraca atacado', '9,28', 'https://d246rzh6rlbt6w.cloudfront.net/img.produtos/7891515433703/img_1200_1.png','imagens\barraca.png');



                        ?>
            </div>

            <a name="hp"><h1 class="categorias">Higiene pessoal</h1></a>
            <div class="box-prod">
                     
                        <?php
                        
                        produtos('Creme Dental Sorriso Dentes Brancos Caixa 90g', 'Amarelão supermercado', '4,28', 'https://giassi.vtexassets.com/arquivos/ids/617881/Creme-Dental-Sorriso-Dentes-Brancos-Caixa-90g.png?v=638179433338530000','imagens\amarelao.png');

                        produtos('Sabonete Nivea Leite 85g', 'Sonia supermercados', '2,95', 'https://supermercadobomdemais.com.br/wp-content/uploads/2020/08/nivea-leite.png','imagens\sonia.png');

                        produtos('Felps Cachos Azeite De Abacate Kit Shampoo', 'Sonia Supermercado','30,63', 'https://loja.felps.com.br/media/catalog/product/cache/9446863cb720d8887b5fe5887919d40e/f/e/felps-kit-duo-cachos-shampoo-e-gelatina-2x500ml-azeite-de-abacate_1.png','imagens\sonia.png');

                        produtos('DESODORANTE AEROSOL DOVE ORIGINAL 150 ML', 'Sonia supermercado', '9,28', 'https://supermercadojequie.com/image/cache/catalog/produtos/7506306241183-550x550.png','imagens\sonia.png');



                        ?>
            </div>

            <a name="horti"><h1 class="categorias">Hortifruti</h1></a>
            <div class="box-prod">
                
                    
                        <?php
                        
                        produtos('TOMATE KG', 'Amarelão supermercado', '15,28', 'https://saovicente.tinocosupermercados.com.br/wp-content/uploads/2022/11/tomate-longa-vida1-e12545f3c4985942a915417674167711-640-0.png','imagens\amarelao.png');

                        produtos('Alface', 'Amarelão supermercado', '2,00', 'https://blueseeds.com.br/wp-content/uploads/2018/08/AC0063.png','imagens\amarelao.png');

                        produtos('CHEIRO VERDE JAN JAN EMBALADO', 'Sonia Supermercado','1,63', 'https://cdn-cosmos.bluesoft.com.br/products/7896148200043','imagens\sonia.png');

                        produtos('Maçã da branca de neve kg', 'Pão de sal', '10,00', 'https://static.vecteezy.com/system/resources/previews/009/887/176/original/red-apples-free-png.png','imagens\paodesal.png');



                        ?>
            </div>

            <a name="limp"><h1 class="categorias">Limpeza</h1></a>
            <div class="box-prod">
                
                    
                        <?php
                        
                        produtos('Água Sanitária Qboa 5Litros', 'Amarelão supermercado', '7,54', 'https://www.bernardaoemcasa.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/5/0/50aeda01d7e1b0a1a949f0585b10204972cb2c.png_2.png','imagens\amarelao.png');

                        produtos('Sabão em Pó 800g Omo', 'Amarelão supermercado', '10,00', 'https://protelimp.com.br/wp-content/uploads/2017/08/sabao-em-po-omo-800g.png','imagens\amarelao.png');

                        produtos('Detergente Líquido / Ypê - Frasco de 500 ml ', 'barraca atacado','2,63', 'https://beagaembalagem.com.br/wp-content/uploads/2014/09/detergente-yp%C3%AA.png','imagens\barraca.png');

                        produtos('ESPONJA STARLUX MULTIUSO 1und', 'sonia supermercado', '3,48', 'https://storage.googleapis.com/phygital_files/supersantafe/uploads/produto/esponja_starlux_multiuso_1un_000a5c0f-b50b-4f47-8f11-25a7d69f373f.png','imagens\sonia.png');



                        ?>
            </div>

            <a name="mc"><h1 class="categorias">Molhos e condimentos</h1></a>
            <div class="box-prod">
                    
                        <?php
                        
                        produtos('Molho de Tomate Tradicional Heinz', 'Sonia supermercado', '2,54', 'https://d3ldzx7fxfvsfy.cloudfront.net/198/studio/assets/v1670310551796_1655944915/Mockup-Heinz-Molho-Tradicional-300g.png','imagens\sonia.png');

                        produtos('Maionese Hellmanns Tradicional Squeeze - 335g', 'Amarelão supermercado', '8,06', 'https://upside.vteximg.com.br/arquivos/ids/173719-1000-1000/33778.png?v=637668246224870000','imagens\amarelao.png');

                        produtos('Barbecue Hellmanns Tradicional 400g','barraca atacado', '8,63', 'https://assets.unileversolutions.com/v1/112100357.png','imagens\barraca.png');

                        produtos('Mostarda Heinz Tradicional 255g', 'barraca atacado', '19,00', 'https://static.paodeacucar.com/img/uploads/1/69/3344069.png','imagens\barraca.png');



                        ?>
            </div>
            
            <a name="pad"><h1 class="categorias">Padaria</h1></a>
            <div class="box-prod">                    
                        <?php
                        
                        produtos('PAO FRANCES INTEGRAL KG', 'Amarelão supermercado', '20,54', 'https://storage.googleapis.com/phygital_files/padaria-superpao/uploads/produto/pao_frances_integral_kg_9ddfb8d4-e483-49c6-8275-3669f49618a3.png','imagens\amarelao.png');

                        produtos('Pão de Forma Tradicional Wickbold Pacote 450g', 'pão de sal', '9,06', 'https://ibassets.com.br/ib.item.image.large/l-e95e2495b6b5497fb44e370e79f8698e.png','imagens\paodesal.png');

                        produtos('Sonho recheado unidade','pão de sal','2,50', 'https://www.big2be.com.br/products/0000000010238_techa.png','imagens\paodesal.png');

                        produtos('Donuts Ring com Cobertura Pink unidade', 'pão de sal', '3,00', 'https://donutssugaresugar.com.br/wp-content/uploads/2022/07/donuts_sugar_e_sugar_categoria_donuts.png','imagens\paodesal.png');



                        ?>
            </div>
        </container>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <?php 
        footer();
        menu_inferior(); ?>

    </body>
</html>