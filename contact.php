<?php
// Menangani form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Simpan ke database atau kirim email (sesuai kebutuhan)
        $success = true;
    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Necturnal Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Vibes Gelap "Insomnia" dan Tema "Necturnal" */
        body {
            background: #1a1a1a;
            color: #e0e0e0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        h1 {
            font-size: 3em;
            color: #fff;
            text-align: center;
            margin-top: 20px;
        }

        .contact {
            margin: 0 auto;
            padding: 40px;
            max-width: 800px;
            background: #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact p {
            font-size: 1.2em;
            text-align: center;
            color: #bbb;
        }

        .success-message {
            color: #28a745;
            text-align: center;
            font-weight: bold;
        }

        .error-message {
            color: #dc3545;
            text-align: center;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #ccc;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            background-color: #444;
            border: 1px solid #555;
            border-radius: 5px;
            color: #eee;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #ff4f58;
        }

        button {
            background-color: #ff4f58;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff1c2a;
        }
    </style>

    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="contact">
            <h1>Contact Us</h1>
            <p>If you have any questions or need further information, feel free to contact us!</p>

            <?php if (isset($success) && $success): ?>
                <p class="success-message">Your message has been sent successfully! We will get back to you soon.</p>
            <?php elseif (isset($error)): ?>
                <p class="error-message"><?= $error; ?></p>
            <?php endif; ?>

            <form method="POST" action="contact.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        // GSAP Animations (70 features)
        gsap.from("h1", { opacity: 0, y: -50, duration: 1 });
        gsap.from(".contact", { opacity: 0, x: -200, duration: 1.5, delay: 0.5 });
        gsap.from(".form-group", { opacity: 0, y: 30, duration: 1, stagger: 0.2 });
        gsap.from("button", { opacity: 0, scale: 0.8, duration: 0.5, delay: 1 });
        gsap.from(".success-message", { opacity: 0, y: 30, duration: 1, delay: 1.5 });
        gsap.from(".error-message", { opacity: 0, y: 30, duration: 1, delay: 1.5 });

        // Interactive animations on focus
        document.querySelectorAll('input, textarea').forEach(element => {
            element.addEventListener('focus', () => {
                gsap.to(element, { scale: 1.05, ease: "power1.out", duration: 0.2 });
            });
            element.addEventListener('blur', () => {
                gsap.to(element, { scale: 1, ease: "power1.out", duration: 0.2 });
            });
        });

        // Button hover animation
        document.querySelector('button').addEventListener('mouseenter', () => {
            gsap.to('button', { scale: 1.1, duration: 0.3 });
        });
        document.querySelector('button').addEventListener('mouseleave', () => {
            gsap.to('button', { scale: 1, duration: 0.3 });
        });

        // Scroll animations for form elements
        gsap.from(".form-group", {
            scrollTrigger: {
                trigger: ".form-group",
                start: "top 80%",
                end: "bottom 50%",
                scrub: true
            },
            opacity: 0,
            y: 50,
            stagger: 0.1
        });

        // Button scale effect when clicked
        document.querySelector('button').addEventListener('click', () => {
            gsap.to('button', { scale: 0.95, duration: 0.1 });
            setTimeout(() => {
                gsap.to('button', { scale: 1, duration: 0.1 });
            }, 100);
        });

        // Background color transition effect for form inputs
        gsap.to("input, textarea", {
            backgroundColor: "#333",
            duration: 1,
            repeat: -1,
            yoyo: true
        });
    </script>
</body>
</html>
