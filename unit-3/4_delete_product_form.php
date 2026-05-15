<?php
// Step 1: MySQL database connection setup
$servername = "localhost";
$username = "root";
$password = "12/10/05";
$dbname = "myDb";

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle form submission for deleting a product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Get the product ID entered by the user
    $delete_id = $_POST['pro_id'];

    // Prepare a DELETE SQL statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM product WHERE pro_id = ?");
    $stmt->bind_param("i", $delete_id); // 'i' means integer

    // Execute the DELETE statement
    if ($stmt->execute()) {
        echo "Product with ID $delete_id deleted successfully.<br>";
    } else {
        echo "Error deleting product: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Step 3: Fetch all products from the table to display in HTML
$product_result = $conn->query("SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>

    <!-- Step 4: Delete Form UI -->
    <h2>Delete Product</h2>
    <form method="post" action="">
        <label for="pro_id">Enter Product ID to Delete:</label>
        <input type="number" name="pro_id" id="pro_id" required>
        <input type="submit" name="delete" value="Delete">
    </form>

    <!-- Step 5: Product List Table -->
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
        // Step 6: Loop through result and display data
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

        // Step 7: Close the database connection
        $conn->close();
        ?>
    </table>

</body>
</html>
