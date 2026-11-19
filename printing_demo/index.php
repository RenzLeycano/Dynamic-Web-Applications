<?php
include 'rates.php';
$customerName = 'Juan Dela Cruz';
$customerType = 'student';
$printType = 'colored';
$pages = 5;
$copies = 3;
$paymentMethod = 'cash';
$amountPaid = 150;

// Assigns price based on the print type
$pricePerPage = match ($printType) {
    'blackWhite' => $blackWhiteRate,
    'colored' => $coloredRate,
    'photo' => $photoRate,
    default => 0
};

$subtotal = $pricePerPage * $pages * $copies;

// Assigns a value to discountRate based on the customerType
if($customerType === 'student') {
    $discountRate = .10;
} elseif ($customerType === 'faculty') {
    $discountRate = 0.5;
} else {
    $discountRate = 0;
}

$discount = $subtotal * $discountRate;
$total = $subtotal - $discount;

// Assigns a paymentLabel based on mode of payment
switch ($paymentMethod) {
    case 'cash': $paymentLabel = 'Cash Payment'; break;
    case 'gcash': $paymentLabel = 'GCash Payment'; break;
    default: $paymentLabel = 'Unknown Payment Method';
}

// 
include 'header.php';

echo '<h1>Campus Printing Service</h1>';
echo '<p>Customer: ' . htmlspecialchars($customerName) . '</p>';
echo '<p>Service: ' . htmlspecialchars($printType) . '</p>';
echo '<h3>Printing Breakdown</h3>';

for ($i = 1; $i <= $copies; $i++) {
    echo 'Copy ' . $i . ': PHP ' . 
        number_format($pricePerPage * $pages, 2) . '<br>';
}

echo '<h3>Preperation Status</h3>';
$counter = 1;
while ($counter <= $copies) {
    echo 'Preparing copy ' . $counter . ' of ' . $copies . '<br>';
    $counter++;
}

echo '<p>Subtotal: PHP ' . number_format($subtotal, 2) . '</p>';
echo '<p>Discount: PHP ' . number_format($discount, 2) . '</p>';
echo '<h2>Total Bill: PHP ' . number_format($total, 2) . '</h2>';
echo '<p>Method: PHP ' . $paymentLabel . '</p>';

if ($amountPaid >= $total) {
    echo '<p>Payment Successful! Change: PHP ' .
        number_format($amountPaid - $total, 2) . '</p>';
} else {
    echo '<p>Insufficient Payment! Shortage: PHP ' .
        number_format($total - $amountPaid, 2) . '</p>';
}

include 'footer.php';
?>