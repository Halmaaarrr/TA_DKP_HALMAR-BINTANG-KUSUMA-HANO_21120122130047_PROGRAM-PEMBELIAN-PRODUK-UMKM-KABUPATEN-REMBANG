<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di UMKM Center</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <form action="payment.php" method="post">
        <div class="halmar">
        <h1>Selamat Datang di UMKM Center</h1>
        <h2>Product Order Form</h2>
        <p>Masukkan nama anda: <input type="text" name="nama" required></p>
        <p>Masukkan alamat anda: <input type="text" name="alamat" required></p>
        <p>Masukkan nomor telepon anda: <input type="number" name="nomor" required></p>
        <br>
        </div>
        <?php
        // Include the Food class
        include 'food.php';

        // Create an array of food items
        $foods = [
            new food('Jahe Merah Instan Akar Jawi (200 gram)', 14000),
            new food('Kopi Keta Kete (150 gram)', 12000),
            new food('Keripik Pisang Susu Keju RISASUKE (50 gram)', 11000),
            new food('Suklats Omah Djadjan (150 gram)', 15000),
            new food('Prasna Sumpia (100 gram)', 15000),
            new food('Stik Teri (100 gram)', 10000),
            new food('Regginang Terinasi (70 gram)', 12000),
            new food('Keripik Ikan Layur (85 gram)', 12000),
            new food('Banachips Yummy (100 gram)', 12000),
            new food('Kerupuk Cumi Pantura (90 gram)', 12000),
            new food('Rempeyek Ikan Kering (90 gram)', 12000),
            new food('Kerupuk Ikan Mbak Nung (90 gram)', 15000),
            new food('Jahe Sereh Instan Akar Jawi (200 gram)', 14000),
            new food('Temulawak Instan Dewi Sehat (150 gram)', 13000),
            new food('Kopi Lelet Madany (200 gram)', 14000),
            new food('Minafood Sumpia (100 gram)', 15000)
        ];

        // Loop through the food items and display checkboxes and quantity inputs
        foreach ($foods as $food) {
            echo '<input type="checkbox" name="food[]" value="' . $food->getName() . '"> ' . $food->getName() . ' Rp'. $food->getPrice();
            echo '<input type="number" name="quantity[' . $food->getName() . ']" min="0" max="20" value="0"><br>';
        }
        ?>

        <br>
        <select name="" id="">
            <option value="">Ambil di tempat</option>
            <option value="">Antar ke alamat</option>
        </select>
        <br>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
