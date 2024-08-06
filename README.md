# CadEcommerce
# Índice
[Projeto ](#projeto)  
[Descrição](#descrição)  
[Estrutura do Projeto](#Estrutura-do-Projeto)  
[Funcionalidades](#funcionalidades)  
[Tecnologias ultilizadas](#tecnologias-ultilizadas)    
[Fontes consultadas](#fontes-consultadas)  
[Autores](#autores)  


# Projeto 
PHP e conexão de dados.
Este projeto tem como objetivo demonstrar a utilização da API ViaCEP para buscar informações de endereços a partir de CEPs fornecidos pelo usuário. Além disso, o projeto permite a criação de um carrinho de compras básico, com funcionalidades como:

* **Consulta de CEP:** Utiliza a API ViaCEP para obter informações detalhadas sobre um endereço, como logradouro, bairro, cidade e estado.
* **Adição ao carrinho:** Permite adicionar produtos ao carrinho de compras, com informações como nome, preço, quantidade e categoria.
* **Gerenciamento do carrinho:** Possibilita visualizar os itens adicionados ao carrinho, remover itens e realizar o cálculo do valor total da compra.
<br><br>
Disciplina:Programação Web I. <br>
Professor: Leonardo Santiago Sidon da Rocha.


## 📰Descrição
Este projeto simples utiliza a API ViaCEP para obter informações de endereço a partir do CEP (código postal) fornecido. Ele permite consultar facilmente as informações de domicílio por meio de uma interface. Além disso, possui funcionalidades para adicionar produtos ao carrinho, criar categorias, marcas, gerenciar estoque, definir valores e status dos produtos, e processar pedidos.


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

<br>
### 📱Tecnologias utilizadas <br><br>
  PHP <br>
 <img alt="Rafa-Js" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-plain.svg"> <br>
  JAVASCRIPT <br>
 <img alt="Rafa-Js" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg"> <br>
  HTML<br>
  <img alt="Rafa-HTML" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg"><br>
  CSS<br>
 <img alt="Rafa-CSS" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg"><br>

* **PHP:** Lógica do servidor, incluindo a consulta à API ViaCEP e o gerenciamento do carrinho de compras. <br>
* **API ViaCEP:** Serviço web para consulta de CEPs. <br>


## ⚙️Funcionalidades

    
 ## ✒️Autores

<br>
Aluna: <br>
<br>
 <img src="imagens/isabelle.PNG" width="20px"> Isabelle Nascimento de Oliveira <br>
<br>
* Professor Anderson Macedo
* Professor Leonardo Santiago Sidon da Rocha.




