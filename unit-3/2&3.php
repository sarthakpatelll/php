<?php 
// MySQL connection settings
$servername = 'localhost';
$username = 'root';
$password = '12/10/05';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// STEP 1: Create database 'myDb'
$sql = "CREATE DATABASE IF NOT EXISTS myDb";
if ($conn->query($sql) === TRUE) {
    echo "Database 'myDb' created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// STEP 2: Select database
$conn->select_db("myDb");

// STEP 3: Create table 'product'
$sql = "CREATE TABLE IF NOT EXISTS product (
    pro_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pro_name VARCHAR(50) NOT NULL,
    pro_price INT(10),
    qty INT(10),
    rate INT(10)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'product' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// STEP 4: Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $qty = $_POST['qty'];
    $rate = $_POST['rate'];

    // Insert data
    $stmt = $conn->prepare("INSERT INTO product (pro_id, pro_name, pro_price, qty, rate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiii", $pro_id, $pro_name, $pro_price, $qty, $rate);
    if ($stmt->execute()) {
        echo "Product inserted successfully!<br>";
    } else {
        echo "Error inserting product: " . $stmt->error;
    }
    $stmt->close();
}

// STEP 5: Fetch all products
$product_result = $conn->query("SELECT * FROM product");

// Connection stays open for now to use in HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details Form</h1>
    <form action="" method="post">
        <label for="pro_id">Product ID:</label><br>
        <input type="number" id="pro_id" name="pro_id" required><br><br>

        <label for="pro_name">Product Name:</label><br>
        <input type="text" id="pro_name" name="pro_name" required><br><br>

        <label for="pro_price">Product Price:</label><br>
        <input type="number" id="pro_price" name="pro_price" required><br><br>

        <label for="qty">Quantity:</label><br>
        <input type="number" id="qty" name="qty" required><br><br>

        <label for="rate">Rate:</label><br>
        <input type="number" id="rate" name="rate" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <h2>Product List</h2>
    <table border="1" cellpadding="5">
        <tr>  
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Rate</th>
        </tr>

        <?php
        if ($product_result->num_rows > 0) {
            while ($row = $product_result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['pro_id']}</td>
                    <td>{$row['pro_name']}</td>
                    <td>{$row['pro_price']}</td>
                    <td>{$row['qty']}</td>
                    <td>{$row['rate']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No products found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
