<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Ecommerce Laravel

Ecommerce é construído na versão laravel 9 e banco de dados MySQL para o backend. Também estamos usando o pacote Livewire nesta versão do Laravel 9. Possui diferentes recursos para o usuário como um usuário pode visualizar todas as categorias, visualizar todos os produtos em uma categoria específica, filtrar os produtos por marca e preço, selecionar um produto e selecionar a quantidade e selecionar a cor e adicionar o produto ao carrinho. O usuário pode adicionar vários produtos no carrinho e na lista de desejos. Existem métodos de pagamento na página de checkout, como PayPal e COD.


## Ecommerce possui vários recursos listados abaixo:
Customer Side:
____________________________________________________
- Login and Register.
- View all Categories.
- View all Products under specific categories.
- Filter all Products by Brands and Price.
- View a single product with an image and its details.
- Select a color for the specific product before adding it to the cart. 
- Product quantity increment/decrement before adding it to the cart.
- Add to Cart.
- Add to Wishlist.
- Display Cart Items.
- Display Wishlist Items.
- Checkout Page.
- Checkout Form validation before placing the order.
- Checkout Payments like - Online Paypal and COD.
- Mail Notification - User gets a Mail Notification once the order is placed. 
- User can view orders.
- User can view each order and its details (like - order status, etc)
- User Profile
- Change Password option

Admin Side:
____________________________________________________
- Category CRUD
- Product CRUD
    - 1  Add, Edit, Update, Delete Products.  
    - 2  Can add multiple images for the product.  
    - 3  Can add multiple colors for the product.   
- Brand CRUD - these brands are linked with products
- Color CRUD - these colors are linked with products
- Slider CRUD
- Site Setting (Website Setting) 
    - 1  Basic website details.  
    - 2  Social Media links which will be shown in frontend at footer area.  
    - 3  Contact/Office Information links which will be shown in frontend at footer area.  
- User Management CRUD with Role
- Order Management
    - 1  View All Orders List.  
    - 2  Filter orders by date and order-status.  
    - 3  View each order with user & order details.
    - 4  Invoice - View each order invoice.  
    - 5  Invoice - Download each order invoice as PDF.  
    - 6  Invoice - Mail each order Invoice. 
    - 7  Order- Status - Update your order status (Eg. In-Porgress, Completed, Pending, Cancelled, etc). 
- All Statistics on Dashboard
    - 1  Total Orders, Today Orders, this month order, this year order.   
    - 2  Products, Users, etc. 


## Requisitos para rodar o projeto

- Host : Localhost(Xampp)
- Composer
- PHP Version : 8.1 ou Superior
- Database : MySQL DB 


### Instruções

- **Extract the downloaded .zip file.**
- **Run the following command : "composer install" - to install the required packages.**
- **Setup Database in .env file.**
- **You will find a .sql file (DB) inside the public folder containing all the data shown in the video. You can import this .sql file in your database (if you are importing the .sql file, you can skip step 5). If you want a fresh database, you can skip Step 4.**
- **Run the migrate command: "php artisan migrate".**
- **The project is ready to run. Run the command: "php artisan serve" and you have your project running.**


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
