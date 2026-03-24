# Giftly - Customized Gift Store with Dynamic Pricing

Giftly is a modern, premium web-based platform designed for purchasing and personalizing a wide variety of gifts. The application features a dynamic pricing engine that calculates costs in real-time as users add customizations like text engravings, material choices (Silver, Gold, etc.), and style preferences.

## 🚀 Features

- **User Authentication**: Secure Login and Signup system with session management.
- **Dynamic Pricing**: Prices update instantly based on selected customization options (materials, styles, text length).
- **Product Categories**: Browse through diverse categories such as Jewelry, Stationery, Drinkware, Accessories, and Home Decor.
- **Customization Engine**: Personalized text, material selection, and styled previews for products.
- **Shopping Cart**: Manage selected items before proceeding to checkout.
- **Contact & Support**: Integrated contact form for customer inquiries.
- **Responsive Design**: Premium aesthetics with smooth transitions and a mobile-friendly layout.

## 🛠 Tech Stack

- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript (Vanilla)
- **Backend**: PHP
- **Database**: MySQL
- **Icons**: Font Awesome 6.4.2

## 📋 Prerequisites

To run this project locally, you will need:
- A local web server (e.g., [XAMPP](https://www.apachefriends.org/), WAMP, or MAMP)
- PHP 7.4 or higher
- MySQL/MariaDB

## 🔧 Installation & Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/SubhayuBaliyarsingh/Customised-Gift-store-with-dynamic-pricing.git
   ```

2. **Move to Web Root**:
   Place the project folder in your server's root directory (e.g., `C:/xampp/htdocs/` or `/Applications/XAMPP/xamppfiles/htdocs/`).

3. **Database Setup**:
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
   - Create a new database named `customizedgift`.
   - Select the database and go to the **Import** tab.
   - Choose the file `customizedgift (2).sql` from the root of the project.
   - Click **Import** or **Go**.

4. **Run the Application**:
   Open your browser and navigate to:
   ```
   http://localhost/Customised-Gift-store-with-dynamic-pricing/index.php
   ```

## 📂 Project Structure

- `index.php`: Home page with featured categories.
- `categories.php`: Product listing and filtering.
- `customize.php`: Real-time product customization and pricing engine.
- `signUpLogin/`: Contains authentication logic and views.
- `includes/`: Common components like navigation bars.
- `styles.css`: Global design system and styles.
- `script.js`: Core client-side interactions.

## 🤝 Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request if you have ideas for improvements or bug fixes.

---
*Created with ❤️ for personalized gifting.*
