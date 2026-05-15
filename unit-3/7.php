<?php
// Step 1: Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "12/10/05";
$dbname = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Fetch all products for display
$conn->query("UPDATE product SET pro_price=100 WHERE pro_id<4");
$product_result = $conn->query("SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Product Price by 100</title>
</head>
<body>

    <!-- Step 5: Display Current Product List -->
    <h2>Current Product List</h2>
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

        // Close connection at the end
        $conn->close();
        ?>
    </table>

</body>
</html>
