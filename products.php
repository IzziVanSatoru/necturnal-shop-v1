<?php
session_start(); // Mulai session

// Menghubungkan ke database
include 'config/database.php';

// Cek apakah koneksi database berhasil
if ($pdo) {
    // Query untuk mengambil data produk
    $query = "SELECT * FROM products LIMIT 10";
    $stmt = $pdo->query($query);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    die("Database connection error!");
}

// Menangani "Add to Cart"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = (int) $_POST['product_id'];
    $product = array_filter($products, function ($p) use ($productId) {
        return $p['id'] === $productId;
    });

    if (!empty($product)) {
        $product = array_values($product)[0];

        // Simpan produk ke session keranjang
        $_SESSION['cart'][$product['id']] = [
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'image' => $product['image'],
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Necturnal Shop</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;/* Dark background for Insomia vibe */
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 2.5rem;
            color: #ecf0f1;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .product-card {
            background-color: #34495e; /* Slightly lighter dark background */
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .btn {
            background-color: #1abc9c; /* Cool color for the button */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #16a085;
        }

        /* GSAP animation style */
        .product-card {
            opacity: 0;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script>
        window.onload = () => {
            // GSAP Animation for fade-in effect
            gsap.to(".product-card", {
                opacity: 1,
                duration: 1,
                stagger: 0.2,
                delay: 0.5,
                ease: "power3.out"
            });
        };
    </script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="products">
            <h1>Our Products</h1>
            <div class="product-list">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="product-card">
                            <img src="assets/images/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" class="product-image">
                            <h3><?= htmlspecialchars($product['name']); ?></h3>
                            <p><?= htmlspecialchars($product['description']); ?></p>
                            <p><strong>$<?= number_format($product['price'], 2); ?></strong></p>
                            <form method="POST" action="">
                                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']); ?>">
                                <button type="submit" class="btn">Add to Cart</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No products available.</p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Four Features Section to Attract Users -->
        <section class="features">
            <h2 style="text-align: center; margin-top: 50px;">Why Choose Us?</h2>
            <div class="feature-list" style="display: flex; justify-content: center; gap: 20px; margin-top: 30px;">
                <div class="feature" style="background-color: #1abc9c; padding: 20px; border-radius: 10px; width: 200px; text-align: center; color: white;">
                    <h3>Natural Ingredients</h3>
                    <p>Our products are made with calming, adaptogenic herbs like chamomile and ashwagandha.</p>
                </div>
                <div class="feature" style="background-color: #e67e22; padding: 20px; border-radius: 10px; width: 200px; text-align: center; color: white;">
                    <h3>Boost Your Energy</h3>
                    <p>Stay alert and productive without the crash from caffeine-based products.</p>
                </div>
                <div class="feature" style="background-color: #8e44ad; padding: 20px; border-radius: 10px; width: 200px; text-align: center; color: white;">
                    <h3>Improved Sleep</h3>
                    <p>Relax and enjoy a deep sleep with our scientifically designed sleep aids.</p>
                </div>
                <div class="feature" style="background-color: #2980b9; padding: 20px; border-radius: 10px; width: 200px; text-align: center; color: white;">
                    <h3>All-Natural</h3>
                    <p>No additives, just pure natural ingredients for your health and wellness.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
