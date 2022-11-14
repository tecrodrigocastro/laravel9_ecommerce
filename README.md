<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Ecommerce Laravel 9

Ecommerce é construído na versão laravel 9 e banco de dados MySQL para o backend. Também usando o pacote Livewire nesta versão do Laravel 9. Possui diferentes recursos para o usuário como um usuário pode visualizar todas as categorias, visualizar todos os produtos em uma categoria específica, filtrar os produtos por marca e preço, selecionar um produto e selecionar a quantidade e selecionar a cor e adicionar o produto ao carrinho. O usuário pode adicionar vários produtos no carrinho e na lista de desejos. Existem métodos de pagamento na página de checkout, como PayPal e COD.


## Ecommerce possui vários recursos listados abaixo:
Lado do cliente::
____________________________________________________
- Login e Registro. (FEITO)
- Ver todas as categorias.
- Ver todos os produtos em categorias específicas.
- Filtrar todos os Produtos por Marcas e Preço.
- Visualizar um único produto com uma imagem e seus detalhes.
- Selecione uma cor para o produto específico antes de adicioná-lo ao carrinho. 
- Incremento/decréscimo da quantidade do produto antes de adicioná-lo ao carrinho.
- Adicionar ao Carrinho.
- Adicionar à Lista de Desejos.
- Exibir itens do carrinho.
- Exibir itens da lista de desejos.
- Página de Checkout.
- Validação do formulário de check-out antes de fazer o pedido.
- Pagamentos de checkout como - PayPal on-line e COD.
- Notificação por e-mail - O usuário recebe uma notificação por e-mail assim que o pedido é feito. 
- O usuário pode visualizar os pedidos.
- O usuário pode visualizar cada pedido e seus detalhes (como - status do pedido, etc.)
- Perfil de usuário
- Opção Alterar Senha

Lado do administrador:
____________________________________________________
- Categoria CRUD **(FEITO)**
- Produto CRUD **(FEITO)**
    - 1  Adicionar, editar, atualizar, excluir produtos.   **(FEITO)**
    - 2  Pode adicionar várias imagens para o produto. **(FEITO)**
    - 3  Pode adicionar várias cores para o produto.   **(FEITO)**
- Marca CRUD - estas marcas estão ligadas a produtos. **(FEITO)**
- Cor CRUD - estas cores estão ligadas a produtos. **(FEITO)**
- Slider CRUD
- Configuração do Site (Configuração do Site)
    - 1  Detalhes básicos do site.  
    - 2  Links de mídia social que serão mostrados no frontend na área de rodapé.  
    - 3  Links de informações de contato/escritório que serão mostrados no front-end na área de rodapé.  
- CRUD de gerenciamento de usuários com função
- Gestão de Encomendas
    - 1  Ver Lista de Todas as Encomendas.  
    - 2  Filtre os pedidos por data e status do pedido.  
    - 3  Veja cada pedido com o usuário e os detalhes do pedido.
    - 4  Fatura - Veja cada fatura de pedido. 
    - 5  Fatura - Baixe cada fatura de pedido como PDF. 
    - 6  Fatura - Envie a fatura de cada pedido. 
    - 7  Order- Status - Atualize o status do seu pedido (Ex. Em progresso, Concluído, Pendente, Cancelado, etc). 
- Todas as estatísticas no painel
    - 1  Total de Pedidos, Pedidos de Hoje, pedido deste mês, pedido deste ano.  
    - 2  Produtos, Usuários, etc.


## Requisitos para rodar o projeto

- Host : Localhost(Xampp)
- Composer
- PHP Version : 8.1 ou Superior
- Database : MySQL DB 


### Instruções

- **Extraia o arquivo .zip baixado.**
- **Execute o seguinte comando: "composer install" - para instalar os pacotes necessários.**
- **Editar o arquivo .env.example e retirar o .example, e configura com as informações respectivas do seu ambiente de banco de dados.**
- **Após isso edite o arquivo "database.php" que esta na pasta 'config', tambem com as informações do seu ambiente de banco de dados.**
- **Execute o comando no cmd, dentro da pasta raiz do projeto 'php artisan migrate' para migrar as tabelas do bd.**
- **Ao terminar subir o servidor, com o comando 'php artisan serve.**


## License

O Projeto vai ser criado pra ser um software de código aberto licenciado sob o [MIT license](https://opensource.org/licenses/MIT).
