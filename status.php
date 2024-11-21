<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Status</title>
</head>
<body>
    <h1>Order Status</h1>
    <form action="" method="post">
        <label for="order_id">Order ID:</label>
        <input type="text" name="order_id" required>
        <button type="submit">Check Status</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $order_id = $_POST['order_id'];
        $sql = "SELECT order_status FROM orders WHERE id = $order_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>Status: " . $row['order_status'] . "</p>";
            }
        } else {
            echo "<p>No order found with ID $order_id</p>";
        }
    }
    ?>
</body>
</html>
