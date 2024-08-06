# CadEcommerce

# Programação Web II - Pedido de Compra

## Descrição
Este projeto tem como objetivo demonstrar a utilização da API ViaCEP para buscar informações de endereços a partir de CEPs fornecidos pelo usuário. Além disso, o projeto permite a criação de um carrinho de compras básico, com funcionalidades como:

* **Consulta de CEP:** Utiliza a API ViaCEP para obter informações detalhadas sobre um endereço, como logradouro, bairro, cidade e estado.
* **Adição ao carrinho:** Permite adicionar produtos ao carrinho de compras, com informações como nome, preço, quantidade e categoria.
* **Gerenciamento do carrinho:** Possibilita visualizar os itens adicionados ao carrinho, remover itens e realizar o cálculo do valor total da compra.

## Tecnologias Utilizadas
* **HTML:** Estruturação da página.
* **CSS:** Estilização da página.
* **JavaScript:** Interação com o usuário e manipulação do DOM.
* **jQuery:** Facilitar o trabalho com JavaScript.
* **PHP:** Lógica do servidor, incluindo a consulta à API ViaCEP e o gerenciamento do carrinho de compras.
* **API ViaCEP:** Serviço web para consulta de CEPs.

## Estrutura do Projeto
* **index.php:** Página principal do projeto, onde o usuário realiza a consulta de CEP e visualiza os produtos disponíveis.
* **carrinho.php:** Página que exibe os itens adicionados ao carrinho e permite realizar o gerenciamento do mesmo.
* **controller/produtos-busca.php:** Arquivo responsável por realizar a consulta à API ViaCEP e buscar as informações dos produtos.
* **Produtos.class.php** O código define uma classe PHP chamada `Produtos` que contém métodos para gerenciar produtos, pedidos e clientes em um sistema de e-commerce, realizando operações como consultas SQL, inserções e manipulação de sessões.
* **Cad/marca**  O código define uma classe PHP chamada `marca`.
* ** Insere-marca.php/insere-produto.php/insere-categoria** código PHP insere uma nova categoria em um banco de dados com base em uma descrição fornecida via formulário, e exibe uma mensagem de sucesso ou erro.
* **css/style.css:** Arquivo de estilo CSS para a página.
* **js/jquery-2.1.4.min.js:** Biblioteca jQuery.
* **js/script.js:** Arquivo JavaScript com a lógica da aplicação.

## Como Utilizar
1. **Clonar o repositório:** Clone este repositório para sua máquina local utilizando o Git.
2. **Configurar o servidor:** Configure um servidor web local (como Apache ou Nginx) para servir os arquivos do projeto.
3. **Acessar a aplicação:** Abra um navegador e digite o endereço da sua aplicação local.

## Contribuições
Contribuições são bem-vindas! Para contribuir com este projeto, siga estes passos:
1. Fork este repositório.
2. Crie um novo branch para sua feature.
3. Faça as suas alterações e commit.
4. Envie um pull request.


**Gostaria de que eu adicione mais alguma informação ou detalhe à documentação?**

**Observação:** Adapte este README.md de acordo com as especificidades do seu projeto e as convenções da sua equipe.
