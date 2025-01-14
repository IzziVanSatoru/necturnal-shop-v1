<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Necturnal Shop</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Insomnia Vibe: Gelap */
            color: #f0f0f0;
            line-height: 1.6;
        }

        h1, h2, h3 {
            color: #e94560; /* Warna merah gelap untuk tema Nekturnal */
            text-align: center;
            font-family: 'Arial Black', sans-serif;
            text-transform: uppercase;
        }

        p {
            text-align: justify;
            margin: 20px;
            font-size: 1rem;
        }

        .about {
            padding: 20px;
        }

        ul {
            margin: 20px 0;
            padding-left: 40px;
        }

        ul li {
            margin-bottom: 10px;
        }

        /* Styling for the Product Sections */
        .product-section {
            background-color: #1a1a2e; /* Vibe Gelap */
            padding: 30px;
            margin: 20px;
            border-radius: 8px;
        }

        .product-section h3 {
            color: #e94560; /* Aksen merah gelap */
        }

        /* Add a subtle glow effect */
        h2, h3 {
            text-shadow: 0 0 5px #e94560, 0 0 10px #e94560;
        }

        /* Animasi untuk produk */
        .about h1, .about h2, .about p, .product-section {
            opacity: 0;
            transform: translateY(30px);
        }

        /* Animasi transisi */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Fitur tambahan untuk menarik orang */
        .feature-box {
            background-color: #222222;
            border: 2px solid #e94560;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .feature-box h4 {
            color: #e94560;
        }

        .feature-box p {
            color: #f0f0f0;
            font-size: 1rem;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            p {
                font-size: 0.9rem;
            }
        }
    </style>

    <!-- GSAP Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

    <script>
        // GSAP Animations
        document.addEventListener("DOMContentLoaded", function () {
            gsap.to(".about h1", { opacity: 1, y: 0, duration: 1, ease: "power3.out" });
            gsap.to(".about h2", { opacity: 1, y: 0, duration: 1.2, ease: "power3.out" });
            gsap.to(".about p", { opacity: 1, y: 0, duration: 1.5, ease: "power3.out" });
            gsap.to(".product-section", { opacity: 1, y: 0, duration: 1.8, ease: "power3.out" });
        });
    </script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="about">
            <h1>About Necturnal & Insomia</h1>
            
            <p>
                Welcome to Necturnal Shop! Our main goal is to provide innovative solutions for better rest and enhanced energy. 
                With our products, "Insomia" and "Necturnal," we aim to help individuals find better sleep and wake up feeling refreshed.
            </p>
            
            <h2>Insomia</h2>
            <p>
                Insomia is a specialized product designed for those struggling with sleep disorders. Whether you're experiencing
                occasional sleeplessness or chronic insomnia, Insomia provides a natural solution to help you relax and fall into a deep sleep.
            </p>
            <h3>Features of Insomia</h3>
            <ul>
                <li>Natural ingredients to help you relax</li>
                <li>Improves sleep quality</li>
                <li>Helps reduce anxiety and stress</li>
                <li>Supports healthy circadian rhythm</li>
                <li>Non-habit forming</li>
                <li>Contains calming herbs like chamomile and valerian root</li>
                <li>Safe for long-term use</li>
                <li>Helps you wake up feeling refreshed</li>
                <li>Doctor recommended for mild to moderate insomnia</li>
                <li>Available in easy-to-consume capsules</li>
            </ul>

            <div class="feature-box">
                <h4>Special Offer!</h4>
                <p>Get 20% off your first purchase with promo code: SLEEPWELL</p>
            </div>

            <h2>Necturnal</h2>
            <p>
                Necturnal is designed for those who work late or have irregular schedules. It helps boost energy, improve focus, and 
                restore balance to your sleep cycle. Ideal for individuals looking for a natural way to stay alert and energized without the 
                crash that comes from caffeine-based products.
            </p>
            <h3>Features of Necturnal</h3>
            <ul>
                <li>Boosts energy without caffeine</li>
                <li>Supports mental clarity and focus</li>
                <li>Enhances productivity during late hours</li>
                <li>Restores natural energy balance</li>
                <li>Promotes healthy sleep patterns</li>
                <li>Non-jittery and non-habit forming</li>
                <li>Improves overall mood and well-being</li>
                <li>Contains adaptogenic herbs like ashwagandha</li>
                <li>Helps reduce mental fatigue</li>
                <li>Perfect for those with night shifts or irregular schedules</li>
            </ul>

            <div class="feature-box">
                <h4>Exclusive Deal</h4>
                <p>Buy one Necturnal today and get a free 7-day trial of our sleep aid!</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
