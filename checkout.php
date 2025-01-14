<?php
session_start(); // Mulai session

// Ambil data produk dari session keranjang
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Necturnal Shop</title>

    <style>
        body {
            background-color: #121212;
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
        
        .checkout {
            margin: 0 auto;
            padding: 20px;
            max-width: 900px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #2a2a2a;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        th, td {
            padding: 12px;
            text-align: center;
            color: #e0e0e0;
        }
        
        th {
            background-color: #333;
            font-size: 1.2em;
        }
        
        tr:nth-child(even) {
            background-color: #3a3a3a;
        }
        
        tr:hover {
            background-color: #444;
        }
        
        .btn {
            background-color: #ff4f58;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff1c2a;
        }
        
        .total {
            font-size: 1.5em;
            text-align: right;
            color: #ff4f58;
            margin-top: 20px;
        }

        .empty-cart {
            text-align: center;
            color: #999;
            font-size: 1.2em;
        }
    </style>

    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="checkout">
            <h1>Your Cart</h1>
            <?php if (!empty($cart)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $item): ?>
                            <tr>
                                <td><img src="assets/images/<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" style="width: 50px;"></td>
                                <td><?= htmlspecialchars($item['name']); ?></td>
                                <td>$<?= number_format($item['price'], 2); ?></td>
                                <td>
                                    <form method="POST" action="remove_from_cart.php">
                                        <input type="hidden" name="product_id" value="<?= htmlspecialchars($item['id']); ?>">
                                        <button type="submit" class="btn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p class="total"><strong>Total: $<?= number_format(array_sum(array_column($cart, 'price')), 2); ?></strong></p>
            <?php else: ?>
                <p class="empty-cart">Your cart is empty.</p>
            <?php endif; ?>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        // GSAP Animations
        gsap.from("h1", { opacity: 0, y: -50, duration: 1 });
        gsap.from("table", { opacity: 0, x: -200, duration: 1.5, delay: 0.5 });
        gsap.from(".btn", { scale: 0.8, opacity: 0, duration: 0.5, delay: 1 });
        gsap.from(".total", { opacity: 0, x: 200, duration: 1, delay: 1 });

        // Add cool effects for interaction
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('mouseover', () => {
                gsap.to(button, { scale: 1.1, ease: "power1.out", duration: 0.2 });
            });
            button.addEventListener('mouseleave', () => {
                gsap.to(button, { scale: 1, ease: "power1.out", duration: 0.2 });
            });
        });

        // Scroll animation for table rows
        gsap.from("tr", {
            scrollTrigger: {
                trigger: "tr",
                start: "top 80%",
                end: "bottom 50%",
                scrub: true
            },
            opacity: 0,
            y: 50,
            stagger: 0.1
        });
    </script>
</body>
</html>
