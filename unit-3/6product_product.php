<?php 
//database settting
$servername = "localhost";
$username = "root";
$password = "12/10/05";
$database = "myDb";
//set database connection
$conn = new mysqli($servername,$username,$password,$database);
//check connection
if($conn->connect_error){
    die("connection failed".$conn->error);
}

//handel search product form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$pro_id = $_POST['pro_id'];
}

$sql = "SELECT * FROM product where pro_id ='$pro_id'";

$product_result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h2>Current Product list</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Rate</th>
        </tr>
    
        <?php
        if($product_result->num_rows>0){
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
// Close connection at the end
        $conn->close();
?>