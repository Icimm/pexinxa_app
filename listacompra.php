<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title>Pexinxa - Lista de Compras</title>
    <style>
       
        
    
         #container {
            position: relative;
            width: 100%;
            max-width: 80%;
            margin: 15px 10% 15px 10%;
            background-color: #FFF;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #003D64;
            text-align: center; /* Centraliza o texto */
        }

        button.delete-list-button {
        background-color: #f97304;
        }

        button.delete-list-button:houver {
        background-color: #d34404;
        }


        #newListName {
            
            padding: 12px; /* Ajuste o valor conforme necessário para aumentar o tamanho vertical */
    margin-right: 10px;
    width: 70%; /* Defina a largura desejada para o campo de entrada */
    text-align: left; /* Alinha o texto à esquerda */
        }

        button {
            background-color: #00749C;
            color: #FFF;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin:10px;
        }

        button:hover {
            background-color: #13B2D4;
        }

        .shopping-list {
            margin-top: 20px;
            border-top: 1px solid #13B2D4;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 100%; /* Defina a largura como 100% */
        }

        .list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #13B2D4;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        h2 {
            color: #003D64;
        }
        h3 {
            color: #003D64;
        }

        .list-actions button {
            margin-left: 10px;
        }

        .item {
            display: flex;
            margin-bottom: 20px;
        }

        /*imagem produto */
        img#produtos {
            width: 100px;
            height: 100px;
        }
        

        .item-details {
            flex-grow: 1;
        }

        .quantity-button {
            background-color: #00749C;
            color: #FFF;
            padding: 4px 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
           margin-left: 2px;
           margin-right: 2px;
           margin: 0 5px;
           
        }

        .quantity-button:hover {
            background-color: #13B2D4;
        }

        .remove-item-button {
            
            margin-top: 10px; /* Ajuste conforme necessário */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: auto;
            margin-right:25px;
            background-color:#f97304;
        }
        

        .remove-item-button:hover {
            background-color: #D34404;

        }
        
       img#icon_lixeira{
        margin:0px;
       }
    
       .itemQuantity{
        display: flex;
        align-items: center;
        margin-left: auto;
       }
       .quantity {
        margin: 0px; /* Ajuste os valores conforme necessário para espaçamento horizontal */
        align-items: flex;
    }
    /* Adiciona um estilo para a área do preço */
    .total-price {
        margin-top: 10px;
        text-align: right;
        color: #003D64;
        font-weight: bold;
    }


      
    </style>
</head>
<body>
        <?php require_once "functions/funcoes.php"?>

        <?php menu_superior();
              modal_cadastro();
              modal_login(); ?>


        <container>
    <div id="container">
        <h1>Listas de Compras</h1>
        <input
        type="text" id="newListName" placeholder="Nome da Nova Lista"
        />
        <button onclick="createNewList()">Criar Nova Lista</button>


<script>
    

    function createNewList() {
    const newListName = document.getElementById('newListName').value;

    }
