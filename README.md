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
<br>
A tela inicial para a criação do carrinho 
<br>
 <img src="Captura de tela 2024-08-06 080545.png" width="400%"> <br>
<br>
<br>
 Quando adcionando no carrinho o tanto necessário:
 <br>
  <img src= "Captura de tela 2024-08-06 081438.png" width="100%"> <br>
<br>
  Sera adcionada a quantidade que o cliente acessou
<br>
 <img src="bancodedados.png" width="400%"> <br>
<br>
<br>
<br>
E voce tambem pode adcionar nova categoria, marca e produto

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

* **BANCO DE DADOS:** Criando o banco de dados para a obtenção de informações <br>
* **API ViaCEP:** Serviço web para consulta de CEPs. <br>


## ⚙️Funcionalidades
Aqui está uma lista com uma frase explicativa para cada trecho de código:

1. **Página de Produtos (`index.php`):** 
   - Exibe a lista de produtos disponíveis, incluindo um link para o carrinho e a inclusão de um script PHP para buscar e mostrar produtos.

2. **Script de Adição ao Carrinho (`script.js`):** 
   - Adiciona uma funcionalidade para solicitar a quantidade de produtos ao usuário e redirecionar para a URL de adição ao carrinho com a quantidade especificada.

3. **Página do Carrinho (`carrinho.php`):** 
   - Mostra os produtos atualmente no carrinho, com um link de navegação para a página inicial e a inclusão de um script PHP para buscar e exibir itens do carrinho.

4. **Inserção de Nova Categoria, Marca e Produto:**
   - Recebe uma descrição via POST, insere uma nova categoria no banco de dados e exibe uma mensagem de sucesso ou erro com base na execução da consulta SQL.
   

5. **Conexão com o Banco de Dados (`conexao.php`):** 
   - Estabelece uma conexão com o banco de dados MySQL, configura o charset para UTF-8, e encerra o script se houver um erro de conexão.
    
 ## ✒️Autores

<br>
Aluna: <br>
<br>
 <img src="imagens/isabelle.PNG" width="20px"> Isabelle Nascimento de Oliveira <br>
<br>
* Professor Anderson Macedo
* Professor Leonardo Santiago Sidon da Rocha.




