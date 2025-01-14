<?php
// Tidak ada PHP tambahan di footer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        /* Footer Styles */
        footer {
            background-color: #121212; /* Gelap untuk tema insomnia */
            color: #f5f5f5;
            padding: 10px 0; /* Mengurangi padding agar lebih kecil */
            text-align: center;
            font-size: 0.8rem; /* Mengurangi ukuran font */
            position: relative;
            width: 100%;
            bottom: 0;
        }

        footer .social-icons {
            margin-top: 5px; /* Mengurangi jarak margin antara teks dan ikon sosial */
        }

        footer .social-icons a {
            color: #e94560;
            text-decoration: none;
            margin: 0 10px; /* Mengurangi jarak antara ikon sosial */
            font-size: 1.3rem; /* Mengurangi ukuran ikon */
            transition: transform 0.3s ease;
        }

        footer .social-icons a:hover {
            transform: scale(1.1); /* Mengurangi efek perbesaran ikon */
        }

        footer p {
            margin: 5px 0; /* Mengurangi margin di sekitar teks */
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
</head>
<body>
    <footer>
        <p>&copy; 2025 Necturnal Shop. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Instagram</a>
            <a href="#" target="_blank">Twitter</a>
        </div>
    </footer>
</body>
</html>
