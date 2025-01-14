<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1a1a2e; /* Warna gelap vibes insomnia */
            padding: 1rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6); /* Bayangan lembut */
        }

        .navbar .logo {
            font-size: 1.5rem;
            color: #e94560; /* Warna merah gelap untuk kontras */
            font-family: 'Arial Black', sans-serif;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .navbar ul li {
            position: relative;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #ffffff; /* Teks putih */
            font-size: 1rem;
            font-family: 'Verdana', sans-serif;
            transition: color 0.3s ease, transform 0.3s ease; /* Animasi */
        }

        .navbar ul li a:hover {
            color: #e94560; /* Efek hover dengan merah gelap */
            transform: scale(1.1); /* Zoom saat hover */
        }

        .navbar ul li a:after {
            content: '';
            display: block;
            width: 0%;
            height: 2px;
            background: #e94560; /* Garis efek hover */
            transition: width 0.3s ease;
            margin-top: 5px;
        }

        .navbar ul li a:hover:after {
            width: 100%; /* Panjang garis hover penuh */
        }

        /* Responsive Menu */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Necturnal Shop</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</body>
</html>
