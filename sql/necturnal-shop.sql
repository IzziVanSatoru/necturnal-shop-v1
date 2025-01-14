-- File SQL untuk membuat tabel produk
CREATE DATABASE IF NOT EXISTS necturnal_shop;

USE necturnal_shop;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Menambahkan 10 produk contoh
INSERT INTO products (name, description, price, image) VALUES
('Insomia Supplement', 'A natural sleep aid to help with insomnia.', 19.99, 'insomia.jpg'),
('Necturnal Energy', 'Boost your energy without the crash of caffeine.', 24.99, 'necturnal.jpg'),
('Sleep Mask', 'Premium sleep mask for better rest.', 15.99, 'sleepmask.jpg'),
('Memory Foam Pillow', 'Comfortable pillow for a good night\'s sleep.', 29.99, 'memoryfoam.jpg'),
('Aromatherapy Diffuser', 'Essential oils for relaxation and better sleep.', 34.99, 'diffuser.jpg'),
('Herbal Tea', 'A calming tea blend to promote relaxation before bed.', 12.99, 'herbaltea.jpg'),
('Bedside Lamp', 'LED lamp with adjustable brightness for a peaceful ambiance.', 22.99, 'bedlamp.jpg'),
('Weighted Blanket', 'Helps reduce anxiety and improve sleep quality.', 49.99, 'weightedblanket.jpg'),
('Yoga Mat', 'Comfortable mat for bedtime yoga or relaxation exercises.', 19.99, 'yogamat.jpg'),
('Sleep Sounds Machine', 'Plays soothing sounds to help you fall asleep.', 39.99, 'soundmachine.jpg');
