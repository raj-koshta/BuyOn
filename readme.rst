# 🛒 BuyOn — Multi-Vendor E-Commerce Platform (CodeIgniter 3)
**BuyOn** is a complete multi-vendor eCommerce platform built using **CodeIgniter 3**, inspired by Flipkart and Amazon.  
Customers can browse products, manage carts, and place orders, while vendors can register, list products, manage inventory, and track their sales.  
BuyOn aims to provide a smooth and scalable marketplace experience.

---

## 🚀 Key Features

### 👤 Customer Features
- Browse products by categories, filters, and brands  
- Detailed product pages with images, descriptions & reviews  
- Add to Cart, Wishlist & Quick Buy  
- Secure checkout system  
- Order tracking with live status updates  
- Manage profile, saved items & address book  

---

### 🛍️ Vendor Features
- Vendor registration & login  
- Vendor dashboard panel  
- Add, edit, delete products  
- Manage inventory, price, discounts & product images  
- View orders received for their products  
- Sales insights & reports  
- Notifications for new sales  

---

### 🛠️ Admin Features
- Approve / Reject vendor registrations  
- Manage customers, vendors & staff  
- Manage categories, brands, banners  
- Full CRUD for all products  
- Order management & refund control  
- Payment tracking & platform analytics  

---

## 🧰 Tech Stack

### **Frontend**
- HTML5, CSS3  
- Bootstrap / Tailwind  
- JavaScript (ES6)  
- jQuery & AJAX  

### **Backend**
- **CodeIgniter 3 MVC Framework**  
- CI Helpers, Libraries & Hooks  
- REST-like controller structure  

### **Database**
- MySQL  
- Query Builder (Active Record)

### **Other Tools**
- PHPMailer / SMTP  
- Composer (optional)  
- Git & GitHub  

---
## 📂 Project Structure
BuyOn/
│
├── application/
│ ├── controllers/
│ ├── models/
│ ├── views/
│ ├── config/
│ ├── helpers/
│ └── libraries/
│
├── assets/
│ ├── css/
│ ├── js/
│ └── images/
│
├── uploads/
│ └── product_images/
│
└── database/
└── schema.sql

---

## ⚙️ Installation & Setup Guide

### 1️⃣ Clone the Repository  
git clone https://github.com/yourusername/BuyOn.git


### 2️⃣ Move Project to Server Directory  
Place `BuyOn` inside: htdocs/ (XAMPP)

### 3️⃣ Configure Base URL  
Open: /application/config/config.php

Set: $config['base_url'] = 'http://localhost/BuyOn/';


### 4️⃣ Setup Database  
- Create a MySQL database (e.g., buyon_db)  
- Import: /database/schema.sql

### 5️⃣ Update DB Credentials  
Open: /application/config/database.php
Set:'username' => 'root',
'password' => '',
'database' => 'buyon_db'


### 6️⃣ Run BuyOn  
Start Apache + MySQL  
Visit: http://localhost/BuyOn/


---

## 🔐 Security Features
- CSRF protection enabled  
- XSS filtering enabled  
- Secure sessions  
- Password hashing using PHP `password_hash()`  

---

## 📸 Screenshots  
Add UI previews after deployment.

---

## 🤝 Contribution  
Contributions, issues & feature requests are welcome!  
Feel free to fork the repo and submit PRs.

---

## 📄 License  
BuyOn is released under the **MIT License**.

---

## 👤 Author  
**Raj Koshta**  
Full Stack Developer  
