# 📬 Contact Form with Email Sending (HTML, CSS, JavaScript, PHP)

A simple and modern **Contact Form Web Application** that allows users to submit their contact details and message through a web interface. The form performs **client-side validation using JavaScript** and sends the submitted data via **email using PHP and SMTP configured in XAMPP**.

This project is suitable for **web development practice, college assignments, and beginner full-stack demonstrations**.

---

# 🚀 Features

* Responsive **contact form UI**
* **Client-side validation** using JavaScript
* **Server-side processing** using PHP
* **Email sending functionality** using PHP `mail()` and SMTP
* Beautiful **success/failure message page**
* Clean and modern **CSS styling**
* Works locally using **XAMPP**

---

# 🛠 Technologies Used

* **HTML5** – Page structure
* **CSS3** – Styling and layout
* **JavaScript** – Form validation
* **PHP** – Form handling and email sending
* **XAMPP SMTP** – Sending emails locally

---

# 📂 Project Structure

```
contact-form/
│
├── index.html        # Main contact form page
├── style.css         # Styling for the form
├── script.js         # JavaScript validation
└── contact.php       # PHP script that sends the email
```

---

# 📋 How the Project Works

### 1️⃣ User fills the contact form

The user enters:

* Name
* Email
* Subject
* Message

### 2️⃣ JavaScript validation runs

The script checks:

* All fields are filled
* Email format is valid

If validation fails, the form submission is stopped.

### 3️⃣ Form submission

The form sends data to:

```
contact.php
```

using the **POST method**.

### 4️⃣ PHP processes the data

The PHP script:

1. Receives form data
2. Formats the email message
3. Sends the email using `mail()`
4. Displays a success or failure page

### 5️⃣ Email is delivered

The message is sent to the configured email address.

---

# ⚙️ SMTP Configuration (XAMPP)

To enable email sending locally, SMTP must be configured.

### Step 1 – Edit php.ini

Location:

```
C:\xampp\php\php.ini
```

Find:

```
[mail function]
```

Modify it:

```
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from=yourgmail@gmail.com
sendmail_path="\"C:\xampp\sendmail\sendmail.exe\" -t"
```

---

### Step 2 – Edit sendmail.ini

Location:

```
C:\xampp\sendmail\sendmail.ini
```

Modify:

```
smtp_server=smtp.gmail.com
smtp_port=587
smtp_ssl=tls
auth_username=yourgmail@gmail.com
auth_password=YOUR_APP_PASSWORD
```

---

### Step 3 – Gmail App Password

Google does not allow normal passwords for SMTP.

Steps:

1. Enable **2-Step Verification** in your Google account
2. Go to **App Passwords**
3. Generate a password for **Mail**
4. Use that password in:

```
auth_password=
```

---

### Step 4 – Restart Apache

Restart Apache from the **XAMPP Control Panel**.

---

# ▶️ Running the Project

1. Install **XAMPP**
2. Move the project folder into:

```
C:\xampp\htdocs
```

Example:

```
htdocs/contact-form
```

3. Start **Apache** in XAMPP

4. Open the browser and go to:

```
http://localhost/contact-form/index.html
```

5. Fill the form and submit.

You should receive an **email with the submitted data**.

---

# 📧 Example Email Received

```
Name: John Doe
Email: johndoe@example.com

Message:
Hello, I wanted to contact you regarding your website.
```

---

# 🔒 Validation

### Client-side Validation

Implemented in `script.js`:

* Prevents empty fields
* Validates email format

### Server-side Handling

Implemented in `contact.php`:

* Receives and processes POST data
* Sends email using PHP mail function

---

# 🎯 Use Cases

This project can be used for:

* Portfolio websites
* College assignments
* Beginner full-stack learning
* Contact pages for small websites

---

# 💡 Possible Improvements

Future enhancements could include:

* Using **PHPMailer instead of mail()**
* Adding **reCAPTCHA**
* Adding **AJAX form submission**
* Saving messages to a **database**
* Adding **file attachments**
* Making the form **fully responsive**

---

# 👨‍💻 Author

Developed by **Ojas Joshi**

