Pastimes: Second-Hand Fashion Marketplace
Project Overview
Pastimes is a web-based application designed to facilitate the buying and selling of quality second-hand fashion. It provides a user-friendly platform for individuals to browse and purchase unique clothing items, as well as for sellers to list and manage their pre-loved fashion pieces. The application includes robust user authentication, an administrative dashboard for platform management, and a direct messaging system to foster communication within the community.

Features
User Features
•	Home Page: A welcoming landing page (index.php) showcasing featured products and a clear call to action to start shopping.
•	Shop: Browse a wide array of second-hand clothing items (clothes.php) with search functionality to filter by name or brand.
•	Product Details: View high-quality images, names, brands, detailed descriptions, and prices for each item.
•	Shopping Cart: Manage selected items in a clear overview (cart.php), with automatic calculation of per-item and grand totals. Users can adjust quantities or remove items.
•	Checkout: A streamlined process (checkout.php) to confirm delivery addresses and place orders, clearing the cart upon completion.
•	Wishlist: Save favorite items for later viewing (wishlist.php).
•	Order History: Review past purchases, including order ID, total amount, status, and date (orders.php).
•	User Registration & Login: Secure registration (register.php) with admin approval for new users, and a login system (login.php) to access personalized profiles.
•	User Profile: View essential user information and verification status (profile.php).
•	Direct Messaging: Communicate seamlessly with other users (messages.php) for inquiries about items or orders, with a tracked conversation history.

Seller Features
•	Sell Item: Logged-in users can easily upload items for sale (addClothing.php), providing details such as name, brand, category, description, price, and an image.
•	Seller Request: A dedicated process (sellerRequest.php) for users to apply to become dedicated sellers, requiring admin approval to maintain marketplace quality.

Admin Features
•	Admin Login: Secure access to the administrative dashboard (adminLogin.php).
•	Admin Dashboard: A central hub (adminDashboard.php) for managing the marketplace.
•	Manage Users: Oversee user registrations and verification statuses (manageUsers.php).
•	Manage Clothing: Ensure quality standards by managing listed clothing items (manageClothing.php).
•	Manage Orders: Monitor all placed orders (manageOrders.php).
•	Manage Seller Requests: Review and approve seller applications (manageSellerRequests.php).
•	Manage Contact: View and respond to contact form submissions (manageContact.php).

Installation and Setup
This project is a PHP-based web application that utilizes a MySQL database. To set up the project locally, follow these steps:

1	Clone the repository:
git clone <repository_url>
cd Pastimes_App/Pastimes
2	Database Setup:
◦	Ensure you have a MySQL server running (e.g., using XAMPP, MAMP, or Docker).
◦	Create a database named storeclothing.
◦	The DBConn.php file (/home/ubuntu/Pastimes_App/Pastimes/DBConn.php) connects to the database using localhost, root as username, and no password. You may need to adjust these credentials based on your local MySQL setup.
◦	The createTable.php file (/home/ubuntu/Pastimes_App/Pastimes/createTable.php) can be used to set up the tblUser table and seed initial user data. You will need to manually create other tables (e.g., tblClothes, tblCart, tblWishlist, tblOrder, tblMessages, tblSellerRequest, tblAdmin, tblContact) based on the application's functionality. A full database schema is not provided in the current files, but can be inferred from the PHP scripts.
3	Web Server Configuration:
◦	Place the Pastimes directory within your web server's document root (e.g., htdocs for Apache).
◦	Ensure your web server (e.g., Apache, Nginx) is configured to process PHP files.
4	File Permissions:
◦	Ensure the uploads/ directory (/home/ubuntu/Pastimes_App/Pastimes/Uploads/) has write permissions for the web server to handle image uploads.

Usage
After successful installation, navigate to http://localhost/Pastimes/index.php (or your configured URL) in your web browser to access the application.

•	Browse: Explore the latest fashion items on the home page or through the shop.
•	Register/Login: Create an account or log in to access personalized features.
•	Sell: If you are a seller, use the "Sell Item" feature to list your products.
•	Admin: Access the admin panel via adminLogin.php to manage users, products, and orders.

Contributing
Contributions are welcome! Please feel free to fork the repository, make your changes, and submit a pull request. For major changes, please open an issue first to discuss what you would like to change.

License
This project is open-source and available under the MIT License.
