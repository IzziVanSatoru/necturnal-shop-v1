<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necturnal Shop</title>
    
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* Insomnia vibe gelap */
            color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .home {
            text-align: center;
            padding: 50px 20px;
            animation: fadeIn 1s ease-in-out;
            margin-bottom: 50px; /* Memberikan jarak antara konten dan footer */
        }

        h1 {
            font-size: 3rem;
            color: #e94560; /* Warna merah gelap untuk menarik perhatian */
        }

        p {
            font-size: 1.25rem;
            color: #c1c1c1;
        }

        /* 4 Fitur untuk Menarik Pengunjung */
        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .feature-card {
            background-color: #1a1a2e;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: scale(1.05);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            color: #e94560;
        }

        .feature-card p {
            font-size: 1rem;
            color: #f5f5f5;
        }

        /* Animation */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .feature-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Footer Styles */
        footer {
            background-color: #121212; /* Gelap untuk tema insomnia */
            color: #f5f5f5;
            padding: 10px 0;
            text-align: center;
            font-size: 0.75rem; /* Ukuran font lebih kecil */
            width: 100%;
        }

        footer .social-icons {
            margin-top: 10px;
        }

        footer .social-icons a {
            color: #e94560;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        footer .social-icons a:hover {
            transform: scale(1.05);
        }

        footer p {
            margin: 5px 0;
        }

        /* Ensuring footer stays at the bottom */
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        main {
            flex-grow: 1;
        }
    </style>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script>
        // GSAP Animations
        window.onload = () => {
            // Animasi judul
            gsap.from("h1", {
                opacity: 0,
                y: -50,
                duration: 1,
                ease: "power4.out"
            });

            // Animasi paragraf
            gsap.from("p", {
                opacity: 0,
                x: -50,
                duration: 1,
                delay: 0.5,
                ease: "power4.out"
            });

            // Animasi fitur
            gsap.from(".feature-card", {
                opacity: 0,
                y: 100,
                stagger: 0.3,
                duration: 1,
                delay: 1,
                ease: "power4.out"
            });
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="home">
            <h1>Welcome to Necturnal Shop</h1>
            <p>Your one-stop shop for all your needs.</p>

            <!-- 4 Fitur untuk Menarik Pengunjung -->
            <section class="features">
                <div class="feature-card">
                    <h3>Special Offers</h3>
                    <p>Get up to 50% off on your first purchase!</p>
                </div>

                <div class="feature-card">
                    <h3>Popular Products</h3>
                    <p>Check out the top trending products of the month.</p>
                </div>

                <div class="feature-card">
                    <h3>Customer Reviews</h3>
                    <p>See what our satisfied customers have to say.</p>
                </div>

                <div class="feature-card">
                    <h3>Limited Time Sale</h3>
                    <p>Hurry, limited time offers just for you!</p>
                </div>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
