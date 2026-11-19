<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<h2>Place Your Order</h2>
<form action="process.php" method="post">
    <!-- Name input -->
    <label>Name</label>
    <input name="customer_name" required>

    <!-- Customer Type input -->
    <label>CUstomer Type</label>
    <select name="customer_type">
        <option value="student">Student</option>
        <option value="employee">Employee</option>
        <option value="guest">Guest</option>
    </select>

    <!-- Product input -->
    <label>Product</label>
    <select name="product">
        <option value="M1">Chicken Adobo Meal</option>
        <option value="M2">Pork Sisig Meal</option>
        <option value="M3">Vegetable Meal</option>
        <option value="D1">Bottled Water</option>
        <option value="D2">Iced Tea</option>
    </select>

    <!-- Quantity input -->
    <label>Quantity</label>
    <input type="number" name="quantity" min="1" max="10" required>
    <label>Budget (PHP)</label>
    <input type="number" name="budget" min="1" step="0.01" required>
    <button type="submit">Process Order</button>
</form>

<?php include 'footer.php'; ?>
?>