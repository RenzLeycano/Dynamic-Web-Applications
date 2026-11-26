<?php
$user = "Renz";
$greet = "Hello, " . $user . "!";
if($user != "") {
    $greet = "Welcome back, " . $user . "!";
}
$product = "Caramel";
$cost = 10;
$totals = [];

for($i = 1; $i <= 15; $i++) 
{
    $subtotal = $cost * $i;
    $discount = $cost / 100 * $i;
    $totals[$i] = ($subtotal - $discount);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>

    <?php include 'includes/header.php'?>
    <p><?= $greet; ?></p>
    <h2><?= $product ?> discounts</h2>
    <table>
        <tr>
            <th>PACKS</th>
            <th>PRICE</th>
        </tr>
    <?php foreach($totals as $quantity => $price) { ?>
        <tr>
            <td><?= $quantity;?> <?= ($quantity === 1) ? 'pack' : 'packs'; ?></td>
            <td>$<?= $price; ?></td>
        </tr>
    <?php } ?>
    <?php include 'includes/footer.php'?>

    </table>
</body>
</html>