</script>


    </div>

    <script>
         const lists = {}; //Declaração de um objeto vazio para armazenar listas
        let itemCount = 0; //Declaração de uma variável para rastrear a contagem de itens.

        function incrementQuantity(button, listIndex) //Declaração da função chamada incrementQuantity, que aceita dois parâmetros: button e listIndex.
	{
            const quantityElement = button.parentElement.querySelector(".quantity"); //Obtém o elemento HTML que contém a informação da quantidade associada ao botão clicado
            let quantity = parseInt(quantityElement.innerText); //Converte o conteúdo de texto do elemento de quantidade para um número inteiro usando parseInt
            quantityElement.innerText = quantity + 1; //Incrementa a quantidade em 1 e atualiza o texto no elemento de quantidade para refletir o novo valor
            updatePrice(listIndex); //Esta função calcula e atualiza o preço total da lista de compras--!
        }

        function decrementQuantity(button, listIndex) {
            const quantityElement = button.parentElement.querySelector(".quantity");
            let quantity = parseInt(quantityElement.innerText);
            if (quantity > 1) //Verifica se a quantidade é maior que 1 antes de decrementá-la. Isso garante que a quantidade não seja reduzida para menos de 1, evitando valores negativos.
             {
                quantityElement.innerText = quantity - 1; //Reduz a quantidade em 1 e atualiza o texto no elemento de quantidade para refletir o novo valor.
               updatePrice(listIndex);
            }
        }

        function removeItem(button, listIndex) {
            const item = button.closest(".item");
            item.remove(); // REMOVE O ITEM
            updatePrice(listIndex);
        }
        function addItem(listIndex) {
            
            itemCount++; // INCREMENTA A VARIAVEL ITEM COUNT QUE RASTREIA O NUMERO TOTAL DE ITENS NA LISTA DE COMPRAS
            
            const newItem //Cria uma string HTML que representa a estrutura de um novo item na lista.
            =  ` 
                <div class="item">
                    <img id="produtos" src="https://images-americanas.b2w.io/produtos/5523856211/imagens/kit-6-pacotes-de-arroz-branco-tio-joao-tipo-1-1kg/5523856211_1_large.jpg" alt="Produto ${itemCount}">
                    <div class="item-details">
                        <h3>Pacote de arroz branco</h3>
                        <div>
                            <span>Preço: R$ <span class="price" id="price${itemCount}">10.00</span></span>
                            
                           
                            <button class="quantity-button" onclick="decrementQuantity(this, ${itemCount})">-</button>
                            <span class="quantity" id="quantity${itemCount}">1</span>
                            <button class="quantity-button" onclick="incrementQuantity(this, ${itemCount})">+</button>
                            <div class="total-price">Total: R$ 0.00</div>

<div>
                         <button class="remove-item-button" onclick="removeItem(this, ${listIndex})">
                         <img id="icon_lixeira" src="lixo.png" alt="Ícone de Lixeira">
    </button>
</div>
                            
                            </button>
                        </div>
                       
                    </div>
                    
                </div>
                
            `
            ;
            const listContainer = document.querySelector(`#list${listIndex}`); //Encontra o contêiner da lista de compras correspondente
            listContainer.insertAdjacentHTML("beforeend", newItem); // Insere o novo item no final do contêiner da lista, acrescentando-o após os itens existentes.
            updatePrice(listIndex);

            
        }

        function createNewList() {
            const newListName = document.getElementById("newListName").value; //PEGA O VALOR DO INPUT QUE É ONDE INSERE O NOME DA LISTA
            if (newListName) // Verifica se o nome da nova lista não está vazio ou indefinido.
             {
                const newListIndex = Object.keys(lists).length + 1; //Obtém o índice para a nova lista incrementando o número total de listas existentes 
                lists[newListIndex] = newListName; //Adiciona a nova lista
                const newListHTML = `
                    <div class="shopping-list" id="list${newListIndex}">
                        <div class="list-header">
                            <h2>${newListName}</h2>
                            <div class="list-actions">
                                <button class="add-item-button" onclick="addItem(${newListIndex})">Adicionar Produto</button>

                                <button class="delete-list-button" onclick="deleteList(${newListIndex})">Excluir Lista</button>
                            </div>
                        </div>
                    </div> 
                `; // Cria uma string HTML que representa a estrutura da nova lista, incluindo o nome da lista, botões de adicionar produto e excluir lista.
                document.querySelector("#container").insertAdjacentHTML("beforeend", newListHTML); //Insere a nova lista no final do contêiner principal
               // Limpa o campo "Nome da Nova Lista"
                 document.getElementById('newListName').value = '';
            }
        }

        function deleteList(listIndex) {
            const listName = lists[listIndex]; // Obtém o nome da lista que será excluída
    const confirmDelete = confirm(`Tem certeza de que deseja excluir a lista "${listName}"?`); //Usa a função confirm para exibir uma caixa de diálogo de confirmação ao usuário

    if (confirmDelete) //Se o usuário clicou em "OK" na caixa de diálogo de confirmação, o confirmDelete será executado. 
    {
        const listContainer = document.querySelector(`.shopping-list`); // lista de compras que será removida.
        listContainer.remove(); //exclui visualmente a lista da interface
        delete lists[listIndex]; //Remove a entrada correspondente à lista 
    }
    
        }
        // ESSA PARTE IRÁ FAZER O CALCULO PARA MODIFICAR O PREÇO CASO O USUÁRIO ADICIONE MAIS ITENS DO MESMO PRODUTO
        function updatePrice(listIndex) {
    const items = document.querySelectorAll(`#list${listIndex} .item`);
    let totalPrice = 0;

    items.forEach((item) => {
        const quantity = parseInt(item.querySelector(".quantity").innerText);
        const price = parseFloat(item.querySelector(".price").innerText);
        totalPrice += quantity * price;
    });

    const totalPriceElement = document.querySelector(`#list${listIndex} .total-price`);
    totalPriceElement.innerText = `Total: R$ ${totalPrice.toFixed(2)}`;
}

    </script>
    </container>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php 
        footer();
        menu_inferior(); ?>

</body>
</html>
