
# Necturnal Shop - Contact Us Page with GSAP Animations

This project is a "Contact Us" page with a dark "Insomnia" and "Necturnal" theme. It uses **PHP** for form handling and **GSAP** for animations. The page provides a smooth, interactive experience for users to contact the shop, with animations on elements such as text, buttons, form fields, and success/error messages.

## Features

### 1. **Dark Theme (Insomnia + Necturnal)**
   - Dark background with accent colors like red for call-to-action elements.
   - Smooth shadows and rounded edges for page.
   - Clean and modern UI with a focus on user interaction.

### 3. **GSAP Animations**
support Gsap animation in all page 

### 4. **Interactive Animations**
  support Interactive animation in all page 

## Installation Guide

### Prerequisites
Before running this project, make sure you have the following installed on your computer:
- **PHP** (for server-side scripting)
- A local server (e.g., **XAMPP** or **MAMP**) to run the PHP code.

### Step 1: Clone the Repository
1. Open your terminal or command prompt.
2. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/your-repository-url.git
   ```
   3.
    ```bash
   cd necturnal-shop-v1
   ```

### Step 2: Set Up the Local Server
1. If you’re using **XAMPP** or **MAMP**, launch the application and start the Apache server.
2. Place the project folder inside the **htdocs** folder (for XAMPP) or the **www** folder (for MAMP).

### Step 3: Install Dependencies (Optional)
1. **GSAP**: The GSAP library is included via CDN in the HTML file, so you don't need to install it separately. If you prefer using npm, you can run:
   ```bash
   npm install gsap
   ```

### Step 4: Set Up PHP Environment
1. Ensure you have PHP installed. If using **XAMPP** or **MAMP**, it should be pre-installed.
2. Open the project folder and navigate to the `contact.php` file.
3. Start your local server, then open a browser and navigate to:
   ```
   http://localhost/your-project-folder/contact.php
   ```

### Step 5: Test the Contact Form
1. Fill in the form fields (Name, Email, Message).
2. Press **Send Message**.
3. If the form is successfully submitted, you will see a success message. Otherwise, you will see an error message if any field is missing.

## File Structure

```bash
your-project-folder/
├── contact.php          # Main page with PHP form handler
├── assets/
│   └── css/
│       └── style.css    # Custom CSS for styling the page
├── includes/
│   ├── navbar.php       # Navbar component (if used)
│   └── footer.php       # Footer component (if used)
└── README.md            # Project documentation
```

## Customization
- **Theme Colors**: You can customize the colors by editing the CSS styles in `style.css`.
- **Form Handling**: Update the PHP code to send an email or save form submissions to a database if needed.

## Contributing
If you would like to contribute to this project, feel free to fork the repository, make changes, and submit a pull request.

---

### Summary of Features:

- **Responsive design** with a dark theme for an immersive experience.
- **GSAP animations** to bring the page to life, including text and button animations.
- **Simple PHP backend** to handle form submissions and validation.
- Interactive form that reacts to user interactions like focus, hover, and click.

## License

This project is open source, and you are free to use or modify it. Please feel free to contribute!
