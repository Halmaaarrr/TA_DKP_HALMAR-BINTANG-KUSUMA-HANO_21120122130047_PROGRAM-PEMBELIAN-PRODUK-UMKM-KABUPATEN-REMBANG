<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="stylePayment.css">
    
</head>
<body>
    <h2>Order Summary</h2>
    <?php
    echo 'Nama Pemesan : ' .$_POST["nama"];
    echo "<br/>";
    echo 'Alamat Pengiriman : ' .$_POST["alamat"];
    echo "<br/>";    
    echo 'Nomor Telepon: ' .$_POST["nomor"];
    echo "<br/>";   
    ?>
    <table>
        <tr>
            <th>Food Item</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        <?php
        // Include the Food class
        include 'food.php';

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

        $totalPrice = 0;

        // Loop through the selected food items and display the order summary
        if (isset($_POST['food'])) {
            $selectedFoods = $_POST['food'];
            foreach ($selectedFoods as $selectedFood) {
                foreach ($foods as $food) {
                    if ($selectedFood === $food->getName()) {
                        $quantity = $_POST['quantity'][$selectedFood];
                        $price = $food->getPrice() * $quantity;
                        $totalPrice += $price;

                        echo '<tr>';
                        echo '<td>' . $food->getName() . '</td>';
                        echo '<td>' . $quantity . '</td>';
                        echo '<td>Rp ' . $price . '</td>';
                        echo '</tr>';
                    }
                }
            }
        }

        echo '<tr>';
        echo '<td colspan="2">Total:</td>';
        echo '<td>Rp ' . $totalPrice . '</td>';
        echo '</tr>';
        ?>
    </table>
    <form method="post" action="Pembayaran.php">
    <p>PILIH METODE : <select name="pilihan" id="">
            <option value="Rekening BCA dengan No. Rekening 2201089225 atas nama UMKM Center Kabupaten Rembang">BCA</option>
            <option value="Rekening Mandiri dengan No. Rekening 7827561290 atas nama UMKM Center Kabupaten Rembang">Mandiri</option>
            <option value="Rekening BRI dengan No. Rekening 8112130047 atas nama UMKM Center Kabupaten Rembang">BRI</option>
            <option id="COD" value="kurir dengan uang pas">Cash on Delivery</option>
        </select>
        <input type="Submit" value="Lanjutkan pembayaran">
        </p>
        </form>
</body>
</html>
