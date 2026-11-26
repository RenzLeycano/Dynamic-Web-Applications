<?php
$username = "Renz";
$pagbati = "Hello " . $username . ".";
$offer = [
    'item' => "Caramel",
    'quantity' => 10,
    'price' => 5,
    'discounted' => 3,
];
$reg_price = $offer['quantity'] * $offer['price'];
$offer_price = $offer['quantity'] * $offer['discounted'];
$saving = $reg_price - $offer_price //Step 4 created reg_price instead of usual_price
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <h2>MULTI-BUY OFFER</h2>

    <p><?= $pagbati;?></p>

    <div class="tag">Save $<?= $saving; ?></div>

    <p>Buy <?= $offer['quantity']; ?> packs of <?= $offer['item']; ?> for $<?= $offer_price ?> <br>(Usual price $<?= $reg_price; ?>)</p>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
