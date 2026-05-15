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

// Step 2: Handle Update Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $pro_id = $_POST['pro_id'];     // Get product ID
    $rate = $_POST['rate'];         // Get current rate entered

    // Calculate 5% increase
    $rate_increase = $rate * 0.05;
    $updated_rate = $rate + $rate_increase;

    // Prepare SQL update statement
    $stmt = $conn->prepare("UPDATE product SET rate = ? WHERE pro_id = ?");
    $stmt->bind_param("ii", $updated_rate, $pro_id);

    if ($stmt->execute()) {
        echo "Rate updated successfully for Product ID $pro_id. New rate is $updated_rate.<br>";
    } else {
        echo "Error updating rate: " . $stmt->error;
    }

    $stmt->close();
}

// Step 3: Fetch all products for display
$product_result = $conn->query("SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product Rate by 5%</title>
</head>
<body>

    <!-- Step 4: Update Form UI -->
    <h2>Update Product Rate by 5%</h2>
    <form method="post" action="">
        <label for="pro_id">Product ID:</label>
        <input type="number" name="pro_id" id="pro_id" required><br><br>

        <label for="rate">Current Rate:</label>
        <input type="number" name="rate" id="rate" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>

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
