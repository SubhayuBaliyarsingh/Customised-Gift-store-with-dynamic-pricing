# 🚀 Hosting Guide: InfinityFree / 000webhost

This guide will help you host your **Giftly** project on free PHP/MySQL platforms like **InfinityFree** or **000webhost**.

## 1. Create Your Hosting Account
- **InfinityFree**: [infinityfree.com](https://www.infinityfree.com/)
- **000webhost**: [000webhost.com](https://www.000webhost.com/)

## 2. Connect Your GitHub Repository
1.  In your hosting control panel, find the **Softaculous Apps Installer** or the **File Manager**.
2.  If they support **Git Deployment**, link it to: `https://github.com/SubhayuBaliyarsingh/Customised-Gift-store-with-dynamic-pricing.git`.
3.  Alternatively, download the project from GitHub and upload the files to the `htdocs` (InfinityFree) or `public_html` (000webhost) folder.

## 3. Create a MySQL Database
1.  Go to the **MySQL Databases** section in your control panel.
2.  Create a new database (e.g., `giftly_db`).
3.  Note down the following details:
    - **MySQL Hostname** (e.g., `sql301.infinityfree.com`)
    - **MySQL Username** (e.g., `if0_12345678`)
    - **MySQL Password** (the one you set during creation)
    - **MySQL Database Name** (e.g., `if0_12345678_giftly_db`)

## 4. Import Your Database Tables
1.  Open **phpMyAdmin** from your control panel.
2.  Select your new database.
3.  Click the **Import** tab.
4.  Upload the `customizedgift (2).sql` file from your project and click **Import**.

## 5. Update Your Configuration
To link your application to the new database, you only need to update **one file**:

### [MODIFIY] `config.php`
Open the `config.php` file and update the `else` block (Production Settings) with the details from **Step 3**:

```php
// ...
} else {
    // Production Settings (Update these when hosting on InfinityFree/000webhost)
    define('DB_SERVER', 'YOUR_MYSQL_HOSTNAME');
    define('DB_USERNAME', 'YOUR_MYSQL_USERNAME');
    define('DB_PASSWORD', 'YOUR_MYSQL_PASSWORD');
    define('DB_NAME', 'YOUR_MYSQL_DATABASE_NAME');
}
// ...
```

The application is designed to automatically detect your hosting environment and use these production settings!

## 6. Access Your Site
Visit your provided subdomain (e.g., `http://giftly.infinityfreeapp.com`) and your site will be live!
